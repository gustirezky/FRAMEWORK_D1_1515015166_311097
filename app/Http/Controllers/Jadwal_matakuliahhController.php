<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliahh;
use App\Mahasiswaa;
use App\dosen_matakuliah;
use App\Ruangan;

class jadwal_matakuliahhController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuajadwal_matakuliahh = jadwal_matakuliahh::all();//
        return view('jadwal_matakuliahh.awal', compact('semuajadwal_matakuliahh'));
        // return "Hello dari jadwal_matakuliahhController";
    }

    public function tambah()
    {
        $mahasiswaa = new Mahasiswaa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwal_matakuliahh.tambah',compact('mahasiswa','ruangan','dosen_matakuliah'));
        // return $this->simpan();
    }

    public function simpan(Request $input)
    {
        $jadwal_matakuliahh = new jadwal_matakuliahh($input->only('ruangan_id','dosen_matakuliah_id','   mahasiswa_id'));
            if($jadwal_matakuliahh->save()) $this->informasi = "Jadwal Mahasiswa berhasil disimpan";
            return redirect('jadwal_matakuliahh')->with(['informasi'=>$this->informasi]);

        // $jadwal_matakuliahh->mahasiswa_id = 1;
        // $jadwal_matakuliahh-> uangan_id = 1;

        // $jadwal_matakuliahh->dosen_matakuliah_id = 1;
        // $jadwal_matakuliahh->save();
        // return "Data dengan Id Mahasiswa : {$jadwal_matakuliahh->mahasiswa_id} Telah Disimpan";
    }
    public function lihat($id){
        $jadwal_matakuliahh = jadwal_matakuliahh::find($id);
        return view('jadwal_matakuliahh.lihat',compact('jadwal_matakuliahh'));
    }
    public function edit($id){
        $jadwal_matakuliahh = jadwal_matakuliahh::find($id);
        $mahasiswaa = new Mahasiswaa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwal_matakuliahh.edit',compact('mahasiswaa','ruangan','dosen_matakuliah','jadwal_matakuliahh'));
    }
    public function update($id,Request $input)
    {
        $jadwal_matakuliahh = jadwal_matakuliahh::find($id);
        $jadwal_matakuliahh->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwal_matakuliahh->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('jadwal_matakuliahh')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id,Request $input)
    {
        $jadwal_matakuliahh = jadwal_matakuliahh::find($id);
        if($jadwal_matakuliahh->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        // $informasi = $mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('jadwal_matakuliahh')-> with(['informasi'=>$this->informasi]);
    }
}
