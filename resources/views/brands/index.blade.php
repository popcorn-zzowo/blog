@extends('app')
@section('title','所有車廠資料')
@section('moto_contents')
<a href="{{ route('brands.create')}}" class="m1-1 underline">新增車廠資料</a>
<table>
    <tr>
    <th>編號</th>
    <th>車廠</th>
    <th>國家</th>
    <th>有無參加GP</th>
    <th>有無參加WSBK</th>
    <th>建立時間</th>
    <th>編輯時間</th>
    <th>操作一</th>
    <th>操作二</th>
    </tr>
    @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->brand}}</td>
            <td>{{$brand->country}}</td>


            @if($brand->gp == true)
                <td>有</td>
            @else
                <td>無</td>
            @endif
            @if($brand->wsbk == true)
                <td>有</td>
            @else
                <td>無</td>
            @endif
            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
            <td><a href="{{ route('brands.show',['id'=>$brand->id])}}">顯示</a></td>
            <td><a href="{{ route('brands.edit',['id'=>$brand->id])}}">修改</a></td>
            <td>
                <form action="{{url('/brands/delete',['id'=>$brand->id]) }}"method="post">
                    <input class="btn btn-default" type="submit" value="刪除"/>
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
