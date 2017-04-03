@extends('master')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwal_matakuliahh') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Jadwal Mahasiswa </strong>
	</div>
	{!! Form::model($jadwal_matakuliahh,['url'=>'jadwal_matakuliahh/edit/'.$jadwal_matakuliahh->id,'class'=>'form-horizontal']) !!}
	@include('jadwal_matakuliahh.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop

<!-- $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nip = $input->nip;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->pengguna_id = $input->pengguna_id;
        $informasi = $mahasiswa->save() ? 'Berhasil update data': 'Gagal update data';
        return redirect ('mahasiswa') -> with (['informasi'=>$informasi]);
    } -->