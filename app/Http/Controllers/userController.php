<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        return view("layouts.login");
    }
    public function login(){
        $email= request("email");
         $user=User::where("email",$email)->first();
         if(!$user || !Hash::check(request("password"),$user->password)){
            return "error";
         }else{
            \request()->session()->put("user" ,$user);
            return redirect("/");

         }
    }
    public function logout(){
        session()->remove('user');
        return redirect("/");
    }
}
