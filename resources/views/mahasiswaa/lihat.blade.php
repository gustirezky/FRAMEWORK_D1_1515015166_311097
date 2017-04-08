@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">

 <strong><a href="{{ url('mahasiswaa') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data mahasiswaa
 </strong>
 </div>
 <table class="table">
 	<tr>
 		<td>nama</td>
 		<td>:</td>
 		<td>{{$mahasiswaa->nama}}</td>
 	</tr>
 		<tr>
 		<td>nim</td>
 		<td>:</td>
 		<td>{{$mahasiswaa->nim}}</td>
 	</tr>
 	<tr>
 		<td>alamat</td>
 		<td>:</td>
 		<td>{{$mahasiswaa->alamat}}</td>
 	</tr>
 	<tr>
 		<td>Username</td>
 		<td>:</td>
 		<td>{{$mahasiswaa->pengguna->username}}</td>
 	</tr>
 	<tr>
 	 	<td>Password</td>
 		<td>:</td>
 		<td>{{$mahasiswaa->pengguna->password}}</td>
 	</tr>
 	<tr>
 
 		<tr>
 		<td class="col-xs-4">Dibuat tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{$mahasiswaa->created_at}}</td>
 	</tr>
 	</tr>
 		<tr>
 		<td class="col-xs-4">Diperbaharui tanggal</td>
 		<td class="col-xs-1">:</td>
 		<td>{{$mahasiswaa->updated_at}}</td>
 	</tr>

 </table>
 </div>
@stop