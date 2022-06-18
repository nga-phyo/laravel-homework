<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CagethoryRequest;
use App\Models\Cagethory;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;


class CagethoryController extends Controller
{
    public function index()
    {

        // $user = Auth::user();

        // if(Auth::check()){
        //     return 'Login';
        // }else {
        //     return 'No login';
        // }
       
        // if( Auth::check()){
        //     return 'Logged in';
        // }
        // else {
        //     return 'Not Loggin';
        // }
         $cagethory = Cagethory::all();
         return view('posts.index',compact('cagethory'));
    }



    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[


            'name'=> 'required',
            'email'=> 'required',
            'password'=>'required'

        ]);

        if($validator->fails()){
            return redirect('posts/create')
            ->withErrors($validator)
            ->withInput();
        }

        // $request->validate([

        //     'title' =>'required',
        //     'body' =>'required|min:5',
        // ],
        //[
        //     'title.required' => 'title write pr',
        //     'body.required' =>'reason write pr' ,
        //      'body.min'=> 'a ne sone 5 lone ma ya pr mal'
        // ]);




        $cagethory = new Cagethory;
        // $cagethory->title = request('title');
        // $cagethory->body = request('body');
        $cagethory->title = $request->title;
        $cagethory->body = $request->body;

        $cagethory->created_at = now();
        $cagethory->updated_at = now();

        $cagethory->save();

        return redirect('/cagethories');
    }

    public function update(CagethoryRequest $request, $id)
    {

        // $request->validate([
        //     'title'=>'required',
        //     'body'=>'required|min:7',
        // ],[
        //     'title.required'=>'title write pr own my friend',
        //     'body.required'=>'reason lay top write pr naw',
        //     'body.min'=>'a ne sone 7 lone pr',
        // ]);

       $cagethory = Cagethory::find($id);


    
        $cagethory->title = $request->title;
        $cagethory->body = $request->body;
       $cagethory->updated_at = now();

       $cagethory->save();

       return redirect('/cagethories');
    }

    public function destroy($id)
    {
        Cagethory::destroy($id);

        return redirect('/cagethories');
    }

    public function show($id)
    {
        $cagethory = Cagethory::find($id);
        
        return view('posts.show',compact('cagethory'));


    }

    public function create()
    {
        
        return view('posts.create');
    }

    public function edit($id)
    {
       $cagethory = Cagethory::find($id);

       return view('posts.edit',compact('cagethory'));
        
    }
}
