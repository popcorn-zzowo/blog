<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Motocycle;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MotocyclesController extends Controller
{
    //
    public function index()
    {

//        $motocycles = DB::table('motocycles')
//            ->join('brands','motocycles.brand_id','brands.id')
//            ->orderBy('motocycles.id')
//            ->select(
//                'motocycles.id',
//                'brands.brand',
//                'brands.country',
//                'motocycles.name as mname',
//                'motocycles.kind',
//                'motocycles.hp',
//                'motocycles.nm',
//                'motocycles.kg',
//                'motocycles.out',
//                'motocycles.maketime'
//
//            )->get();
        $motocycles=Motocycle::all();
        $kinds = Motocycle::allkinds()->get();
        $data=[];
        foreach ($kinds as $kind)
        {
            $data["$kind->kind"]=$kind->kind;
        }
        return view('motocycles.index',['motocycles'=>$motocycles,'kinds'=>$data]);
    }
    public function api_brands()
    {
        return Brand::all();
    }
    public function api_updata(Request $request)
    {
        $brand = Brand::find($request->input('id'));
        if($brand == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $brand->name = $request->input('name');
        $brand->country = $request->input('country');
        $brand->wsbk = $request->input('wabk');
        $brand->gp = $request->input('gp');
        if($brand->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        }else {
            return response()->json([
                'status' => 0,
            ]);
        }

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
    public function store(\App\Http\Requests\CreateMotocycleRequest $request)
    {
        $name =$request->input('name');
        $brand_id =$request->input('brand_id');
        $kind =$request->input('kind');
        $hp =$request->input('hp');
        $nm =$request->input('nm');
        $kg =$request->input('kg');
        $out=$request->input('out');
        $maketime=$request->input('maketime');
        motocycle::create([
            'name'=>$name,
            'brand_id'=>$brand_id,
            'kind'=>$kind,
            'hp'=>$hp,
            'nm'=>$nm,
            'kg'=>$kg,
            'out'=>$out,
            'maketime'=>$maketime,
            'created'=>Carbon::now()
        ]);
        return redirect('motocycles');
    }
    public function update($id , \App\Http\Requests\CreateMotocycleRequest $request)
    {
        $motocycle =Motocycle::findOrFail($id);

        $motocycle->name = $request->input('name');
        $motocycle->brand_id = $request->input('brand_id');
        $motocycle->kind = $request->input('kind');
        $motocycle->hp = $request->input('hp');
        $motocycle->nm = $request->input('nm');
        $motocycle->kg = $request->input('kg');
        $motocycle->out = $request->input('out');
        $motocycle->maketime = $request->input('maketime');
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

    public function api_motocycles()
    {
        return Motocycle::all();
    }

    public function api_update(Request $request)
    {
        $motocycle = Motocycle::find($request->input('id'));
        if ($motocycle == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $motocycle->name = $request->input('name');
        $motocycle->brand_id = $request->input('brand_id');
        $motocycle->kind = $request->input('kind');
        $motocycle->hp = $request->input('hp');
        $motocycle->nm = $request->input('nm');
        $motocycle->kg = $request->input('kg');
        $motocycle->out = $request->input('out');
        $motocycle->maketime = $request->input('maketime');


        if ($motocycle->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }
    public function api_delete(Request $request)
    {
        $motocycle = Motocycle::find($request->input('id'));

        if ($motocycle == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($motocycle->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
