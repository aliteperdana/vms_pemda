<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use App\Actions\Apis\ListModels;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class StoreProcess implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $data;
    public $table;
    public $timeout = 60*60;
    public function __construct($data,$table)
    {
        $this->data = $data;
        $this->table = $table;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Get Models From Class ListModels
        $listmodels = new ListModels($this->table);
        $model = $listmodels->ListTableModels();


        // Job Perfolder
        // -----------------------------------------
        foreach ($this->data['files'] as $key) {
            $contents = Storage::get($this->data['nm_folder']."/".$key);
            $file_json = json_decode(gzdecode($contents),true);
        
            foreach ($file_json as $nilai) {
                $model::create($nilai);
            }
        }


        // Job Perfile
        // -----------------------------------------
        // foreach ($this->data as $nilai) {
        //     $model::create($nilai);
        // }

    }
}
