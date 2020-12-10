@extends('app')
@section('title','所有車種資料')
@section('moto_contents')

<table>
    <tr>
        <th>編號</th>
        <th>車廠</th>
        <th>國家</th>
        <th>車型</th>
        <th>車種</th>
        <th>馬力</th>
        <th>扭力</th>
        <th>重量</th>
{{--        <th>建立時間</th>--}}
{{--        <th>編輯時間</th>--}}
        <th>操作一</th>
        <th>操作二</th>
    </tr>
    @foreach($motocycles as $motocycle)
        <tr>
            <td>{{$motocycle->id}}</td>
{{--            <td>{{$motocycle->brand_id}}</td>--}}
            <td>{{$motocycle->brand}}</td>
            <td>{{$motocycle->country}}</td>
            <td>{{$motocycle->mname}}</td>
            <td>{{$motocycle->kind}}</td>
            <td>{{$motocycle->hp}}</td>
            <td>{{$motocycle->nm}}</td>
            <td>{{$motocycle->kg}}</td>
{{--            <td>{{$motocycle->created_at}}</td>--}}
{{--            <td>{{$motocycle->updated_at}}</td>--}}
            <td><a href="{{ route('motocycles.show',['id'=>$motocycle->id])}}">顯示</a></td>
            <td><a href="{{ route('motocycles.edit',['id'=>$motocycle->id])}}">修改</a></td>
            <td>
                <form action="{{url('/motocycles/delete',['id'=>$motocycle->id]) }}"method="post">
                    <input class="btn btn-default" type="submit" value="刪除"/>
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach()
    <a href="{{ route('motocycles.create')}}" class="m1-1 underline">新增車種資料</a>
    <a href="{{ route('motocycles.hypercar')}}" class="m1-1 underline">查詢所有跑車</a>
    <form action="{{ url('/motocycles/kind') }}" method="post">
        {!! Form::label('ki','選取車種:') !!}
        {!! Form::select('ki',$kinds,['class'=>'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢"/>
        @csrf
    </form>
</table>
@endsection
