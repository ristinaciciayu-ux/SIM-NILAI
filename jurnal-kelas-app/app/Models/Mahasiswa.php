<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Prodi;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'mahasiswa_id';

    protected $fillable = [
        'nim','nama_lengkap','jenis_kelamin',
        'prodi_id','aktif'
    ];

    public function prodi()
    {
        return $this->hasOne(Prodi::class, 'prodi_id', 'prodi_id');
    }
}