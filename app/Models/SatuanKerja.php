<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanKerja extends Model
{
    use HasFactory;
    protected $table = 'satuan_kerja';
    public $timestamps = false;
    protected $fillable = [
        'stk_id',
        'agc_id',
        'audittype',
        'audituser',
        'auditupdate',
        'stk_nama',
        'stk_alamat',
        'stk_telepon',
        'stk_contact_person',
        'stk_fax',
        'stk_kodepos',
        'stk_kode',
        'instansi_id',
        'rup_stk_id',
        'rup_stk_tahun',
        'hosted',
        'last_sync',
        'tahun_dekon',
        'eselon',
        'is_sync'
    ];
}
