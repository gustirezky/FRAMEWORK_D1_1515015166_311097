<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliahh extends Model
{
    protected $table = 'jadwal_matakuliahh';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
    // protected $guarded- ['id'];
    
    public function Mahasiswaa()
    {
        return $this->belongsTo(Mahasiswaa::class);
    }
    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function Dosen_Matakuliah()
    {
        return $this->belongsTo(Dosen_Matakuliah::class);
    }

    public function getNamadsnAttribute(){
        return $this->dosen_matakuliah->dosen->nama;
    }
    public function getNipdsnAttribute(){
        return $this->dosen_matakuliah->dosen->nip;
    }
    public function getMKdsnAttribute(){
        return $this->dosen_matakuliah->matakuliah->title;
    }
    
    public function getNamamhsAttribute(){
        return $this->mahasiswaa->nama;
    }

    public function getNimAttribute(){
        return $this->mahasiswaa->nim;
    }
    public function getTitleruanganAttribute(){
        return $this->ruangan->title;
    }

    

    
    // public function listDosenMatakuliahDanMahasiswaDanRuangan()
    // {
    // 	$out = [];
    // 	foreach ($this->all() as $jdwlMtk) {
    // 		$out[$jdwlMtk->id] = "{$jdwlMtk->dosen_matakuliah->dosen->nama} {$jdwlMtk->dosen_matakuliah->dosen->nama} {$jdwlMtk->mahasiswa->nama} (Ruangan {$jdwlMtk->ruangan->title})";
    // 	}
    // 	return $out;
    // }
    
}
