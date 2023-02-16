<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $table = 'pengurus';
    public $timestamps = false;
    protected $fillable = [
        'pgr_id',
        'rkn_id',
        'audittype',
        'audituser',
        'auditupdate',
        'pgr_nama',
        'pgr_ktp',
        'pgr_alamat',
        'pgr_jabatan',
        'pgr_iskomis',
        'pgr_valid_start',
        'pgr_valid_end',
        'pgr_npwp',
        'vms_id'
    ];
}
