<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {


        $user = User::where('email',$request->email)->first();
        if(! $user)
        {
            redirect('login');
        }

        $gg = [
            'email'=>$user->email,
            'password'=>$request->password,
        ];

        if(! Auth::attempt($gg)){
            redirect ('login');
        }

        return redirect('cagethories');
    }

    public function destory()
    {
        Auth::logout();

        return redirect('login');
    }
}
