<?php

namespace Database\Seeders;

use App\Models\items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        items::create([
            "name"=>"Mobail",
            "description"=>"IPhone 14 prommax",
            "image"=>"images/iPhone-14-concept.jpg",
            "price"=>300,
        ]);
        items::create([
            "name"=>"carpet",
            "description"=>"Afghani",
            "image"=>"images/carpet.jpg",
            "price"=>500,
        ]);
        items::create([
            "name"=>"iphone",
            "description"=>"Iphone",
            "image"=>"images/iPhone.jpg",
            "price"=>1000,
        ]);
    }
}
