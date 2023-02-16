<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogUpload extends Model
{
    use HasFactory;
    protected $table = 'log_upload';
    protected $fillable = [
        'nm_tbl',
        'nm_folder'
    ];
}
