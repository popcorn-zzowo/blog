<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotocyclesController extends Controller
{
    //
    public function index()
    {
        return view('motocycles.index');
    }

    public function create()
    {
        return view('motocycles.create');
    }

    public function edit($id)
    {
        return view('motocycles.edit');
    }

    public function show($id)
    {
        if($id == 87)
        {
            $models_first = "你才87";
            $models_sec= "你全家都87";
            $models_trd = "你最87";
        }
        else
        {
            $models_first = "乾你屁事";
            $models_sec = "乾我屁事";
            $models_trd = "乾他屁事";
        }
        $data = compact(['models_first','models_sec','models_trd']);
        return view('motocycles.show',$data);
    }
}
