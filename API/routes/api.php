<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\UserController;

Route::get('post',[Postcontroller::class,'getposts']);
Route::get('post/{id}',[Postcontroller::class,'getpost']);
Route::post('post',[Postcontroller::class,'storepost']);
Route::get('users',[UserController::class,'get']);
Route::get('users/{id}',[UserController::class,'getuser']);
Route::post('users',[UserController::class,'storeuser']);
Route::post('test',[Postcontroller::class,'test']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
