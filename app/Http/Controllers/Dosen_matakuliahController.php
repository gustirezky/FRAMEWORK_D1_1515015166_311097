<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_matakuliah;

class Dosen_matakuliahController extends Controller
{
      public function awal()
	{
		return "Hai dari dosen_matakuliahController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen_matakuliah = new dosen_matakuliah();
    	$dosen_matakuliah->dosen_id='1';
    	$dosen_matakuliah->matakuliah_id='1';
    	$dosen_matakuliah->save();
    	return "Data dengan username {$dosen_matakuliah->dosen_id} telah tersimpan";
}
}
