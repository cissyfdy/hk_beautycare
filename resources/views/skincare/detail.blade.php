@extends('layouts.app')
@section('content')

<div class="skincare-page detail-page">



    {{-- ══ TOMBOL KEMBALI ══ --}}
    <div class="back-navigation" style="margin: 20px 0;">
        <a href="{{ route('skincare.local') }}" class="btn-back" style="text-decoration: none; color: #333; display: inline-flex; align-items: center; gap: 5px;">
            ← Kembali ke Daftar Produk
        </a>
    </div>

    {{-- ══ DETAIL CONTAINER ══ --}}
    <div class="detail-container" style="display: flex; gap: 40px; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); margin-top: 20px;">
        
        {{-- Sisi Kiri: Gambar --}}
        <div class="detail-image-box" style="flex: 1; max-width: 400px; position: relative;">
            @if($product->image_url)
                <img 
                    src="{{ $product->image_url }}" 
                    alt="{{ $product->original_name }}"
                    style="width: 100%; height: auto; border-radius: 8px; object-fit: cover;"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex'"
                >
                <div class="product-img-placeholder" style="display:none; width: 100%; height: 300px; background: #f5f5f5; align-items: center; justify-content: center; font-size: 3rem; border-radius: 8px;">🌿</div>
            @else
                <div class="product-img-placeholder" style="width: 100%; height: 300px; background: #f5f5f5; display: flex; align-items: center; justify-content: center; font-size: 3rem; border-radius: 8px;">🌿</div>
            @endif
        </div>

        {{-- Sisi Kanan: Informasi --}}
        <div class="detail-info-box" style="flex: 2; display: flex; flex-direction: column; gap: 15px;">
            <span class="detail-badge" style="background: #e8f5e9; color: #2e7d32; padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; width: fit-content; font-weight: 600;">
                {{ $product->product_name }}
            </span>
            
            <h1 class="detail-title" style="font-size: 2rem; margin: 0; color: #222;">
                {{ $product->original_name }}
            </h1>
            
            <hr style="border: 0; border-top: 1px solid #eee; margin: 10px 0;">

            @if($product->ingredients)
                <div class="detail-ingredients-section">
                    <h3 style="font-size: 1.1rem; color: #444; margin-bottom: 8px;">Kandungan Bahan (Ingredients):</h3>
                    <p style="color: #666; line-height: 1.6; background: #fafafa; padding: 15px; border-radius: 8px; border-left: 4px solid #81c784;">
                        {{ $product->ingredients }}
                    </p>
                </div>
            @else
                <p style="color: #999; font-style: italic;">Informasi kandungan bahan belum tersedia.</p>
            @endif
        </div>

    </div>

</div>

@endsection