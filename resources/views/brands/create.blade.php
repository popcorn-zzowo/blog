@extends('app')
@section('title','新增車廠資料')
@section('moto_contents')
    {{--編號:{{$id}}</br>
車廠名稱:{{$brand}}</br>
國家:{{$country}}</br>
有無參加過GP:{{$gp}}</br>
有無參加WSBK:{{$wsbk}}</br>--}}
{!! Form::open(['url'=>'brands/store']) !!}
{{--<div class="form-group">--}}
{{--    {!! Form::label('brand','車廠名稱') !!}--}}
{{--    {!! Form::text('brand',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('country','國家') !!}--}}
{{--    {!! Form::text('country',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('gp','是否參加過GP') !!}--}}
{{--    {!! Form::text('gp',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('wsbk','是否參加過WSBK') !!}--}}
{{--    {!! Form::text('wsbk',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--    {!! Form::submit('新增車廠',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}
{{--    {!! Form::close() !!}--}}
    @include('brands.form',['submitbuttontext'=>"新增車廠資料"])
    {!! Form::close() !!}
@endsection
