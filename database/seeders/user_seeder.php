<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            "name"=>"qudratullah",
            "email"=>"qsharafat@gmail.com",
            "password"=>Hash::make("password"),
  
          ]); user::create([
            "name"=>"hamidullah",
            "email"=>"hamidsharafat@gmail.com",
            "password"=>Hash::make("password"),
  
          ]);
    }
}
