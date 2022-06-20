<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klien extends Model
{
    use HasFactory;
    protected $table = 'kliens';
    protected static $ignoreChangedAttributes = ['update_at'];
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'deskripsi',
        'kendaraan',
        'tanggal'
    ];
}
