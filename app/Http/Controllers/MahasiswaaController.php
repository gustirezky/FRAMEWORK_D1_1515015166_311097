<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswaa;

use App\Pengguna;

class MahasiswaaController extends Controller
{  protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {   
        $semuaMahasiswaa=mahasiswaa::all();
        return view('mahasiswaa.awal', compact('semuaMahasiswaa'));
    }
    public function tambah()
    {
        return view('mahasiswaa.tambah');
    }
    public function simpan(Request $input)
    {   
        $pengguna = new Pengguna($input->only('username','password'));
        if ($pengguna->save()){
        $mahasiswaa = new mahasiswaa;
        $mahasiswaa -> nama = $input->nama;
        $mahasiswaa -> nim = $input->nim;
        $mahasiswaa -> alamat = $input->alamat;
        // $mahasiswaa -> pengguna_id = $input->pengguna_id;
        if ($pengguna->mahasiswaa()->save($mahasiswaa))
            $this->informasi='Berhasil simpan data';
            }
        
     // $informasi = $mahasiswaa ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('mahasiswaa')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id){
        $mahasiswaa = mahasiswaa::find($id);
        return view('mahasiswaa.edit')->with(array('mahasiswaa'=>$mahasiswaa));
          }
    
    public function lihat($id)
    {
        $mahasiswaa = mahasiswaa::find($id);
         return view('mahasiswaa.lihat')->with(array('mahasiswaa'=>$mahasiswaa));      
}
    public  function update($id, Request $input){
        $mahasiswaa = mahasiswaa::find($id);
        $mahasiswaa -> nama = $input->nama;
        $mahasiswaa -> nim = $input->nim;
        $mahasiswaa -> alamat = $input->alamat;
        $mahasiswaa->save();
           if (!is_null($input->username)){
            $pengguna=$mahasiswaa->pengguna->fill($input->only('username'));
           if (!empty($input->password)) $pengguna->password=$input->password;
        if ($pengguna->save()) $this->informasi='Berhasil simpan data';
    }else {
            $this->informasi='Gagal simpan data';
        }
     // $informasi = $mahasiswaa ->save()?'Berhasil update data': 'Gagal update data';
        return redirect('mahasiswaa')->with(['informasi'=>$this->informasi]);
}
  public function hapus($id){
        $mahasiswaa = mahasiswaa::find($id);
        if ($mahasiswaa->pengguna()->delete()){
            if ($mahasiswaa->delete())$this->informasi='Berhasil hapus data';
        }
       
     // $informasi = $mahasiswaa ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('mahasiswaa')->with(['informasi'=>$this->informasi]);
}
}