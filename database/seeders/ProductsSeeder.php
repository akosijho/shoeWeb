<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        DB::table('products')->insert([
            'name' => 'KD Trey 5 X EP',
            'description' => 'You chase the clock, challenging and encouraging each other all in the name of achieving goals and making gains. Our go-to model for training relies on a lighter, more breathable upper than our previous edition to complement our standards of durability and comfort, so that you can float through your cardio, power through your lifts and dominate your workouts.',
            'price' => 7395,
            'images' => '["http://192.168.1.11:8080/storage/products_image/product-1b-removebg-preview.png","http://192.168.1.11:8080/storage/products_image/product-1b-removebg-preview.png"]',
            'sizes' => '["10","13","15"]',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'category' => 'Lifestyle'
        ]);

        DB::table('products')->insert([
            'name' => 'KD Trey 5 X EP',
            'description' => 'You chase the clock, challenging and encouraging each other all in the name of achieving goals and making gains. Our go-to model for training relies on a lighter, more breathable upper than our previous edition to complement our standards of durability and comfort, so that you can float through your cardio, power through your lifts and dominate your workouts.',
            'price' => 7395,
            'images' => '["http://192.168.1.11:8080/storage/products_image/product-1b-removebg-preview.png","http://192.168.1.11:8080/storage/products_image/product-1b-removebg-preview.png"]',
            'sizes' => '["10","13","15"]',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'category' => 'Jordan'
        ]);


        
          

          
            
    }
}
