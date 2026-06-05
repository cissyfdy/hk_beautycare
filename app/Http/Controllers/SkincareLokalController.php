<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkincareLocal;

class SkincareLokalController extends Controller
{
    // + ambilDataProductLokal(Request $request)
    public function ambilDataProductLokal(Request $request)
    {
        // Memanggil fungsi dari Model SkincareLocal
        $query = SkincareLocal::getDataProdukLokal();

        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('original_name', 'like', '%' . $request->search . '%')
                  ->orWhere('product_name', 'like', '%' . $request->search . '%');
            });
        }

        $sortField = $request->get('sort', 'original_name');
        $sortOrder = $request->get('order', 'asc');
        $query->orderBy($sortField, $sortOrder);

        $skincares = $query->paginate(10);
        
        // Membuka view local.blade.php di dalam folder skincare
        return view('skincare.local', compact('skincares'));
    }

    // + ambilDataDetailProductLokal($id)
    public function ambilDataDetailProductLokal(int|string $id)
    {
        // Memanggil fungsi dari Model SkincareLocal
        $product = SkincareLocal::getDataProdukLokalByProductId($id);

        if (!$product) {
            abort(404, 'Produk tidak ditemukan');
        }

        // Membuka view detail.blade.php di dalam folder skincare
        return view('skincare.detail', compact('product'));
    }
}