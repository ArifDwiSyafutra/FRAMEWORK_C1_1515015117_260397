<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $guarded =['id'];
   // protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function pengguna()
    {
    	return $thi->belongTo(pengguna::class);
    }

    public function Jadwal_Kuliah()
    {
    return $thi->hasMany(Jadwal_Kuliah::class,'Mahasiswa_id');	
    }
}
