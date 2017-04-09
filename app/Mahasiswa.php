<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $guarded =['id'];
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }

    public function Jadwal_Kuliah()
    {
    return $this->hasMany(Jadwal_Kuliah::class,'Mahasiswa_id');	
    }

    public function listMahasiswaDanNIm(){
        $out =[];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id]="{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }

}
