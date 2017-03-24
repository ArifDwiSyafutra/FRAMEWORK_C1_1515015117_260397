<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
   public function awal()
    {
    	return "Hello dari MahasiswaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Bambang Cahyono';
    	$mahasiswa->nim = '1515015117';
    	$mahasiswa->alamat = 'Jalan Kebaktian';
    	$mahasiswa->pengguna_id = 1;
    	$mahasiswa->save();
    	return "Data dengan nama mahasiswa {$mahasiswa->nama} telah disimpan";
    }
}