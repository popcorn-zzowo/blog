<?php

namespace App\Http\Controllers;

use App\Models\Motocycle;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MotocyclesController extends Controller
{
    //
    public function index()
    {
        $motocycles = Motocycle::all();
        return view('motocycles.index',['motocycles'=>$motocycles]);
    }

    public function create()
    {
        $Motocycle = Motocycle::create(['brand_id'=>'5','name'=>'CBR1000','kind'=>'跑車','hp'=>'218','nm'=>'112','kg'=>'201','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        return view('motocycles.create',$Motocycle->toArray());
    }

    public function edit($id)
    {
        $Motocycle = Motocycle::findOrFail($id);
        $Motocycle->update(['kg'=>'180']);
        $Motocycle->save();
        $Motocycle->toArray();
        return view('motocycles.edit',$Motocycle);
    }

    public function show($id)
    {
        $Motocycle = Motocycle::findOrFail($id)->toArray();
        /*if($id == 87)
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
        $data = compact(['models_first','models_sec','models_trd']);*/
        return view('motocycles.show',$Motocycle);
    }
}
