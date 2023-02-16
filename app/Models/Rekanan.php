<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
    use HasFactory;
    protected $table = 'rekanan';
    public $timestamps = false;
    protected $fillable = [
        'rkn_id',
        'btu_id',
        'cer_id',
        'kbp_id',
        'audittype',
        'audituser',
        'auditupdate',
        'rkn_nama',
        'rkn_alamat',
        'rkn_kodepos',
        'rkn_telepon',
        'rkn_fax',
        'rkn_mobile_phone',
        'rkn_npwp',
        'rkn_pkp',
        'rkn_statcabang',
        'rkn_email',
        'rkn_website',
        'rkn_tgl_daftar',
        'rkn_tgl_setuju',
        'rkn_almtpusat',
        'rkn_telppusat',
        'rkn_faxpusat',
        'rkn_emailpusat',
        'rkn_namauser',
        'rkn_isactive',
        'rkn_status',
        'rkn_keterangan',
        'pps_id',
        'rkn_status_verifikasi',
        'ver_namauser',
        'repo_id',
        'rkn_namapusat',
        'ngr_id',
        'kota',
        'status_migrasi',
        'last_sync_vms',
        'passw',
        'isbuiltin',
        'disableuser',
        'reset_password',
        'ams_id',
        'edited_data'
    ];
}
