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
            'images' => 'storage/products_image/product-1a-removebg-preview.png,storage/products_image/product-1b-removebg-preview.png',
            'sizes' => '10,13,15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

         DB::table('products')->insert([
            'name' => 'Nike SuperRep Go 3 Next Nature Flyknit',
            'description' => 'The new Nike SuperRep Go 3 Flyknit Shoe is a radical design story rooted in sustainability and innovation. The zoned Flyknit construction wraps your foot in 360 degrees of comfort and support. A finely ground, reclaimed foam midsole gives you responsive cushioning for high-impact training. The lightweight, packable design lets you keep them close, no matter where your next workout takes you.',
            'price' => 5295,
            'images' => 'storage/products_image/product-2a-removebg-preview.png,storage/products_image/product-2b-removebg-preview.png',
            'sizes' => '10,13,15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);



          DB::table('products')->insert([
            'name' => 'Nike React Pegasus Trail 4',
            'description' => 'Running is your daily ritual, taking you from road to trail as you seek out new adventures and goals. Let the Nike React Pegasus Trail 4 take you there and back again with its supportive and springy feel. Underfoot traction keeps you going over rocky terrain, while still providing a smooth ride for the road. Your trusted workhorse with wings is ready for an off-road journey.',
            'price' => 4795,
            'images' => 'storage/products_image/product-3a-removebg-preview.png,storage/products_image/product-3b-removebg-preview.png',
            'sizes' => '10,13,15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

           DB::table('products')->insert([
            'name' => 'Nike Air Zoom Terra Kiger 8',
            'description' => 'Take on those tough and extreme trail runs with the rugged build of the Nike Wildhorse 7.Confidently run rocky terrain with high-abrasion rubber on the outsole that adds durable traction.The upper delivers durable ventilation with support where you need it.Foam midsole cushioning gives a neutral feel and provides responsiveness on every mile.',
            'price' => 4795,
            'images' => 'storage/products_image/product-4a-removebg-preview.png,storage/products_image/product-4b-removebg-preview.png',
            'sizes' => '10,13,15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

            DB::table('products')->insert([
            'name' => 'KD Trey 5 X EP',
            'description' => 'With its lightweight upper and plush support system, the KD Trey 5 X can help you float like KD, waiting for the perfect moment to drive to the hoop. A secure midfoot strap is suited for scoring binges and defensive stands, so that you can lock in and keep winning. This version is made for outdoor-court use with its extra-durable rubber outsole.',
            'price' => 4795,
            'images' => 'storage/products_image/product-5a-removebg-preview.png,storage/products_image/product-5b-removebg-preview.png',
            'sizes' => '10,13,15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

             DB::table('products')->insert([
            'name' => 'Nike Wildhorse 7',
            'description' => 'You chase the clock, challenging and encouraging each other all in the name of achieving goals and making gains. Our go-to model for training relies on a lighter, more breathable upper than our previous edition to complement our standards of durability and comfort, so that you can float through your cardio, power through your lifts and dominate your workouts.',
            'price' => 4795,
            'images' => 'storage/products_image/product-6a-removebg-preview.png,storage/products_image/product-6b-removebg-preview.png',
            'sizes' => '10,13,15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

              DB::table('products')->insert([
            'name' => 'Nike Air Zoom Terra Kiger 8',
            'description' => 'Run the trail in a super-responsive shoe.Fast and lightweight, it delivers a breathable and secure feel as you race over rocky paths.Updated traction lugs provide stability for your downhill miles.',
            'price' => 4795,
            'images' => 'storage/products_image/product-7a-removebg-preview.png,storage/products_image/product-7b-removebg-preview.png',
            'sizes' => '10,13,15',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
