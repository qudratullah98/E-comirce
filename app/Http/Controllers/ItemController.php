<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function find(items $id){
        return view('product.find',compact("id"));
    }
}
