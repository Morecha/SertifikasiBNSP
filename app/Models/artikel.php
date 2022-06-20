<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';
    protected static $ignoreChangedAttributes = ['update_at'];
    protected $fillable = [
        'id',
        'judul',
        'deskripsi',
        'text'
    ];
}
