<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function find(items $id){
        return view('product.find',compact("id"));
    }
    public function store(){
        if(session()->has("user")){
            $card=new card();
            $card->items_id= Request()->product_id;
            $card->user_id=session()->get("user")['id'];
            $card->save();
            return "succs";

        }else {
            return redirect("login");
        }
    }
}
