<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

Route::get('post',[Postcontroller::class,'getposts']);
Route::get('post/{id}',[Postcontroller::class,'getpost']);
Route::post('post',[Postcontroller::class,'storepost']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
