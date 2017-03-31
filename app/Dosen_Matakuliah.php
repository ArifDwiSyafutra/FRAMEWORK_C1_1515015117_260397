<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table = 'Dosen_Matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function Dosen(){
    	return $this->belongsTo(Dosen::class);
    }
    public function Jadwal_Kuliah(){

    	return $this->hasMany(Jadwal_Kuliah::class);
    }
}
