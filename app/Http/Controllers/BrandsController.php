<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    //
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index',['brands'=>$brands]);
    }

    public function create()
    {
        //$Brand = Brand::create(['brand'=>'honda','country'=>'japan','gp'=>true,'wsbk'=>true,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        return view('brands.create'/*,$Brand->toArray()*/);
    }

    public function edit($id)
    {
        $Brand = Brand::findOrFail($id);
        $Brand->update(['country'=>'japan']);
        $Brand->save();
        $Brand->toArray();
        return view('brands.edit',$Brand);
    }

    public function show($id)
    {
        $Brand = Brand::find($id)->toArray();
        //$Brand = Brand::WHERE('country','japan')->get()->toArray();
      /*  if($id == 87)
        {
            $labels_first = "你才87";
            $labels_sec = "你全家都87";
            $labels_trd = "你最87";
        }
        else
        {
            $labels_first = "乾你屁事";
            $labels_sec = "乾我屁事";
            $labels_trd = "乾他屁事";
        }*/
        return view('brands.show',$Brand);#->with(["one" => $labels_first,"two" => $labels_sec,"three" => $labels_trd]);
    }
    public function store()
    {

    }
}
