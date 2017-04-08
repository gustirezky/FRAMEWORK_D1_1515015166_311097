<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliahh;
use App\mahasiswaa;
use App\dosen_matakuliah;
use App\ruangan;

class jadwal_matakuliahhController extends Controller
{   protected $informasi = 'Gagal melakukan aksi';
     public function awal()
    {   $semuaJadwalMatakuliah= jadwal_matakuliahh::all();
        return view('jadwal_matakuliahh.awal', compact('semuaJadwalMatakuliah'));
    }
        
    public function tambah()
    {       $mahasiswaa= new Mahasiswaa;
            $ruangan= new Ruangan;
            $dosen_matakuliah= new dosen_matakuliah;
        return view('jadwal_matakuliahh.tambah',compact('mahasiswaa','ruangan','dosen_matakuliah'));
    }

    public function simpan(Request $input)
    {
        $jadwal_matakuliahh = new jadwal_matakuliahh($input->only('ruangan_id','dosen_matakuliah_id','mahasiswaa_id'));
        if ($jadwal_matakuliahh->save()) $this->informasi = "jadwal Matakuliah berhasil disimpan";
        return redirect('jadwal_matakuliahh')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id){
        $jadwal_matakuliahh = jadwal_matakuliahh::find($id);
        $mahasiswaa = new Mahasiswaa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwal_matakuliahh.edit',compact('mahasiswaa','ruangan','dosen_matakuliah','jadwal_matakuliahh'));


          }
    
    public function lihat($id)
    {
        $jadwal_matakuliahh = jadwal_matakuliahh::find($id);
         return view('jadwal_matakuliahh.lihat',compact('jadwal_matakuliahh'));      
}
    public  function update($id, Request $input){
        $jadwal_matakuliahh = jadwal_matakuliahh::find($id);
        
        $jadwal_matakuliahh->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswaa_id'));
        if ($jadwal_matakuliahh->save())$this->informasi="jadwal Mahasiswaa telah di perbaharui";
       
        return redirect('jadwal_matakuliahh')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
    $jadwal_matakuliahh = jadwal_matakuliahh::find($id);
        if ($jadwal_matakuliahh->delete())$this->informasi="jadwal mahasiswaa berhasil dihapus";
                   
         return redirect('jadwal_matakuliahh')->with(['informasi'=>$this->informasi]);
 }
}
