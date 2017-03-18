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
Route::get('dosen','DosenController@awal');
Route::get('mahasiswaa','MahasiswaaController@awal');
Route::get('ruangan','RuanganController@awal');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('dosen_matakuliah','Dosen_matakuliahController@awal');
Route::get('jadwal_matakuliahh','Jadwal_matakuliahhController@awal');



Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('mahasiswaa/tambah','MahasiswaaController@tambah');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('dosen_matakuliah/tambah','Dosen_matakuliahController@tambah');
Route::get('jadwal_matakuliahh/tambah','Jadwal_matakuliahhController@tambah');
//   Route::get('pengguna/{pengguna}',function ($pengguna)
//   {
//     	return "Hai $pengguna";
//     }
// });
