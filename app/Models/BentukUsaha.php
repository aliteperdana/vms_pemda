<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BentukUsaha extends Model
{
    use HasFactory;
    protected $table = 'bentuk_usaha';
    public $timestamps = false;
    protected $fillable = [
        'btu_id',
        'audittype',
        'audituser',
        'auditupdate',
        'btu_nama'
    ];
}
