<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_obat',
        'nama',
        'id_jenis',
        'expired',
        'stok',
        'dosis',
        'photo',
        'harga',

    ];
}