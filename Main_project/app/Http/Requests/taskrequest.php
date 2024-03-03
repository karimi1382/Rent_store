<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class taskrequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'user_id'=>'required',
            'project_id'=>'required',
            'packege_id'=>'required',
            'fild_id'=>'required',
            'name'=>'required',
            'color_1'=>'required',
            'color_2'=>'required',
            'color_3'=>'required',
            'url'=>'',
            'admin'=>'',
            'takephoto'=>'',
        ];
    }
}
