<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'namapasien',
        'kodepasien',
        'namadokter',
        'lahir',
        'agama',
        'status',
        'jeniskelamin',
        'telepon',
        'alamat',
    ];
    protected $guarded =['id'];

    protected $dates = ['lahir', 'created_at', 'updated_at', 'jadwal_kedatangan', 'jadwal_selesai'];
    // public function dokters() {
    //     return $this->hasMany(Dokter::class);
    // }

    public function rekam(){
        return $this->hasMany(Rekam::class, 'id');
    }
}