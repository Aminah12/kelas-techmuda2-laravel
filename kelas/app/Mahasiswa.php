<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kelas;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'npk'; 
    protected $fillable = ['npk','nama_mahasiswa','jenis_kelamin','tempat_lahir','tanggal_lahir','agama','alamat','no_hp','jurusan'];

    public function kelas(){
    	return $this->hasOne(Kelas::class);
    }
}
