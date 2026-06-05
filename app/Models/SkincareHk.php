<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkincareHk extends Model
{
    protected $table = 'hk_beautycare_products';
    protected $primaryKey = 'product_id'; 

    protected $fillable = [
        'product_name', 
        'original_name', 
        'image_url', 
        'link_shopee'
    ];

    // Method pembantu static sesuai dengan Class Diagram
    public static function getDataProdukHk()
    {
        return self::query();
    }
}