<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;
    protected $table = 'peralatan';
    public $timestamps = false;
    protected $fillable = [
        'alt_id',
        'rkn_id',
        'audittype',
        'audituser',
        'auditupdate',
        'alt_jenis',
        'alt_jumlah',
        'alt_kapasitas',
        'alt_merktipe',
        'alt_thpembuatan',
        'alt_kondisi',
        'alt_lokasi',
        'alt_kepemilikan',
        'skp_id',
        'vms_id'
    ];
}
