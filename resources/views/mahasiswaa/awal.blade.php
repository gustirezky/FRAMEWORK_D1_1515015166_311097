
@extends('master')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
<strong>Seluruh Data mahasiswaa</strong>
<a href="{{url('mahasiswaa/tambah')}}" class="btn btn-xs btn-primary pull-right">
 <i class="fa fa-plus"></i>mahasiswaa</a>
 <div class="clearfix"></div>
 </div>
 <table class="table">
     <thead>
         <tr>
             <th>No.</th>
             <th>Nama</th>
             <th>Nim</th>
             {{-- <th>Alamat</th> --}}
            {{--  <th>Pengguna_id</th> --}}
             <th>Aksi</th>
         </tr>
     </thead>
     <tbody>
         <?php $x=1;?>
         @foreach ($semuaMahasiswaa as $mahasiswaa)
         <tr>
             <td>{{$x++}}</td>
              <td>{{$mahasiswaa->nama or 'nama kosong'}}</td>
               <td>{{$mahasiswaa->nim or 'NIM kosong'}}</td>
                {{-- <td>{{$mahasiswaa->alamat or 'Alamat kosong'}}</td> --}}
{{--                <td>{{$mahasiswaa->pengguna_id or 'Pengguna_id kosong'}}</td> --}}
               <td>
               <div class="btn-group" role="group">
               <a href="{{url('mahasiswaa/edit/'.$mahasiswaa->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
                   <i class="fa fa-pencil"></i>
               </a>
                 <a href="{{url('mahasiswaa/lihat/'.$mahasiswaa->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
                   <i class="fa fa-eye"></i>
               </a>
                 <a href="{{url('mahasiswaa/hapus/'.$mahasiswaa->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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