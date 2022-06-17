<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CagethoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' =>'required|min:5',
            'body' =>'required|min:10',
        ];
    }


    public function messages()
    {
       return[
        'title.required'=> 'title write pr',
        'body.required'=> 'body write pr',
       
        'title.min'=>'a ne sone 5 lone write pr',
        'body.min'=>'a ne sone 10 lone write pr',
       ];
    }

}
