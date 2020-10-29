<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabelsController extends Controller
{
    //
    public function index()
    {
        return view('labels.index');
    }

    public function create()
    {
        return view('labels.create');
    }

    public function edit($id)
    {
        $data =[];
        if($id == 87)
        {
            $data["labels_first"] = "你才87";
            $data["labels_sec"]= "你全家都87";
            $data["labels_trd"] = "你最87";
        }
        else
        {
            $data["labels_first"] = "乾你屁事";
            $data["labels_sec"] = "乾我屁事";
            $data["labels_trd"] = "乾他屁事";
        }
        return view('labels.edit',$data);
    }

    public function show($id)
    {
        if($id == 87)
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
        }
        return view('labels.show')->with(["one" => $labels_first,"two" => $labels_sec,"three" => $labels_trd]);
    }
}
