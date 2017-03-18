<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_matakuliahh;

class Jadwal_matakuliahhController extends Controller
{
      public function awal()
	{
		return "Hai dari jadwal_matakuliahhController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwal_matakuliahh = new jadwal_matakuliahh();
    	$jadwal_matakuliahh->mahasiswaa_id='1';
    	$jadwal_matakuliahh->ruangan_id='1';
    	$jadwal_matakuliahh->dosen_matakuliah_id='1';
    	

    	$jadwal_matakuliahh->save();
    	return "Data dengan username {$jadwal_matakuliahh->mahasiswa_id} telah tersimpan";
}
}