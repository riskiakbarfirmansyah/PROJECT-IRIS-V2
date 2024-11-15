<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $fillable = [
        'id',
        'id_mk',
        'hari',
        'ruangan',
        'nama_mk',
        'sks',
        'sifat',
        'kelas',
        'semester',
        'jam_mulai',
        'jam_selesai',
        'koordinator_mk',
        'pengampu_1',
        'pengampu_2',
        'pengampu_3',
        'persetujuan'
    ];
    public function Matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kode_mk', 'kode_mk');
    }
}
