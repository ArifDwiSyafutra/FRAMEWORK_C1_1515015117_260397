<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'Pengguna';
    protected $fillable = ['username','password'];

    public function mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class);
    }

    public function dosen()
    {
    	return $this->hasOne(dosen::class);	
    }
}
