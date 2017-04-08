
@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data jadwal_matakuliahh</strong>
<a href="{{url('jadwal_matakuliahh/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>jadwal_matakuliahh</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Nama Mahasiswa</th>
             <th>NIM Mahasiswa</th>
             <th>Nama Matakuliahh</th>
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaJadwalMatakuliah as $jadwal_matakuliahh)
         <tr>
             <td>{{$x++}}</td>
              <td>{{$jadwal_matakuliahh->mahasiswaa->nama or 'nama kosong'}}</td>
               <td>{{$jadwal_matakuliahh->mahasiswaa->nim or 'nim kosong'}}</td>
                <td>{{$jadwal_matakuliahh->dosen_matakuliah->matakuliah->title or 'matakuliahh kosong'}}</td>
                       <td>
               <div class="btn-group" role="group">
               <a href="{{url('jadwal_matakuliahh/edit/'.$jadwal_matakuliahh->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('jadwal_matakuliahh/lihat/'.$jadwal_matakuliahh->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('jadwal_matakuliahh/hapus/'.$jadwal_matakuliahh->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                   <i class="fa fa-remove"></i>
               </a>
               </div>
               </td>

         </tr>
         @endforeach
     </tbody>
 </table>
 </div>
 @stop