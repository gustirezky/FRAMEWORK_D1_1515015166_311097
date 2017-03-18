<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
      public function awal()
	{
		return "Hai dari ruanganController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new ruangan();
    	$ruangan->title ='Ruang 405';
    	$ruangan->save();
    	return "Data dengan username {$ruangan->tittle} telah tersimpan";
}
}
