<?php

use Illuminate\Support\Facades\Route;


use \App\Http\Controllers\CagethoryController;

// Route::get('ome',function(){
//     $name = 'ko ko';
//     return view('home',compact('name'));
// });



// Route::get('/',['\App\Http\Controllers\PostController','show']);



Route::get('cagethory',[CagethoryController::class, 'index']);
Route::post('cagethory/store',[CagethoryController::class, 'store']);
Route::get('cagethory/show/{id}',[CagethoryController::class, 'show']);
Route::get('cagethory/update/{id}',[CagethoryController::class, 'update']);
Route::get('cagethory/destroy/{id}',[CagethoryController::class, 'destroy']);
Route::get('cagethory/create',[CagethoryController::class, 'create']);
Route::get('cagethory/edit/{id}',[CagethoryController::class, 'edit']);


 
 