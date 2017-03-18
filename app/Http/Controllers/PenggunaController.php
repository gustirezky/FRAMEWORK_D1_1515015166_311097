<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
	public function awal()
	{
		return "Hai dari PenggunaController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$pengguna = new Pengguna();
    	$pengguna->username ='jon doe';
    	$pengguna->password ='doe jon';
    	$pengguna->save();
    	return "Data dengan username {$pengguna->username} telah tersimpan";

    }
}
