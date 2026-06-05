<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkincareLocal extends Model
{
    protected $table = 'skincare_products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name', 
        'original_name', 
        'image_url', 
        'ingredients'
    ];

    public static function getDataProdukLokal()
    {
        return self::query();
    }

    public static function getDataProdukLokalByProductId(int|string $id)
    {
        return self::where('product_id', $id)->first();
    }
}