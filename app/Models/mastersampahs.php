<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mastersampahs extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'jenis_sampah', 'deskripsi', 'harga'
    ];
}
