<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exampleImage = Storage::url('samples/DD1068-108.png');;
        
        DB::table('products')->insert([
            'name' => 'Nike Air Huarache',
            'description' => "Built to fit your foot and designed for comfort, the Nike Air Huarache brings back a street-level favourite.Soft leather accents on the upper are mixed with super-breathable, perfectly shined neoprene-like fabric for easy styling.The low-cut collar and bootie-like construction keep it sleek.Its iconic heel clip and stripped-away branding keep the early '90s look you love.",
            'price' => 6445,
            'images' => $exampleImage,
            'sizes' => 'US 7',
            'created_at' => Carbon::now()
        ]);
        
    }
}
