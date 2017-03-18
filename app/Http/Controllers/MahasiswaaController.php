<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswaa;

class MahasiswaaController extends Controller
{
      public function awal()
	{
		return "Hai dari MahasiswaaController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswaa = new mahasiswaa();
    	$mahasiswaa->nama ='gusti rezky';
    	$mahasiswaa->nim ='1515015166';
    	$mahasiswaa->alamat ='sentosa';
    	$mahasiswaa->pengguna_id='1';
    	$mahasiswaa->save();
    	return "Data dengan username {$mahasiswaa->nama} telah tersimpan";
}
}
