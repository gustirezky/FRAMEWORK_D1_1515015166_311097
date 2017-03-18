<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
      public function awal()
	{
		return "Hai dari matakuliahController";
	}
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah->title ='Struktur Data';
    	$matakuliah->keterangan ='Mata Kuliah Wajib';
    	$matakuliah->save();
    	return "Data dengan username {$matakuliah->title} telah tersimpan";
}
}