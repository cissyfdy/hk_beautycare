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
        $path = database_path('skincare_data.json');
        
        if (!File::exists($path)) {
            $this->command->error("File JSON tidak ditemukan di: {$path}");
            return;
        }
    
        $json = File::get($path);
        $data = json_decode($json, true);
    
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->command->error("Format JSON tidak valid!");
            return;
        }
    
        foreach ($data as $obj) {
            DB::table('skincare_products')->insert([
                'product_name'  => $obj['product_name'] ?? 'N/A',
                'original_name' => $obj['original_name'] ?? 'N/A',
                'image_url'     => $obj['image_url'] ?? null,
                'ingredients'   => $obj['ingredients'] ?? null,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
        $this->command->info("Data berhasil di-seed!");
    }

}
