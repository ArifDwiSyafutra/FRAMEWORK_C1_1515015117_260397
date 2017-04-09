<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jadwal_Kuliah;
Use App\Mahasiswa;
use App\Dosen_Matakuliah;
use App\Ruangan;
use App\Matakuliah;
use App\Dosen;


class Jadwal_KuliahController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';

     public function awal()
    {
    	//return "Hello dari Jadwal_KuliahController";
        $semuaJadwalKuliah = Jadwal_Kuliah::all();
        return view('jadwal_kuliah.awal',compact('semuaJadwalKuliah'));
    }
    public function tambah()
    {
    	//return $this->simpan();
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('jadwal_kuliah.tambah',compact('mahasiswa','ruangan','dosen_matakuliah'));
    }
    public function simpan(Request $input)
    {
    	//$jadwal_kuliah = new Jadwal_Kuliah();
    	//$jadwal_kuliah->mahasiswa_id = 1;
    	//$jadwal_kuliah->ruangan_id = 1;
    	//$jadwal_kuliah->dosen_matakuliah_id = 1;
    	//$jadwal_kuliah->save();
    	//return "Data dengan jadwal id mahasiswa {$jadwal_kuliah->mahasiswa_id} telah disimpan";
        $jadwal_kuliah = new Jadwal_kuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwal_kuliah->save()) $this->informasi="Jadwal Mahasiswa berhasil disimpan";
        return redirect('jadwal_kuliah')->with(['informasi'=>$this->informasi]);
    }
    public function lihat($id){
        $jadwal_kuliah = Jadwal_Kuliah::find($id);
        return view('jadwal_kuliah.lihat',compact('jadwal_kuliah'));
    }

    public function edit($id){
        $jadwal_kuliah = Jadwal_Kuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('jadwal_kuliah.edit',compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_kuliah'));
    }

    public function update($id,Request $input)
    {
        $jadwal_kuliah = Jadwal_Kuliah::find($id);
        $jadwal_kuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwal_kuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('jadwal_kuliah')->with(['informasi'=>$this->informasi]);
    }

    public function hapus($id,Request $input)
    {
        $jadwal_kuliah = Jadwal_Kuliah::find($id);
        if($jadwal_kuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        return redirect('jadwal_kuliah')-> with(['informasi'=>$this->informasi]);
    }
}
