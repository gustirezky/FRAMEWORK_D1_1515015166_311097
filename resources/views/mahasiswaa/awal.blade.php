@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Mahasiswaa</strong>
		<a href="{{url('mahasiswaa/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Mahasiswaa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswaa</th>
				<th>NIM</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaMahasiswaa as $mahasiswaa)
			<tr>
				<td>{{ $x++}}</td>
				
				<td>{{ $mahasiswaa->nama or 'Nama Kosong' }}</td>
				<td>{{ $mahasiswaa->nim or 'NIM Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('mahasiswaa/edit/'.$mahasiswaa->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('mahasiswaa/lihat/'.$mahasiswaa->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('mahasiswaa/hapus/'.$mahasiswaa->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
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