<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas'; 
    protected $fillable = ['npk','kode','id_dosen','kelas','ruang'];
    public function mahasiswa() {
    	return $this->belongsTo(Mahasiswa::class, 'npk');
    }
}
