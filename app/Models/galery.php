<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galery extends Model
{
    use HasFactory;
    protected $table = 'galeries';
    protected static $ignoreChangedAttributes = ['update_at'];
    protected $fillable = [
        'id',
        'gambar',
        'deskripsi'
    ];
}
