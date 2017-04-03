@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('mahasiswaa') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Mahasiswaa</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Mahasiswaa</td>
			<td>:</td>
			<td>{{ $mahasiswaa->nama }}</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $mahasiswaa->nim }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $mahasiswaa->alamat }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $mahasiswaa->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $mahasiswaa->pengguna->password }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$mahasiswaa->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$mahasiswaa->updated_at}}</td>
		</tr>
	</table>
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