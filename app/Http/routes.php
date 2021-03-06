<?php

Route::get('/', function () {
    return view ('master');
});

//------------------------------------------------------------------

Route::get('/pengguna', 'PenggunaController@awal');

Route::get('/pengguna/tambah', 'PenggunaController@tambah');

//------------------------------------------------------------------

Route::get('/dosen', 'DosenController@awal');

Route::get('dosen/tambah', 'DosenController@tambah');

//------------------------------------------------------------------

Route::get('/mahasiswa', 'MahasiswaController@awal');

Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('/mahasiswa/tambah/route', function(){
		$mahasiswa = new App\Mahasiswa();
        $mahasiswa->nama = 'Arif dwi syafutra';
        $mahasiswa->nim = '1515015117';
        $mahasiswa->alamat = 'Jl. Subuluusaalam';
        $mahasiswa->pengguna_id = 3;
        $mahasiswa->save();
        return "Telah disave {$mahasiswa->nama} ke dalam databas";
});

//------------------------------------------------------------------

Route::get('/ruangan', 'RuanganController@awal');
Route::get('/ruangan/tambah', 'RuanganController@tambah');

//------------------------------------------------------------------

Route::get('/matakuliah', 'MatakuliahController@awal');

Route::get('/matakuliah/tambah', 'MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/dosen_matakuliah', 'Dosen_matakuliahController@awal');

Route::get('/dosen_matakuliah/tambah', 'Dosen_MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/jadwal_kuliah', 'Jadwal_KuliahController@awal');

Route::get('/jadwal_kuliah/tambah', 'Jadwal_KuliahController@tambah');

//------------------------------------------------------------------

Route::get('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');
Route::post('pengguna/simpan', 'PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');

//------------------------------------------------------------------

Route::get('matakuliah/lihat/{matakuliah}', 'MatakuliahController@lihat');
Route::post('matakuliah/simpan', 'MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}', 'MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}', 'MatakuliahController@hapus');

//------------------------------------------------------------------

Route::get('ruangan/lihat/{ruangan}', 'RuanganController@lihat');
Route::post('ruangan/simpan', 'RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}', 'RuanganController@edit');
Route::post('ruangan/edit/{ruangan}', 'RuanganController@update');
Route::get('ruangan/hapus/{ruangan}', 'RuanganController@hapus');

//------------------------------------------------------------------

Route::get('mahasiswa', 'MahasiswaController@awal');
Route::get('mahasiswa/lihat/{mahasiswa}', 'MahasiswaController@lihat');
Route::post('mahasiswa/simpan', 'MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}', 'MahasiswaController@hapus');

//------------------------------------------------------------------

Route::get('dosen/lihat/{dosen}', 'DosenController@lihat');
Route::post('dosen/simpan', 'DosenController@simpan');
Route::get('dosen/edit/{dosen}', 'DosenController@edit');
Route::post('dosen/edit/{dosen}', 'DosenController@update');
Route::get('dosen/hapus/{dosen}', 'DosenController@hapus');

//------------------------------------------------------------------

Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}', 'Dosen_matakuliahController@lihat');
Route::post('dosen_matakuliah/simpan', 'Dosen_matakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_matakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_matakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}', 'Dosen_matakuliahController@hapus');

//------------------------------------------------------------------

Route::get('jadwal_kuliah', 'Jadwal_KuliahController@awal');
Route::get('jadwal_kuliah/tambah', 'Jadwal_KuliahController@tambah');
Route::get('jadwal_kuliah/lihat/{jadwal_kuliah}', 'Jadwal_KuliahController@lihat');

Route::post('jadwal_kuliah/simpan', 'Jadwal_KuliahController@simpan');

Route::get('jadwal_kuliah/edit/{jadwal_kuliah}', 'Jadwal_KuliahController@edit');

Route::post('jadwal_kuliah/edit/{jadwal_kuliah}', 'Jadwal_KuliahController@update');

Route::get('jadwal_kuliah/hapus/{jadwal_kuliah}', 'Jadwal_KuliahController@hapus');

//------------------------------------------------------------------

    Route::get('relasi/mahasiswa',function(){
    $mahasiswa=App\Pengguna::find(5)->mahasiswa;
    return "<li>$mahasiswa";
});


    Route::get('relasi/pengguna',function(){
    $mahasiswa=App\Pengguna::find(5)->pengguna;
    return "<li>$pengguna";
});


    Route::get('relasi/dosen',function(){
    $mahasiswa=App\Pengguna::find(1)->dosen;
    return "<li>$pengguna";
});

