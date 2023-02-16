<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Apis\ApisActions;
use App\Http\Requests\ApisRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Bus;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success'   => true,
            'message'   => 'OK',
        ],200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // API Request Public
    // -----------------------------------------

    public function bentuk_usaha(ApisRequest $request){
        // Set Key
        $table = 'bentuk_usaha';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);

                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function kontrak(ApisRequest $request){
        // Set Key
        $table = 'kontrak';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function kabupaten(ApisRequest $request){
        // Set Key
        $table = 'kabupaten';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function pengalaman(ApisRequest $request){
        // Set Key
        $table = 'pengalaman';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($Apis->ReturnMessage($process_request));
    }

    public function pemilik(ApisRequest $request){
        // Set Key
        $table = 'pemilik';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function pengurus(ApisRequest $request){
        // Set Key
        $table = 'pengurus';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function ijin_usaha(ApisRequest $request){
        // Set Key
        $table = 'ijin_usaha';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function peralatan(ApisRequest $request){
        // Set Key
        $table = 'peralatan';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function propinsi(ApisRequest $request){
        // Set Key
        $table = 'propinsi';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function satuan_kerja(ApisRequest $request){
        // Set Key
        $table = 'satuan_kerja';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function rekanan(ApisRequest $request){
        // Set Key
        $table = 'rekanan';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function staf_ahli(ApisRequest $request){
        // Set Key
        $table = 'staf_ahli';
        $Apis = new ApisActions;

        // Process 
        $process_request = $Apis->ProcessRequest($request,$table);
                
        // Return Message
        return response()->json($this->ReturnMessage($process_request));
    }

    public function check_process(Request $request){
        $id = $request->id;
        $data = Bus::findBatch($id);
        return response()->json($data);
    }

    private function ReturnMessage($process_request){
        $message = $process_request;
        if (isset($process_request->original)) {
            $message = $process_request->original;
        }
        return $message;
    }



}
