<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create',function(){
    return view('create');
});
Route::get("/login",function(){
    return view('login');
});
Route::get('/crud',function(){
    return view('crud');
});
Route::get("create",[CrudController::class,'index']);
Route::get("add",[CrudController::class,'create']);
Route::get("show",[CrudController::class,'show']);
Route::get("delete/{id}",[CrudController::class,'delete']);
Route::get("edit/{id}",[CrudController::class,'edit']);
Route::get("edit",[CrudController::class,'update']);
Route::get("read/{id}",[CrudController::class,'read']);
