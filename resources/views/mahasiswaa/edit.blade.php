@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('mahasiswaa') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Mahasiswaa</strong>
	</div>
	{!! Form::model($mahasiswaa,['url'=>'mahasiswaa/edit/'.$mahasiswaa->id,'class'=>'form-horizontal']) !!}
	@include('mahasiswaa.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop

<!-- $mahasiswaa = Mahasiswaa::find($id);
        $mahasiswaa->nama = $input->nama;
        $mahasiswaa->nip = $input->nip;
        $mahasiswaa->alamat = $input->alamat;
        $mahasiswaa->pengguna_id = $input->pengguna_id;
        $informasi = $mahasiswaa->save() ? 'Berhasil update data': 'Gagal update data';
        return redirect ('mahasiswaa') -> with (['informasi'=>$informasi]);
    } -->