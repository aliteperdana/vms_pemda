<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;
    protected $table = 'pengalaman';
    public $timestamps = false;
    protected $fillable = [
        'pgn_id',
        'rkn_id',
        'audittype',
        'audituser',
        'auditupdate',
        'pgl_kegiatan',
        'pgl_lokasi',
        'pgl_pembtgs',
        'pgl_almtpembtgs',
        'pgl_telppembtgs',
        'pgl_nokontrak',
        'pgl_tglkontrak',
        'pgl_nilai',
        'pgl_tglprogress',
        'pgl_persenprogress',
        'pgl_slskontrak',
        'pgl_slsba',
        'pgl_id_attachment',
        'pgl_keterangan',
        'vms_id'
    ];
}
