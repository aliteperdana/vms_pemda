<?php

namespace App\Actions\Apis;

use App\Models\Kontrak;
use App\Models\Pemilik;
use App\Models\Rekanan;
use App\Models\Pengurus;
use App\Models\Propinsi;
use App\Models\StafAhli;
use App\Models\IjinUsaha;
use App\Models\Kabupaten;
use App\Models\LogUpload;
use App\Models\Peralatan;
use App\Models\Pengalaman;
use App\Models\BentukUsaha;
use App\Models\SatuanKerja;
use App\Models\LelangSeleksi;

class ListModels 
{
    public $table;
    public function __construct($table){
        $this->table = $table;
    }

    public function ListTableModels(){
        switch ($this->table) {
            case 'bentuk_usaha':
                $model = new BentukUsaha;
                break;
            case 'ijin_usaha':
                $model = new IjinUsaha;
                break;
            case 'kabupaten':
                $model = new Kabupaten;
                break;
            case 'kontrak':
                $model = new Kontrak;
                break;
            case 'pemilik':
                $model = new Pemilik;
                break;
            case 'pengalaman':
                $model = new Pengalaman;
                break;
            case 'pengurus':
                $model = new Pengurus;
                break;
            case 'peralatan':
                $model = new Peralatan;
                break;   
            case 'propinsi':
                $model = new Propinsi;
                break; 
            case 'rekanan':
                $model = new Rekanan;
                break; 
            case 'satuan_kerja':
                $model = new SatuanKerja;
                break; 
            case 'staf_ahli':
                $model = new StafAhli;
                break; 
        }

        return $model;
    }
}
