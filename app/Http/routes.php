<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('hai-dunia', function () {
   // return 'Hai Dunia';


 Route::get('/',function ()
   {
     	return view('welcome');
    
 });

Route::get('pengguna','PenggunaController@awal');
Route::get('ruangan','RuanganController@awal');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('mahasiswaa','MahasiswaaController@awal');
Route::get('dosen','DosenController@awal');
Route::get('dosenmatakuliah','DosenMatakuliahController@awal');
Route::get('jadwalmatakuliah','JadwalMatakuliahController@awal');


Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('mahasiswaa/tambah','MahasiswaaController@tambah');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosenmatakuliah/tambah','DosenMatakuliahController@tambah');
Route::get('jadwalmatakuliah/tambah','JadwalMatakuliahController@tambah');


Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::get('mahasiswaa/{mahasiswaa}','MahasiswaaController@lihat');
Route::get('dosen/{dosen}','DosenController@lihat');
Route::get('dosenmatakuliah/{dosenmatakuliah}','DosenMatakuliahController@lihat');
Route::get('jadwalmatakuliah/{jadwalmatakuliah}','JadwalMatakuliahController@lihat');


Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/lihat/{Pengguna}','PenggunaController@lihat');


Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');


Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');


Route::post('mahasiswaa/simpan','MahasiswaaController@simpan');
Route::get('mahasiswaa/edit/{mahasiswaa}','MahasiswaaController@edit');
Route::post('mahasiswaa/edit/{mahasiswaa}','MahasiswaaController@update');
Route::get('mahasiswaa/hapus/{mahasiswaa}','MahasiswaaController@hapus');
Route::get('mahasiswaa/lihat/{mahasiswaa}','MahasiswaaController@lihat');


Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');


Route::post('dosenmatakuliah/simpan','DosenMatakuliahController@simpan');
Route::get('dosenmatakuliah/edit/{dosenmatakuliah}','DosenMatakuliahController@edit');
Route::post('dosenmatakuliah/edit/{dosenmatakuliah}','DosenMatakuliahController@update');
Route::get('dosenmatakuliah/hapus/{dosenmatakuliah}','DosenMatakuliahController@hapus');
Route::get('dosenmatakuliah/lihat/{dosenmatakuliah}','DosenMatakuliahController@lihat');


Route::post('jadwalmatakuliah/simpan','JadwalMatakuliahController@simpan');
Route::get('jadwalmatakuliah/edit/{jadwalmatakuliah}','JadwalMatakuliahController@edit');
Route::post('jadwalmatakuliah/edit/{jadwalmatakuliah}','JadwalMatakuliahController@update');
Route::get('jadwalmatakuliah/hapus/{jadwalmatakuliah}','JadwalMatakuliahController@hapus');
Route::get('jadwalmatakuliah/lihat/{jadwalmatakuliah}','JadwalMatakuliahController@lihat');

//   Route::get('pengguna/{pengguna}',function ($pengguna)
//   {
//     	return "Hai $pengguna";
//     }
// });
