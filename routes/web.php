<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\userController;
use App\Http\Middleware\userAuth;
use App\Models\items;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    $item=items::all();
    return view('product.index',compact("item"));
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

Route::controller(ItemController::class)->group(function(){
    Route::get("product/{id}","find");
});
