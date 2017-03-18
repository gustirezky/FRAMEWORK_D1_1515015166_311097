<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
   public function awal()
	{
		return "Hai dari DosenController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama='pak dosen';
        $dosen->nip='12345';
        $dosen->alamat='lambung';
    	$dosen->pengguna_id='1';
    	$dosen->save();
    	return "Data dengan username {$dosen->nama} telah tersimpan";

}
}