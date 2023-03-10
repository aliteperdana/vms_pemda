<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;
    protected $table = 'kabupaten';
    public $timestamps = false;
    protected $fillable = [
        'kbp_id',
        'prp_id',
        'audittype',
        'audituser',
        'auditupdate',
        'kbp_nama',
        'kbp_statusadm'
    ];
}
