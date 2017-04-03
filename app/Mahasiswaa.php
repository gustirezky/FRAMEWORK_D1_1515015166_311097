<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswaa extends Model
{
    protected $table = 'mahasiswaa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function Pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    }

    public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }

    public function listMahasiswaaDanNim(){
    	$out = [];
    	foreach ($this->all() as $mhs) {
    		$out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
    	}
    	return $out;
    }
    public function Jadwal_Matakuliah()
    {
        return $this->hasMany(Jadwal_Matakuliah::class);
    }
    
}
