
@extends('master')
@section('container')
<div class="panel panel-info">
<div class="panel-heading">

 <strong><a href="{{url('mahasiswaa')}}">
   <i class="fa text-default fa-chevron-left"></i>
 </a>Perbaharui data mahasiswaa</strong>
 </div>
 {!! Form::model($mahasiswaa,['url'=>'mahasiswaa/edit/'.$mahasiswaa->id,'class'=>'form-horizontal']) !!}
@include('mahasiswaa.Form')
<div style="width:100%;text-align:right;">
<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}

</div>
@stop