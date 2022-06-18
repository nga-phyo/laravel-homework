<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|min:5',
            'email' =>'required|min:10',
            'password' =>'required|min:5',
        ];
    }

    public function message()
    {
        return[
        'name.requird'=>'name write pr',
        'email.required'=> 'email write pr',
        'password.required'=>'password write pr',
       
            
        'name.min'=>'a ne sone 5 lone write pr',
        'email.min'=>'a ne sone 15 lone write pr',
        'password.min'=>'a ne sone 6 lone write pr',
        ];
    }
}
