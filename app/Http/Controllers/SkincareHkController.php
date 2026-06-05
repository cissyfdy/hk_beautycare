<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkincareHk;

class SkincareHkController extends Controller
{
    // + ambilDataHKBeautyCareProduct(Request $request)
    public function ambilDataHKBeautyCareProduct(Request $request)
    {
        // Memanggil fungsi dari Model SkincareHk
        $query = SkincareHk::getDataProdukHk();

        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('original_name', 'like', '%' . $request->search . '%')
                  ->orWhere('product_name', 'like', '%' . $request->search . '%');
            });
        }

        $sortField = $request->get('sort', 'original_name');
        $sortOrder = $request->get('order', 'asc');
        $query->orderBy($sortField, $sortOrder);

        // Mempertahankan variabel $hkProducts agar sesuai dengan yang dibaca hk.blade.php
        $hkProducts = $query->paginate(10);

        // Membuka view hk.blade.php di dalam folder skincare
        return view('skincare.hk', compact('hkProducts'));
    }
}