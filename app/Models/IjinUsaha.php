<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IjinUsaha extends Model
{
    use HasFactory;
    protected $table = 'ijin_usaha';
    public $timestamps = false;
    protected $fillable = [
        'ius_id',
        'rkn_id',
        'jni_id',
        'kls_id',
        'audittype',
        'audituser',
        'auditupdate',
        'ius_no',
        'ius_tanggal',
        'ius_berlaku',
        'ius_instansi',
        'ius_id_attachment',
        'ius_klasifikasi',
        'jni_nama',
        'vms_id',
        'status_berlaku'
    ];
}
