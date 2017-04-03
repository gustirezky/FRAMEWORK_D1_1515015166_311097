@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
		<a href="{{url('jadwal_matakuliahh/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Jadwal Mahasiswa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswa</th>
				<th>NIM Mahasiswa</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuajadwal_matakuliahh as $jadwal_matakuliahh)
			<tr>
				<td>{{ $x++}}</td>
				
				<td>{{ $jadwal_matakuliahh->mahasiswa->nama or 'Nama Kosong' }}</td>
				<td>{{ $jadwal_matakuliahh->mahasiswa->nim or 'NIM Kosong' }}</td>
				<td>{{ $jadwal_matakuliahh->dosen_matakuliah->matakuliah->title or 'Matakuliah Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('jadwal_matakuliahh/edit/'.$jadwal_matakuliahh->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('jadwal_matakuliahh/lihat/'.$jadwal_matakuliahh->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('jadwal_matakuliahh/hapus/'.$jadwal_matakuliahh->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
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