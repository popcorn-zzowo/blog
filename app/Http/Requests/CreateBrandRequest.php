<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
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
            'brand'=>'required|string|min:3|max:20',
            'country'=>'required|string|min:2|max:12',
            'gp'=>'required',
            'wsbk'=>'required',
        ];
    }
    public function messages()
    {
        return[
            "brand.required"=>"車廠名稱 為必填",
            "brand.min"=>"車廠名稱 須介於3~20個字元",
            "brand.max"=>"車廠名稱 須介於3~20個字元",
            "country.required"=>"國家 為必填",
            "country.min"=>"國家 須介於2~12個字元",
            "country.max"=>"國家 須介於2~12個字元",
            "gp.required"=>"GP賽是否有參加 為必填",
            "wsbk.required"=>"WSBK賽是否有參加 為必填"
        ];
    }
}
