<?php

use App\Http\Controllers\CagethoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/cagethory',[PostController::class,'index']);
// Route::post('/cagethory/store',[PostController::class,'store']);
// Route::put('/cagethory/{id}',[PostController::class,'update']);
// Route::delete('/cagethory/{id}',[PostController::class,'destroy']);

// Route::get('/cagethory/show/{id}',[PostController::class,'show']);
// Route::get('/cagethory/create',[PostController::class,'create']);
// Route::get('/cagethory/edit/{id}',[PostController::class,'edit']);


// Route::get('/cagethory',[CagethoryController::class],'index');
Route::resource('cagethories',CagethoryController::class);


// Route::get('register', [LoginController::class, 'create']);
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('login',[LoginController::class, 'create']);
Route::post('login',[LoginController::class, 'store']);

Route::get('logout',[LoginController::class, 'destory']);