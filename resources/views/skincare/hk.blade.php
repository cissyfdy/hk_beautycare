@extends('layouts.app')
@section('content')

<div class="skincare-page">
    {{-- ══ PAGE HEADER ══ --}}
    <div class="page-header">
        <p class="page-subtitle">Eksklusif Skincare Formulasi Terbaik</p>
        <h1 class="page-title">HK BeautyCare <em>Products</em></h1>
    </div>

    {{-- ══ TOOLBAR ══ --}}
    <div class="toolbar">
        <form action="{{ route('skincare.hk') }}" method="GET" class="toolbar-left">
            <div class="search-wrap">
                <span class="search-icon">🔍</span>
                <input
                    type="text"
                    name="search"
                    placeholder="Cari produk HK BeautyCare..."
                    value="{{ request('search') }}"
                >
            </div>
            <button type="submit" class="btn-filter">Search</button>
        </form>
    </div>

    {{-- ══ RESULT INFO ══ --}}
    @if(request('search'))
    <div class="result-info">
        <p>Menampilkan hasil pencarian untuk "<strong>{{ request('search') }}</strong>"</p>
        <a href="{{ route('skincare.hk') }}" class="clear-search" style="color: var(--rose-deep); text-decoration: none; font-weight: 600; font-size: 0.8rem;">Reset Pencarian</a>
    </div>
    @endif

    {{-- ══ PRODUCTS GRID ══ --}}
    <main class="product-section">
        @if($hkProducts->count() > 0)
            <div class="product-grid hk-exclusive-grid">
                @foreach($hkProducts as $product)
                    <div class="product-card hk-exclusive-card">
                        
                        <div class="card-image-wrap hk-img-container">
                            @if($product->image_url)
                                <img src="{{ $product->image_url }}" alt="{{ $product->original_name }}" loading="lazy">
                            @else
                                <div class="no-img">🌿</div>
                            @endif
                            <span class="badge-hk-exclusive">HK EKSKLUSIF</span>
                        </div>
                        
                        <div class="card-body">
                            <span class="prod-category">
                                {{ strtoupper($product->product_name) }}
                            </span>
                            
                            <h3 class="prod-title" title="{{ $product->original_name }}">
                                {{ $product->original_name }}
                            </h3>
                            
                            <div class="card-actions">
                                @if($product->link_shopee)
                                    <a href="{{ $product->link_shopee }}" target="_blank" class="btn-shopee">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M18.2 24H5.8C5.2 24 4.7 23.5 4.6 22.9L3 7.7C2.9 7.1 3.4 6.6 4 6.6H7.3C7.6 3.1 10.4 0.4 13.9 0.4C16.9 0.4 19.5 2.5 20.2 5.5C20.3 5.9 20 6.3 19.6 6.4C19.2 6.5 18.8 6.2 18.7 5.8C18.2 3.4 16.2 1.7 13.9 1.7C11.1 1.7 8.9 3.8 8.6 6.6H19.9C20.5 6.6 21 7.1 21.1 7.7L19.5 22.9C19.3 23.5 18.8 24 18.2 24ZM4.4 7.9L5.9 22.7H18.1L19.6 7.9H4.4Z"/>
                                        </svg>
                                        Beli di Shopee
                                    </a>
                                @else
                                    <button class="btn-shopee btn-shopee-disabled" disabled>
                                        Stok Habis
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <p>Tidak ada produk HK BeautyCare yang cocok dengan pencarian Anda.</p>
                <a href="{{ route('skincare.hk') }}" class="btn-filter" style="text-decoration:none; display:inline-block; margin-top:1rem;">Lihat Semua Produk</a>
            </div>
        @endif
    </main>

    {{-- ══ PAGINATION ══ --}}
    @if($hkProducts->hasPages())
    <div class="pagination-wrap">
        <nav class="hk-pagination">
            <div class="pag-links">
                @if($hkProducts->onFirstPage())
                    <span class="pag-btn disabled" aria-disabled="true">← Prev</span>
                @else
                    <a href="{{ $hkProducts->previousPageUrl() }}" class="pag-btn" rel="prev">← Prev</a>
                @endif

                @for($p = 1; $p <= $hkProducts->lastPage(); $p++)
                    @if($p == $hkProducts->currentPage())
                        <span class="pag-btn active">{{ $p }}</span>
                    @else
                        <a href="{{ $hkProducts->url($p) }}" class="pag-btn">{{ $p }}</a>
                    @endif
                @endfor

                @if($hkProducts->hasMorePages())
                    <a href="{{ $hkProducts->nextPageUrl() }}" class="pag-btn" rel="next">Next →</a>
                @else
                    <span class="pag-btn disabled" aria-disabled="true">Next →</span>
                @endif
            </div>
        </nav>
    </div>
    @endif

</div>

@endsection