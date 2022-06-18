<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;




class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {

       $user =  new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = bcrypt($request->name);

     $user->save();

       return redirect('login');

    }



}
