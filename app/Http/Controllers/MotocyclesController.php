<?php

namespace App\Http\Controllers;

use App\Models\Motocycle;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MotocyclesController extends Controller
{
    //
    public function index()
    {
       // $motocycles = Motocycle::all();
        //return view('motocycles.index',['motocycles'=>$motocycles]);
        $motocycles = DB::table('motocycles')
            ->join('brands','motocycles.brand_id','brands.id')
            ->orderBy('motocycles.id')
            ->select(
                'motocycles.id',
                'brands.brand',
                'brands.country',
                'motocycles.name as mname',
                'motocycles.kind',
                'motocycles.hp',
                'motocycles.nm',
                'motocycles.kg',

            )->get();

        $kinds = Motocycle::allkinds()->get();
        $data=[];
        foreach ($kinds as $kind)
        {
            $data["$kind->kind"]=$kind->kind;
        }
        return view('motocycles.index',['motocycles'=>$motocycles,'kinds'=>$data]);
    }

    public function create()
    {
        //$Motocycle = Motocycle::create(['brand_id'=>'5','name'=>'CBR1000','kind'=>'跑車','hp'=>'218','nm'=>'112','kg'=>'201','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        return view('motocycles.create'/*,$Motocycle->toArray()*/);
    }

    public function edit($id)
    {
        $Motocycle = Motocycle::findOrFail($id);
//        $Motocycle->update(['kg'=>'180']);
//        $Motocycle->save();
        $Motocycle->toArray();
        return view('motocycles.edit',['motocycle'=>$Motocycle]);
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
    public function store(Request $request)
    {
        $name =$request->input('name');
        $brand_id =$request->input('brand_id');
        $kind =$request->input('kind');
        $hp =$request->input('hp');
        $nm =$request->input('nm');
        $kg =$request->input('kg');

        motocycle::create([
            'name'=>$name,
            'brand_id'=>$brand_id,
            'kind'=>$kind,
            'hp'=>$hp,
            'nm'=>$nm,
            'kg'=>$kg,
            'created'=>Carbon::now()
        ]);
        return redirect('motocycles');
    }
    public function update($id , Request $request)
    {
        $motocycle =Motocycle::findOrFail($id);

        $motocycle->name = $request->input('name');
        $motocycle->brand_id = $request->input('brand_id');
        $motocycle->kind = $request->input('kind');
        $motocycle->hp = $request->input('hp');
        $motocycle->nm = $request->input('nm');
        $motocycle->kg = $request->input('kg');
        $motocycle->save();

        return redirect('motocycles');
    }
    public function destroy($id)
    {
        $motocycle = Motocycle::findOrFail($id);
        $motocycle->delete();
        return redirect('motocycles');
    }
    public function hypercar()
    {
        $motocycles = Motocycle::hypercar('跑車')->get();
        $kinds = Motocycle::allhypercar()->get();
        $data=[];
        foreach ($kinds as $kind)
        {
            $data["$kind->kind"]=$kind->kind;
        }
        return view('motocycles.index',['motocycles'=>$motocycles,'kinds'=>$data]);
    }

    public function kind(Request $request)
    {
        $motocycles = Motocycle::kind($request->input('ki'))->get();
        $kinds = Motocycle::allkinds()->get();
        $data=[];
        foreach ($kinds as $kind)
        {
            $data["$kind->kind"]=$kind->kind;
        }
        return view('motocycles.index',['motocycles'=>$motocycles,'kinds'=>$data]);
    }
}
