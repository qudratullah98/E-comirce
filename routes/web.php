<?php

use App\Http\Controllers\userController;
use App\Http\Middleware\userAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});
Route::get('/home', function () {
    
});
route::get("dashbord",function(){
    return view("layouts.master");
});

Route::controller(userController::class)->group(function(){
    Route::get("login","index");
    Route::post("login","login");
});
