<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khs extends Model
{
    use HasFactory;
    protected $table = 'k_h_s';

    protected $fillable = [
        'id_khs',
        'nama',
        'program_studi',
        'semester',
        'kode_mk',
        'nama_mk',
        'nilai_angka',
        'nilai_huruf'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'nim');
    }
}
