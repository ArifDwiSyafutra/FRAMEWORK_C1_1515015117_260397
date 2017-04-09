<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'Ruangan';
    protected $fillable = ['title'];

    public function Jadwal_Kuliah(){
    	return $this->hasMany(Jadwal_Kuliah::class);
    }
}
