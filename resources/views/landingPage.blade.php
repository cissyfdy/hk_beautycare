@extends('layouts.app')
@section('content')

<section class="hk-hero">
    <div class="hero-left-hk">
        <h1 class="hero-h1">
            Rawat Kulitmu,<br>
            Tampil <em>Lebih Percaya</em><br>
            Diri Setiap Hari
        </h1>
        <p class="hero-sub">
            HK Beauty Care menghadirkan layanan perawatan kulit profesional berbasis teknologi terkini,
            dipadukan dengan sentuhan personal untuk setiap klien kami.
        </p>
        <div class="hero-btns">
            <a href="#treatments" class="btn-pink">Lihat Treatment →</a>
            <a href="#about" class="btn-outline-pink">Tentang Kami</a>
            <a href="https://checkyourglow.online" target="_blank" class="btn-check-skin">Analisis Kulit Gratis</a>
        </div>

        <div class="hero-stats">
            <div class="stat-item">
                <div class="stat-num">5K+</div>
                <div class="stat-label">Klien Puas</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">3</div>
                <div class="stat-label">Cabang Aktif</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">8+</div>
                <div class="stat-label">Tahun Berpengalaman</div>
            </div>
        </div>
    </div>

    <div class="hero-right-hk">
        <div class="hero-img-cluster">
            <div class="hero-img-main">
                <img src="{{ asset('images/2.jpeg') }}" alt="">
            </div>
            <div class="img-pill">
                <img src="{{ asset('images/3.jpeg') }}" alt="">
            </div>
            <div class="img-circle">
                <img src="{{ asset('images/4.jpeg') }}" alt="">
            </div>
            <div class="float-badge">
                <div class="fb-num">★ 4.9</div>
                <div class="fb-label">Rating Klinik</div>
            </div>
        </div>
    </div>
</section>


<div class="hk-ticker">
    <div class="hk-ticker-inner">
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>SKIN CARE</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>FACIAL TREATMENT</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>ANTI AGING</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>WHITENING</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>ACNE CARE</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>BODY TREATMENT</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>LASER THERAPY</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>PREMIUM CLINIC</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>SKIN CARE</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>FACIAL TREATMENT</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>ANTI AGING</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>WHITENING</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>ACNE CARE</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>BODY TREATMENT</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>LASER THERAPY</span>
        <span class="hk-ticker-item"><span class="hk-ticker-dot"></span>PREMIUM CLINIC</span>
    </div>
</div>


<section class="hk-about" id="about">
    <div class="about-content">
        <span class="about-label">Tentang HK BeautyCare</span>
        <h2 class="about-h2">
            Klinik Kecantikan Terpercaya<br>
            dengan Sentuhan <em>Personal</em>
        </h2>
        <p class="about-p">
            HK BeautyCare berdiri sejak 2016 dengan misi memberikan solusi perawatan kulit terbaik bagi setiap klien.
            Kami percaya bahwa kecantikan sejati berasal dari kulit yang sehat dan terawat dengan baik.
        </p>
        <p class="about-p">
            Dipandu oleh tim dokter kulit dan beautician bersertifikat, kami menghadirkan rangkaian treatment
            menggunakan teknologi terkini yang telah teruji secara klinis. Setiap sesi kami rancang khusus
            sesuai kondisi dan kebutuhan kulit unik Anda.
        </p>
        <div class="about-highlights">
            <div class="highlight-item">
                <div class="highlight-icon">🩺</div>
                <div class="highlight-text">
                    <h4>Dokter Berpengalaman</h4>
                    <p>Tim dokter spesialis kulit tersertifikasi</p>
                </div>
            </div>
            <div class="highlight-item">
                <div class="highlight-icon">🔬</div>
                <div class="highlight-text">
                    <h4>Teknologi Modern</h4>
                    <p>Peralatan medis berstandar internasional</p>
                </div>
            </div>
            <div class="highlight-item">
                <div class="highlight-icon">🌿</div>
                <div class="highlight-text">
                    <h4>Bahan Premium</h4>
                    <p>Produk perawatan terpilih & teruji klinis</p>
                </div>
            </div>
            <div class="highlight-item">
                <div class="highlight-icon">💕</div>
                <div class="highlight-text">
                    <h4>Pelayanan Personal</h4>
                    <p>Konsultasi dan treatment disesuaikan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-visual">
        <div class="about-main-box">
            <img src="{{ asset('images/1.jpeg') }}" alt="">
        </div>
        <div class="about-floating-pill">
            <div class="afp-stars">★★★★★</div>
            <div class="afp-text">5.000+ Klien Puas</div>
            <div class="afp-sub">Sejak 2016</div>
        </div>
    </div>
</section>


<section class="hk-treatments" id="treatments">
    <div class="section-head">
        <span class="s-label">Layanan Kami</span>
        <h2 class="s-title">Jenis <em>Treatment</em></h2>
        <p class="s-sub">Temukan perawatan yang tepat untuk kulitmu</p>
    </div>

    <div class="treatments-grid">
        <div class="treatment-card">
            <div class="treatment-img">
                <img src="{{ asset('images/lhala.jpeg') }}" alt="">
                <span class="img-placeholder-label">Peeling</span>
            </div>
            <div class="treatment-body">
                <span class="treatment-tag">Wajah</span>
                <h3 class="treatment-title">Lhaha Peel</h3>
                <p class="treatment-desc">mengeksfoliasi kulit secara lembut, merangsang regenerasi sel, meningkatkan produksi kolagen, dan memperbaiki tekstur serta warna kulit tanpa menimbulkan iritasi atau downtime signifikan.</p>
            </div>
        </div>

        <div class="treatment-card">
            <div class="treatment-img">
                <img src="{{ asset('images/neauvia.jpeg') }}" alt="">
                <span class="img-placeholder-label">Brightening</span>
            </div>
            <div class="treatment-body">
                <span class="treatment-tag">Wajah</span>
                <h3 class="treatment-title">Skinbooster Neauvia</h3>
                <p class="treatment-desc">Mencerahkan dan meratakan warna kulit dengan serum premium.</p>
            </div>
        </div>

        <div class="treatment-card">
            <div class="treatment-img">
                <img src="{{ asset('images/rf.jpeg') }}" alt="">
                <span class="img-placeholder-label">Rejuvenation</span>
            </div>
            <div class="treatment-body">
                <span class="treatment-tag">Radiofrequency</span>
                <h3 class="treatment-title">RF Wajah</h3>
                <p class="treatment-desc">Membantu memperbaiki struktur kulit dari dalam tanpa merusak permukaan.</p>
            </div>
        </div>

        <div class="treatment-card">
            <div class="treatment-img">
                <img src="{{ asset('images/iceglow.jpeg') }}" alt="">
                <span class="img-placeholder-label">Ice Glow</span>
            </div>
            <div class="treatment-body">
                <span class="treatment-tag">Ice Glow</span>
                <h3 class="treatment-title">Ice Glow</h3>
                <p class="treatment-desc">Menstimulasi peredangan darah di wajah, Merangsang oksigenasi kulit, Menenangkan kulit yang kemerahan akibat iritasi atau radang.</p>
            </div>
        </div>

        <div class="treatment-card">
            <div class="treatment-img">
                <img src="{{ asset('images/prp.jpeg') }}" alt="">
                <span class="img-placeholder-label">PRP</span>
            </div>
            <div class="treatment-body">
                <span class="treatment-tag">PRP</span>
                <h3 class="treatment-title">Platelet Rich Plasma</h3>
                <p class="treatment-desc">membantu penyembuhan cedera ligamen, tendon, dan otot dengan lebih cepat.</p>
            </div>
        </div>

        <div class="treatment-card">
            <div class="treatment-img">
                <img src="{{ asset('images/juvelook.jpeg') }}" alt="">
                <span class="img-placeholder-label">Skinbooster</span>
            </div>
            <div class="treatment-body">
                <span class="treatment-tag">Skinbooster</span>
                <h3 class="treatment-title">Skinbooster Juve Look</h3>
                <p class="treatment-desc">Memberikan kelembapan instan pada kulit.</p>
            </div>
        </div>
    </div>
</section>


<section class="hk-testimonials" id="testimonials">
    <div class="section-head">
        <span class="s-label">Kata Klien Kami</span>
        <h2 class="s-title">Testimoni <em>Pelanggan</em></h2>
        <p class="s-sub">Ribuan klien telah merasakan manfaatnya</p>
    </div>

    <div class="testi-grid">
        <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <p class="testi-quote">"Setelah rutin treatment di sini, kulit saya jauh lebih cerah dan jerawat berkurang drastis. Sangat puas!"</p>
            <div class="testi-person">
                <div class="testi-avatar">👩</div>
                <div>
                    <div class="testi-name">Rania Amanda</div>
                    <div class="testi-role">Klien Setia (Antapani)</div>
                </div>
            </div>
        </div>

        <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <p class="testi-quote">"Dokternya sangat ramah dan profesional. Konsultasinya detail dan hasilnya terasa dalam 2 minggu."</p>
            <div class="testi-person">
                <div class="testi-avatar">👩</div>
                <div>
                    <div class="testi-name">Dr. Citra Kirana</div>
                    <div class="testi-role">Pelanggan Reguler</div>
                </div>
            </div>
        </div>

        <div class="testi-card">
            <div class="testi-stars">★★★★★</div>
            <p class="testi-quote">"Tempatnya nyaman, steril dan pelayanannya sangat memuaskan. Pasti bakal balik lagi!"</p>
            <div class="testi-person">
                <div class="testi-avatar">👩</div>
                <div>
                    <div class="testi-name">Nadia Shafira</div>
                    <div class="testi-role">Klien Eksklusif</div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="hk-locations" id="locations">
    <div class="section-head">
        <span class="s-label">Temukan Kami</span>
        <h2 class="s-title">Cabang <em>HK BeautyCare</em></h2>
        <p class="s-sub">Kunjungi kami di salah satu cabang terdekat</p>
    </div>

    <div class="locations-grid">
        <div class="location-card">
            <div class="location-map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.771239611226!2d107.65934527453716!3d-6.918002067711234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e1694f4791%3A0x7d63d6b0bfbb167e!2sJl.%20Puri%20Dago%20No.51%2C%20Sukamiskin%2C%20Kec.%20Antapani%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040291!5e0!3m2!1sid!2sid!4v1700000000000" 
                    allowfullscreen="" loading="lazy">
                </iframe>
                <span class="location-map-label">Antapani</span>
            </div>
            <div class="location-body">
                <div class="location-branch">Cabang 1</div>
                <div class="location-name">HK BeautyCare Antapani</div>
                <div class="location-address">
                    Komplek Ruko, Jl. Puri Dago No.51, Sukamiskin, Kec. Antapani, Kota Bandung, Jawa Barat 40291
                </div>
                <div class="location-hours">Buka: <span>Senin–Minggu, 10.00–18.00</span></div>
                <a href="https://maps.google.com/?q=Jl.+Puri+Dago+No.51+Sukamiskin+Bandung" target="_blank" class="location-gmaps-btn">
                    📍 Buka di Google Maps
                </a>
            </div>
        </div>

        <div class="location-card">
            <div class="location-map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5972321487214!2d107.6094392!3d-6.9386711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6223e7ca07d%3A0x8e8ca1f9fdfdd81a!2sJl.%20Pasir%20Salam%2C%20Ancol%2C%20Kec.%20Regol%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040254!5e0!3m2!1sid!2sid!4v1700000000001" 
                    allowfullscreen="" loading="lazy">
                </iframe>
                <span class="location-map-label">Regol</span>
            </div>
            <div class="location-body">
                <div class="location-branch">Cabang 2</div>
                <div class="location-name">HK BeautyCare Bandung</div>
                <div class="location-address">
                    Jl. Pasir Salam, Ancol, Kec. Regol, Kota Bandung, Jawa Barat 40254
                </div>
                <div class="location-hours">Buka: <span>Senin–Sabtu, 10.00–18.00</span></div>
                <a href="https://maps.google.com/?q=Jl.+Pasir+Salam+Ancol+Regol+Bandung" target="_blank" class="location-gmaps-btn">
                    📍 Buka di Google Maps
                </a>
            </div>
        </div>

        <div class="location-card">
            <div class="location-map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.071239611226!2d107.9123452!3d-7.218002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b20db65a4e07%3A0x629bf2344795e1bb!2sJl.%20Ahmad%20Yani%20No.407%2C%20Sucikaler%2C%20Kec.%20Karangpawitan%2C%20Kabupaten%20Garut%2C%20Jawa%20Barat%2044182!5e0!3m2!1sid!2sid!4v1700000000002" 
                    allowfullscreen="" loading="lazy">
                </iframe>
                <span class="location-map-label">Garut</span>
            </div>
            <div class="location-body">
                <div class="location-branch">Cabang 3</div>
                <div class="location-name">HK BeautyCare Garut</div>
                <div class="location-address">
                    Jl. Ahmad Yani No.407, Sucikaler, Kec. Karangpawitan, Kabupaten Garut, Jawa Barat 44182
                </div>
                <div class="location-hours">Buka: <span>Senin–Sabtu, 09.00–20.00</span></div>
                <a href="https://maps.google.com/?q=Jl.+Ahmad+Yani+No.407+Karangpawitan+Garut" target="_blank" class="location-gmaps-btn">
                    📍 Buka di Google Maps
                </a>
            </div>
        </div>
    </div>
</section>


<section class="hk-social" id="social">
    <div class="section-head">
        <span class="s-label">Ikuti Kami</span>
        <h2 class="s-title">Temukan di <em>Media Sosial</em></h2>
        <p class="s-sub">Update terbaru treatment, promo, dan tips kecantikan</p>
    </div>

    <div class="social-grid">
        <div class="social-card">
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/hkbeautycenter?igsh=cWFrY2IyOHlyYWpk" data-instgrm-version="13" style="background:#FFF; border:0; border-radius:12px; margin: 1px; max-width:100%; min-width:326px; padding:0; width:99.375%;"></blockquote>
            <script async src="//www.instagram.com/embed.js"></script>
        </div>


            <div class="social-embed-area" style="height: auto; min-height: 380px; padding: 24px; background: #fff; border-radius: 12px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; border: 1px solid #eaeaea; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                <div class="shopee-logo-wrapper" style="font-size: 64px; margin-bottom: 16px; background: #fff5f1; width: 100px; height: 100px; line-height: 100px; border-radius: 50%;">
                    🛍️
                </div>
                <h3 style="font-size: 20px; color: #ee4d2d; margin-bottom: 8px; font-weight: 700;">HK Beauty Center di Shopee</h3>
                <p style="font-size: 14px; color: #666; max-width: 280px; margin-bottom: 24px; line-height: 1.5;">
                    Dapatkan produk skincare premium pilihan dan promo eksklusif langsung dari official store kami di Shopee.
                </p>
                <a href="https://shopee.co.id/hkbeautycenter_" target="_blank" rel="noopener noreferrer" class="btn-shopee" style="background: #ee4d2d; color: #fff; padding: 12px 28px; border-radius: 25px; text-decoration: none; font-weight: bold; font-size: 14px; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease; box-shadow: 0 4px 14px rgba(238, 77, 45, 0.3);">
                    Kunjungi Toko Shopee ➔
                </a>
            </div>
    </div>
</section>


<section class="hk-cta">
    <h2>Siap Mulai <em>Perjalanan</em><br>Kecantikanmu?</h2>
    <p>Konsultasikan kebutuhan kulitmu dengan dokter kami secara gratis.</p>
    <a href="#locations" class="btn-white">Booking Konsultasi Gratis</a>
</section>


<footer class="hk-footer">
    <div class="footer-top">
        <div class="footer-brand">
            <div class="fb-logo">HK <span>Beauty</span>Care</div>
            <p>Klinik kecantikan profesional yang menghadirkan solusi perawatan kulit terbaik sejak 2016. Kami berkomitmen untuk kecantikan alami setiap klien.</p>
            <div class="fb-socials">
                <a href="https://www.instagram.com/hkbeautycenter?igsh=cWFrY2IyOHlyYWpk" title="Instagram">📷</a>
                <a href="#" title="WhatsApp">💬</a>
                <a href="https://shopee.co.id/hkbeautycenter_" title="Shopee">🛍️</a>
                <a href="#" title="TikTok">🎵</a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Layanan</h4>
            <ul>
                <li><a href="#">Deep Cleansing</a></li>
                <li><a href="#">Skin Brightening</a></li>
                <li><a href="#">Anti Aging</a></li>
                <li><a href="#">Acne Solution</a></li>
                <li><a href="#">Laser Therapy</a></li>
                <li><a href="#">Body Treatment</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Informasi</h4>
            <ul>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Promo & Paket</a></li>
                <li><a href="#">Blog Kecantikan</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Karir</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Kontak</h4>
            <ul>
                <li><a href="#">📞 085819873960</a></li>
                <li><a href="#">💬 085819873960</a></li>
                <li><a href="#">✉️ onlinehkbc@gmail.com</a></li>
                <li><a href="#">📍 Jl. Ahmad Yani No. 147 Koropeak Garut Jawa Barat</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© {{ date('Y') }} HK BeautyCare. All rights reserved.</p>
        <p><a href="#">Kebijakan Privasi</a> · <a href="#">Syarat & Ketentuan</a></p>
    </div>
</footer>

@endsection