<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswaa;
use App\Pengguna;

class MahasiswaaController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
 {
        // return view('mahasiswaa.awal', ['data'=>Mahasiswaa::all()]);
    $semuaMahasiswaa = Mahasiswaa::all();
    return view('mahasiswaa.awal', compact('semuaMahasiswaa'));
    }
    public function tambah()
    {
        return view('mahasiswaa.tambah');
    }   
    public function simpan(Request $input)
    {
         $pengguna = new Pengguna($input->only('username','password'));
            if ($pengguna->save()) {
                $mahasiswaa = new Mahasiswaa;
                $mahasiswaa->nama = $input->nama;
                $mahasiswaa->nim = $input->nim;
                $mahasiswaa->alamat = $input->alamat;
                if($pengguna->mahasiswaa()->save($mahasiswaa)) $this->informasi='Berhasil simpan data';
            }        
        return redirect ('mahasiswaa')->with(['informasi'=>$this->informasi]);        
    }
    public function edit($id)
    {
        $mahasiswaa = Mahasiswaa::find($id);
        return view('mahasiswaa.edit')->with(array('mahasiswaa'=>$mahasiswaa));
    }
    public function lihat($id)
    {
        $mahasiswaa = Mahasiswaa::find($id);
        return view('mahasiswaa.lihat')->with(array('mahasiswaa'=>$mahasiswaa));
    }
    public function update($id, Request $input)
    {
       $mahasiswaa = Mahasiswaa::find($id);
        $mahasiswaa->nama = $input->nama;
        $mahasiswaa->nim = $input->nim;
        $mahasiswaa->alamat = $input->alamat;
        $mahasiswaa->pengguna_id = $input->pengguna_id;
        if(!is_null($input->username)){
            $pengguna = $mahasiswaa->pengguna->fill($input->only('username'));
                if(!empty($input->password)) $pengguna->password = $input->password;
                if($pengguna->save()) $this->informasi = 'Berhasil simpan data';
        }
        else{
            $this->informasi = 'Berhasil simpan data';
        }
        return redirect ('mahasiswaa') -> with (['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $mahasiswaa = Mahasiswaa::find($id);
        if($mahasiswaa->pengguna()->delete()){
            if($mahasiswaa->delete()) $this->informasi = 'Berhasil hapus data';
        }
        
        return redirect('mahasiswaa')-> with(['informasi'=>$this->informasi]);
}
}
