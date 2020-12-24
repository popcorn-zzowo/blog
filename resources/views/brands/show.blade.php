@extends('app')
@section('title','特定車廠資料')
@section('moto_contents')
編號:{{$brand->id}}</br>
車廠:{{$brand->brand}}</br>
國家:{{$brand->country}}</br>
有無參加過GP:{{$brand->gp}}</br>
有無參加WSBK:{{$brand->wsbk}}</br>

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-1">
    {{$brand->name}}所有車子
</div>
    <table>
        <tr>
            <th>車子編號</th>
            <th>車子名稱</th>
            <th>車子種類</th>
            <th>馬力</th>
            <th>扭力</th>
            <th>重量</th>
            <th>製造日期</th>
            <th>出廠日期</th>
        </tr>
        @foreach($motocycles as $motocycle)
            <tr>
                <td>{{$motocycle->id}}</td>
                <td>{{$motocycle->name}}</td>
                <td>{{$motocycle->kind}}</td>
                <td>{{$motocycle->hp}}</td>
                <td>{{$motocycle->nm}}</td>
                <td>{{$motocycle->kg}}</td>
                <td>{{$motocycle->maketime}}</td>
                <td>{{$motocycle->out}}</td>
            </tr>
            @endforeach
    </table>
@endsection
