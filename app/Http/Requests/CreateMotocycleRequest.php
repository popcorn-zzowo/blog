<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMotocycleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|min:2|max:15',
            'brand_id'=>'required|numeric|min:1|max:20',
            'kind'=>'required|string|min:2|max:5',
            'hp'=>'required|numeric|min:15|max:300',
            'nm'=>'required|numeric|min:15|max:200',
            'kg'=>'required|numeric|min:60|max:550'
        ];
    }
    public function messages()
    {
        return [
            "name.required"=>"車型名稱 為必填",
            "name.min"=>"車型名稱 需介於2~15個字元",
            "name.max"=>"車型名稱 需介於2~15個字元",
            "brand_id.required"=>"車廠編號 為必填",
            "brand_id.min"=>"車廠編號 範圍須介於1~20之間",
            "brand_id.max"=>"車廠編號 範圍須介於1~20之間",
            "kind.required"=>"車種 為必填",
            "kind.min"=>"車種 須介於2~5個字元",
            "kind.max"=>"車種 須介於2~5個字元",
            "hp.required"=>"馬力 為必填",
            "hp.min"=>"馬力 範圍須介於15~300之間",
            "hp.max"=>"馬力 範圍須介於15~300之間",
            "nm.required"=>"扭力 為必填",
            "nm.min"=>"扭力 範圍須介於15~200之間",
            "nm.max"=>"扭力 範圍須介於15~200之間",
            "kg.required"=>"重量 為必填",
            "kg.min"=>"重量 範圍須介於60~550之間",
            "kg.max"=>"重量 範圍須介於60~550之間"
        ];
    }
}
