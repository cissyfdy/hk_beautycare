@extends('layouts.app')
@section('content')

<div class="skincare-page">
    {{-- ══ PAGE HEADER ══ --}}
    <div class="page-header">
        <p class="page-subtitle">Kumpulan Produk Lokal Indonesia</p>
        <h1 class="page-title">Skincare <em>Products</em></h1>
    </div>

    {{-- ══ TOOLBAR ══ --}}
    <div class="toolbar">
        <form action="{{ route('skincare.local') }}" method="GET" class="toolbar-left">
            <div class="search-wrap">
                <span class="search-icon">🔍</span>
                <input
                    type="text"
                    name="search"
                    placeholder="Cari produk skincare..."
                    value="{{ request('search') }}"
                >
            </div>
            <button type="submit" class="btn-filter">Search</button>
        </form>
    </div>


    {{-- ══ PRODUCT GRID ══ --}}
    <div class="result-info">
        <span>
            @if(request('search'))
                Hasil untuk "<strong>{{ request('search') }}</strong>"
            @else
                Semua Produk
            @endif
        </span>
        <span>{{ $skincares->total() }} produk ditemukan</span>
    </div>

    <section class="product-section">
        <div class="product-grid">
            @forelse($skincares as $item)
            <div class="product-card">
                <a href="{{ route('skincare.detail', $item->product_id) }}" class="product-link-wrapper">
                    <div class="product-img-wrap">
                        @if($item->image_url)
                            <img
                                src="{{ $item->image_url }}"
                                alt="{{ $item->original_name }}"
                                onerror="this.style.display='none';this.nextElementSibling.style.display='flex'"
                            >
                            <div class="product-img-placeholder" style="display:none">🌿</div>
                        @else
                            <div class="product-img-placeholder">🌿</div>
                        @endif
                        <span class="product-category-badge">{{ $item->product_name }}</span>
                    </div>
                </a>

                <div class="product-body">
                    <h3 class="product-name">
                        <a href="{{ route('skincare.detail', $item->product_id) }}">{{ $item->original_name }}</a>
                    </h3>
                    
                    @if($item->ingredients)
                        <p class="product-ingredients">{{ Str::limit($item->ingredients, 100) }}</p>
                    @endif
                    <div class="product-footer">
                        <span class="product-category">{{ $item->product_name }}</span>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </section>

    {{-- ══ PAGINATION ══ --}}
    @if($skincares->hasPages())
    <div class="pagination-wrap">
        <nav role="navigation" aria-label="Pagination">
            <p>Menampilkan {{ $skincares->firstItem() }}–{{ $skincares->lastItem() }} dari {{ $skincares->total() }} produk</p>
            <p>Sumber Data : <a href="https://incidecoder.com/">INCIDecoder</a></p>
            <div class="pag-buttons">
                {{-- Prev --}}
                @if($skincares->onFirstPage())
                    <span class="pag-btn disabled" aria-disabled="true">← Prev</span>
                @else
                    <a href="{{ $skincares->previousPageUrl() }}" class="pag-btn" rel="prev">← Prev</a>
                @endif

                {{-- Page numbers --}}
                @for($p = 1; $p <= $skincares->lastPage(); $p++)
                    @if($p == $skincares->currentPage())
                        <span class="pag-btn active">{{ $p }}</span>
                    @else
                        <a href="{{ $skincares->url($p) }}" class="pag-btn">{{ $p }}</a>
                    @endif
                @endfor

                {{-- Next --}}
                @if($skincares->hasMorePages())
                    <a href="{{ $skincares->nextPageUrl() }}" class="pag-btn" rel="next">Next →</a>
                @else
                    <span class="pag-btn disabled" aria-disabled="true">Next →</span>
                @endif
            </div>
        </nav>
    </div>
    @endif

</div>{{-- .skincare-page --}}

<script>
    // Close modal on overlay click
    document.getElementById('addModal').addEventListener('click', function(e) {
        if (e.target === this) this.classList.remove('open');
    });
    // Close modal on ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') document.getElementById('addModal').classList.remove('open');
    });
</script>

@endsection