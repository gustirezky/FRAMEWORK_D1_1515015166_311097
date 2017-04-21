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
Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('jadwal_matakuliahh','jadwal_matakuliahhController@awal');


Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('mahasiswaa/tambah','MahasiswaaController@tambah');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('jadwal_matakuliahh/tambah','jadwal_matakuliahhController@tambah');


Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::get('mahasiswaa/{mahasiswaa}','MahasiswaaController@lihat');
Route::get('dosen/{dosen}','DosenController@lihat');
Route::get('dosen_matakuliah/{dosenmatakuliah}','Dosen_MatakuliahController@lihat');
Route::get('jadwal_matakuliahh/{jadwalmatakuliah}','jadwal_matakuliahhController@lihat');


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


Route::post('dosen_matakuliah/simpan','Dosen_MatakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');


Route::post('jadwal_matakuliahh/simpan','jadwal_matakuliahhController@simpan');
Route::get('jadwal_matakuliahh/edit/{jadwal_matakuliahh}','jadwal_matakuliahhController@edit');
Route::post('jadwal_matakuliahh/edit/{jadwal_matakuliahh}','jadwal_matakuliahhController@update');
Route::get('jadwal_matakuliahh/hapus/{jadwal_matakuliahh}','jadwal_matakuliahhController@hapus');
Route::get('jadwal_matakuliahh/lihat/{jadwa_lmatakuliah}','jadwal_matakuliahhController@lihat');


Route::get('ujiHas','RelationshipRebornController@ujiHas');
Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');

// Route::get('/',function ()
// {
// 	return \App\dosenmatakuliah::whereHas('dosen',function($query)
// 	{
// 		$query->where('nama','like','%s%');
// 	})->with('dosen')->groupBy('dosen_id')->get();
// })

Route::get('/',function()
{
	return \App\dosen_matakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%s%');
	})

	->orWhereHas('matakuliah',function ($kueri)
	{
		$kueri->where('title','like','%z%');
	})

	->with('dosen','matakuliah')->groupBy('dosen_id')->get();
});

Route::get('/test1',function(Illuminate\Http\Request $request)
{
	echo "ini adalah request method get".$request->nama;

});

use Illuminate\Http\Request;
Route::get('/',function()
{
	echo Form::open(['url'=>'/']).
		 Form::label('nama').
		 Form::text('nama',null).
		 Form::submit('kirim').
		 Form::close();
});
Route::post('/',function (Request $request)
{
		echo "Hasil dari form input nama:".$request->nama;
});
//   Route::get('pengguna/{pengguna}',function ($pengguna)
//   {
//     	return "Hai $pengguna";
//     }
// });
