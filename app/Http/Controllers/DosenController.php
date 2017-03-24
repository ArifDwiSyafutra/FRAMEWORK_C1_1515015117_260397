<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal()
    {
    	return "Hello dari DosenController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama = 'Arif';
    	$dosen->nip = '1515015117';
    	$dosen->alamat = 'Jalan Subulussalam';
    	$dosen->pengguna_id = 1;
    	$dosen->save();
    	return "Data dengan nama dosen {$dosen->nama} telah disimpan";
    }
}
