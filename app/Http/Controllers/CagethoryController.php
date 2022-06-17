<?php

namespace App\Http\Controllers;

use App\Models\Cagethory;

use Illuminate\Http\Request;

class CagethoryController extends Controller
{
   public function index()
   {
       $cagethory = Cagethory::all();
       return view('posts.index',compact('cagethory'));
   }



   public function store()
   {
       $cagethory = new Cagethory();

       $cagethory->title = request('title');
       $cagethory->body = request('body');
    //    $cagethory->title = 'first title';
    //    $cagethory->body = 'second title';
       $cagethory->created_at = now();
       $cagethory->updated_at = now();

       $cagethory->save();

       return redirect('cagethory');
       
   }


   public function show($id)
   {
       $cagethory = Cagethory::find($id);

       return view('posts.home',compact('cagethory'));
   }


   public function update($id)
   {
       $cagethory = Cagethory::find($id);
       $cagethory->title = 'second title change';
       $cagethory->body = 'second body change';
       $cagethory->updated_at = now();

       $cagethory->save();

       return  redirect('cagethory');
   }


   public function destroy($id)
   {
       Cagethory::destroy($id);

       return redirect('/cagethory');
   }

   public function create()
   {
       return view('posts.create');
   }


   public function edit($id)
   {
        $cagethory = Cagethory::find($id);

        return view('posts.edit');
   }
}
