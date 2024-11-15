<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class irs extends Model
{
    use HasFactory;
    protected $table = 'irs';
    protected $primaryKey = 'id_irs';

    protected $fillable = [
        'id_irs',
        'mahasiswa_id',
        'nama',
        'program_studi',
        'semester',
        'tahun_akademik',
        'kode_matkul',
        'nama_matkul',
        'sks',
        'status',
        'tanggal_pengajuan',
        'tanggal_persetujuan'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'nim');
    }

    public function Khs()
    {
        return $this->hasMany(Khs::class,'id_irs');
    }
}
