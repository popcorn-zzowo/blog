@extends('app')
@section('title','修改車種資料')
@section('moto_contents')
編號:{{$id}}</br>
車型:{{$name}}</br>
車廠:{{$brand_id}}</br>
車種:{{$kind}}</br>
馬力:{{$hp}}</br>
扭力:{{$nm}}</br>
重量:{{$kg}}</br>
@endsection

