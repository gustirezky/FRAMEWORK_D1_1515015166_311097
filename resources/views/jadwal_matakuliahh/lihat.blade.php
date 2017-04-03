@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jadwal_matakuliahh') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Jadwal Mahasiswa</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwal_matakuliahh->mahasiswa->nama }}</td>
		</tr>
		<tr>
			<td>NIM Mahasiswa</td>
			<td>:</td>
			<td>{{ $jadwal_matakuliahh->mahasiswa->nim }}</td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td>{{ $jadwal_matakuliahh->dosen_matakuliah->nip }}</td>
		</tr>
		<tr>
			<td>NIP Dosen</td>
			<td>:</td>
			<td>{{ $jadwal_matakuliahh->dosen_matakuliah->dosen->nip }}</td>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td>:</td>
			<td>{{ $jadwal_matakuliahh->dosen_matakuliah->matakuliah->title }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jadwal_matakuliahh->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jadwal_matakuliahh->updated_at}}</td>
		</tr>
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