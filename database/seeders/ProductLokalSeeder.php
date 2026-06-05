<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductLokalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/skincare_data.json");
        $data = json_decode($json, true);
    
        foreach ($data as $obj) {
            DB::table('skincare_products')->insert([
                'product_name' => $obj['product_name'],
                'original_name' => $obj['original_name'],
                'image_url' => $obj['image_url'],
                'ingredients' => $obj['ingredients'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

}
