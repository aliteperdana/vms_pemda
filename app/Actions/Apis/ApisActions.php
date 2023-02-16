<?php

namespace App\Actions\Apis;

use ZipArchive;
use App\Models\LogUpload;
use App\Jobs\StoreProcess;
use Illuminate\Http\Request;
use App\Jobs\TruncateProcess;
use App\Actions\Apis\ListModels;
use App\Actions\Apis\ApisActions;
use App\Http\Requests\ApisRequest;
use App\Jobs\LelangSeleksiProcess;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApisActions 
{

    public function __construct(){

    }

    public function ProcessRequest($request,$table){
        // Check Name File
        $file = $request->file('file');
        $nama_file_upload = $file->getClientOriginalName();
        $this->checkFileName($table, $nama_file_upload);

        // Save File To Local Storage
        $file_saved = $this->SaveFile($request,$table);
        
        
        // Clear Database
        Bus::batch(new TruncateProcess($table))->dispatch();
        

        // Test Upload Data
        $test_upload = $this->TestUpload($file_saved,$table);
        if ($test_upload['status'] == false) {
            return response()->json($test_upload['response']);
        }

        // Clear Database
        Bus::batch(new TruncateProcess($table))->dispatch();
        

        // Create Jobs To Insert
        $store_data = $this->StoreData($file_saved, $table);
        

        // Create Log Upload
        $this->CreateLog($table,$file_saved);

        
        // Return Message
        $return_message = [
            'success'   => true,
            'message'   => 'Data Telah di Tambahkan',
            'process_id' => $store_data
        ];
        return $return_message;
    }

       
    public function SaveFile($request,$table){
        // Set Variable
        $hashname = $request->file('file')->hashName();
        $split_hashname = explode('.',$hashname);
        $path_folder = "get_data/".$split_hashname[0];
        $nama_file = $split_hashname[0].".".$split_hashname[1];

        // Save FIle Upload
        $path = $request->file->storeAs($path_folder,$nama_file);
        
        // Extract File Upload
        $full_path_file = Storage::path($path);
        $full_path_destination = chop($full_path_file,$nama_file);

        // var_dump($full_path_destination);
        // die();
        
        $zip = new ZipArchive;
        $zip->open($full_path_file);
        $zip->extractTo($full_path_destination);
        $zip->close();
        
        // Get All File Extracted
        $file_extracted = array();
        foreach (glob($full_path_destination."*.gz") as $value) {
            array_push($file_extracted,str_replace($full_path_destination,"",$value));
        }
        
        $data_return = [
            'nm_folder' => $path_folder,
            'full_path_directory' => $full_path_destination,
            'files' => $file_extracted
        ];
        
        return $data_return;
    }

    public function checkFileName($key, $filename){
        $name = explode('-',$filename);
        if ($key === $name[0]) {
            return true;
        }

        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Nama File Tidak Sesuai',
        ]));
    }

    public function rollbackTable($table, $file_saved){

        // Delete File
        Storage::deleteDirectory($file_saved['nm_folder']);


        // Clear Database
        Bus::batch(new TruncateProcess($table))->dispatch();

        // Get Last Data Success
        $data = LogUpload::where('nm_tbl', $table)
                    ->orderByDesc('created_at')
                    ->first();
        
        
        if(isset($data)){
            $nama_folder = $data->nm_folder;
            $this->RollbackProcess($nama_folder,$table);
        } 
        
        return response()->json([
            'success'   => false,
            'message'   => 'Format File Tidak Sesuai',
        ]);
    } 

    public function RollbackProcess($nm_file,$table){

        // Get All Files Name
        $files_json = array();
        $full_path_destination = Storage::path($nm_file)."/";

        foreach (glob($full_path_destination."*.gz") as $value) {
            array_push($files_json,str_replace($full_path_destination,"",$value));
        }

        $data = [
            'nm_folder' => $nm_file,
            'files' => $files_json
        ];

        $this->StoreData($data,$table);

    }

    public function UncompressFile($path,$nama_file){
        // Get the full path to the file
        $full_path = Storage::path($path);
        
        $extact_nm_file = explode(".",$nama_file);
        $nama_file_baru = $extact_nm_file[0].".".$extact_nm_file[1];
        
        $full_path_file_baru = str_replace($nama_file,"",$full_path);
        $full_path_file_baru = $full_path_file_baru.$nama_file_baru;

        $file_compress = gzopen($full_path, 'rb');
        $new_file = fopen($full_path_file_baru, 'wb');

        while (!gzeof($file_compress)) {
            fwrite($new_file, gzread($file_compress, 4096));
        }

        gzclose($file_compress);
        fclose($new_file);

        return $full_path_file_baru;
    }

    public function TestUpload($file_saved,$table){
        
        // Check If array is null
        if (empty($file_saved['files'])) {
            $rollback = $this->rollbackTable($table,$file_saved);
            $status = ['status' => false,
            'response' => $rollback->original
        ];
            return $status;
        }

        $status = ['status'=>true];
        $contents = Storage::get($file_saved['nm_folder']."/".$file_saved['files'][0]);
        $file_json = json_decode(gzdecode($contents),true);

        // Get Model From Class List Models
        $listmodels = new ListModels($table);
        $data_model = $listmodels->ListTableModels();

        
        try {
            foreach ($file_json as $key) {
                $data_model::create($key);
            }
        } catch (\Throwable $th) {

            $rollback = $this->rollbackTable($table,$file_saved);
            $status = ['status' => false,
                'response' => $rollback->original
            ];
        }

        return $status;
    }

    public function StoreData($file_saved,$table){

        $batch = Bus::batch([])->dispatch();
        
        // foreach ($file_saved['files'] as $key) {
        //     $contents = Storage::get($file_saved['nm_folder']."/".$key);
        //     $file_json = json_decode(gzdecode($contents),true);
            
        //     $batch->add(new StoreProcess($file_json,$table));
            
        // }

        // Job Perfile
        // -----------------------------------------
        $batch->add(new StoreProcess($file_saved,$table));

        return $batch->id;

    }

    public function CreateLog($table,$file_saved){

        $log = LogUpload::create([
            'nm_tbl' => $table,
            'nm_folder' => $file_saved['nm_folder']
        ]);

        return true;
    }
}
