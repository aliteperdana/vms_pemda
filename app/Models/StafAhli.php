<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StafAhli extends Model
{
    use HasFactory;
    protected $table = 'staf_ahli';
    public $timestamps = false;
    protected $fillable = [
        'sta_id',
        'rkn_id',
        'audittype',
        'audituser',
        'auditupdate',
        'sta_nama',
        'sta_tgllahir',
        'sta_alamat',
        'sta_jabatan',
        'sta_pendidikan',
        'sta_pengalaman',
        'sta_keahlian',
        'sta_email',
        'sta_telepon',
        'sta_jenis_kelamin',
        'sta_kewarganearaan',
        'sta_status',
        'sta_cv',
        'sta_npwp',
        'vms_id'
    ];
}
