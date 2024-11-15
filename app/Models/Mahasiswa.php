<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'no_telp',
        'jenis_kelamin',
        'tanggal_lahir',
        'prodi',
        'jalur_masuk',
        'angkatan',
        'ipk',
        'alamat',
        'dosen_wali',
        'status'
    ];

    public function dosens()
    {
        return $this->belongsTo(dosens::class, 'dosen_wali', 'nip');
    }

    public function irs()
    {
        return $this->hasMany(irs::class, 'mahasiswa_id', 'nim');
    }

    public function Khs()
    {
        return $this->hasMany(Khs::class, 'mahasiswa_id', 'nim');
    }
}
