@extends('app')
@section('title','新增車種資料')
@section('moto_contents')
{{--編號:{{$id}}</br>
車型名稱:{{$name}}</br>
車廠編號:{{$brand_id}}</br>
車種:{{$kind}}</br>
馬力:{{$hp}}</br>
扭力:{{$nm}}</br>
重量:{{$kg}}</br>--}}0

{!! ! Form::open(['url'=>'motocycles/store']) !!}
<div class="form-group">
    {!! Form::label('name','車型名稱') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('brand_id','車廠編號') !!}
    {!! Form::text('brand_id',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kind','車種') !!}
    {!! Form::text('kind',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('hp','馬力') !!}
    {!! Form::text('hp',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nm','扭力') !!}
    {!! Form::text('nm',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kg','重量') !!}
    {!! Form::text('kg',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('新增重機資料',null,['class'=>'form-control']) !!}
</div>
{!! Form::close() !!}
@endsection

