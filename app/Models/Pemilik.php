<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;
    protected $table = 'pemilik';
    public $timestamps = false;
    protected $fillable = [
        'pml_id',
        'rkn_id',
        'audittype',
        'audituser',
        'auditupdate',
        'pml_nama',
        'pml_ktp',
        'pml_alamat',
        'pml_saham',
        'pml_valid_start',
        'pml_valid_end',
        'pml_satuan',
        'pml_npwp',
        'vms_id'
    ];
}
