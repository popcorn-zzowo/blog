@extends('app')
@section('title','修改車廠資料')
@section('moto_contents')
    @include('message.list')
{{--編號:{{$id}}</br>
車廠:{{$brand}}</br>
國家:{{$country}}</br>
有無參加過GP:{{$gp}}</br>
有無參加WSBK:{{$wsbk}}</br>--}}
車廠編號:{{$brand->id}}<br/>
{{--{!! Form::open(['url'=>'brands/update/'.$id,'method'=>'patch']) !!}--}}
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
{{--{!! Form::close() !!}--}}
{{--<div class="form-group">--}}
{{--    {!! Form::submit('編輯車廠資料',null,['class'=>'form-control']) !!}--}}
{{--</div>--}}
{{--{!! Form::close() !!}--}}
    {!! Form::model($brand,['method'=>'patch','action'=>['\App\Http\Controllers\BrandsController@update',$brand->id]]) !!}
    @include('brands.form',['submitbuttontext'=>"編輯車廠資料"])
    {!! Form::close() !!}
@endsection
