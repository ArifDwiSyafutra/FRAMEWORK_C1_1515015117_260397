<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Kuliah;

class Jadwal_KuliahController extends Controller
{
     public function awal()
    {
    	return "Hello dari Jadwal_KuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwal_kuliah = new Jadwal_Kuliah();
    	$jadwal_kuliah->mahasiswa_id = 1;
    	$jadwal_kuliah->ruangan_id = 1;
    	$jadwal_kuliah->dosen_matakuliah_id = 1;
    	$jadwal_kuliah->save();
    	return "Data dengan jadwal id mahasiswa {$jadwal_kuliah->mahasiswa_id} telah disimpan";
    }
}
