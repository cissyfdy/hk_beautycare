<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HK BeautyCare — Skincare Collection</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=DM+Sans:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --rose:        #F2A7BB;
            --rose-light:  #FAD4DF;
            --rose-deep:   #D4688A;
            --petal:       #FFF0F4;
            --petal-2:     #FDE8EF;
            --white:       #FFFFFF;
            --blush-soft:  #FCF0F3;
            --text-dark:   #2D1B24;
            --text-mid:    #7A4F5E;
            --text-light:  #B88EA0;
            --border-pink: rgba(242,167,187,0.35);
            --gold:        #C9956B;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--white);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* ══════════════════════════════
           NAVBAR (RAPID & CLEAN)
        ══════════════════════════════ */
        .hk-nav {
            position: fixed; 
            top: 0; left: 0; right: 0; 
            z-index: 1000;
            display: flex; 
            align-items: center; 
            justify-content: space-between;
            padding: 0 5rem;
            height: 70px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-pink);
            box-shadow: 0 2px 15px rgba(212, 104, 138, 0.05);
        }

        .hk-nav-logo {
            display: flex; 
            align-items: center;
            text-decoration: none;
        }
        
        .hk-nav-logo img {
            max-height: 70px;
            width: auto;
            object-fit: contain;
        }

        .hk-nav-links {
            display: flex; 
            gap: 2rem; 
            list-style: none;
            align-items: center;
        }
        
        .hk-nav-links a {
            font-size: 0.8rem; 
            letter-spacing: 0.08em; 
            text-transform: uppercase;
            font-weight: 600; 
            color: var(--text-mid);
            text-decoration: none; 
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }
        
        .hk-nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; width: 0; height: 2px;
            background-color: var(--rose-deep);
            transition: width 0.3s ease;
        }

        .hk-nav-links a:hover::after {
            width: 100%;
        }

        .hk-nav-links a:hover,
        .hk-nav-links a.active { 
            color: var(--rose-deep); 
        }
        /* ══════════════════════════════
           HERO
        ══════════════════════════════ */
        .hk-hero {
            min-height: 100vh;
            padding-top: 72px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, var(--petal) 0%, var(--white) 55%, var(--rose-light) 100%);
        }

        .hk-hero::before {
            content: '';
            position: absolute;
            width: 700px; height: 700px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(242,167,187,0.22) 0%, transparent 70%);
            top: -100px; right: -100px;
            pointer-events: none;
        }
        .hk-hero::after {
            content: '';
            position: absolute;
            width: 400px; height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(253,232,239,0.5) 0%, transparent 70%);
            bottom: 0; left: 10%;
            pointer-events: none;
        }

        .hero-left-hk {
            display: flex; flex-direction: column;
            justify-content: center;
            padding: 5rem 3.5rem 5rem 5rem;
            position: relative; z-index: 1;
        }

        .hero-tag {
            display: inline-flex; align-items: center; gap: 0.5rem;
            background: var(--rose-light); border-radius: 2rem;
            padding: 0.35rem 1rem;
            font-size: 0.7rem; letter-spacing: 0.15em; text-transform: uppercase;
            color: var(--rose-deep); font-weight: 600;
            margin-bottom: 1.8rem; width: fit-content;
        }
        .hero-tag::before { content: '✦'; font-size: 0.55rem; }

        .hero-h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.6rem, 5vw, 4.4rem);
            font-weight: 400; line-height: 1.12;
            color: var(--text-dark);
            margin-bottom: 1.6rem;
        }
        .hero-h1 em { font-style: italic; color: var(--rose-deep); }

        .hero-sub {
            font-size: 0.92rem; line-height: 1.8;
            color: var(--text-mid); max-width: 400px;
            margin-bottom: 2.8rem; font-weight: 400;
        }

        .hero-btns {
            display: flex; gap: 1rem; flex-wrap: wrap;
            margin-bottom: 3.5rem;
        }

        .hero-stats { display: flex; gap: 2.5rem; }
        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 2rem; font-weight: 400;
            color: var(--rose-deep); line-height: 1;
        }
        .stat-label {
            font-size: 0.72rem; color: var(--text-light);
            letter-spacing: 0.08em; text-transform: uppercase; font-weight: 500;
            margin-top: 0.25rem;
        }
        .btn-check-skin {
            background-color: #fff;
            color: #db7093; /* Sesuaikan dengan warna brand Anda */
            border: 2px solid #db7093;
            padding: 12px 24px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
            margin-top: 10px;
        }

        .btn-check-skin:hover {
            background-color: #db7093;
            color: #fff;
        }

        .hero-right-hk {
            display: flex; align-items: center; justify-content: center;
            padding: 5rem 4rem 5rem 2rem;
            position: relative; z-index: 1;
        }

        .hero-img-cluster { position: relative; width: 420px; height: 480px; }

        .hero-img-main {
            position: absolute;
            top: 0; left: 50%;
            transform: translateX(-50%);
            width: 260px; height: 340px;
            border-radius: 50% 50% 50% 50% / 40% 40% 60% 60%;
            background: linear-gradient(180deg, var(--rose-light) 0%, var(--rose) 100%);
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(212,104,138,0.25);
            display: flex; align-items: center; justify-content: center;
            font-size: 4rem; color: rgba(255,255,255,0.6);
        }
        .hero-img-main img, .img-pill img, .img-circle img {
            width: 100%; height: 100%; object-fit: cover;
        }

        .img-pill {
            position: absolute;
            bottom: 30px; left: 0;
            width: 150px; height: 200px;
            border-radius: 50% / 40%;
            background: linear-gradient(180deg, var(--petal-2) 0%, var(--rose-light) 100%);
            overflow: hidden;
            box-shadow: 0 12px 36px rgba(212,104,138,0.2);
            display: flex; align-items: center; justify-content: center;
            font-size: 2rem; color: rgba(212,104,138,0.4);
        }

        .img-circle {
            position: absolute;
            bottom: 50px; right: 0;
            width: 130px; height: 130px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--rose) 0%, var(--rose-deep) 100%);
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(212,104,138,0.3);
            display: flex; align-items: center; justify-content: center;
            font-size: 2rem; color: rgba(255,255,255,0.6);
        }

        .float-badge {
            position: absolute;
            top: 60px; right: 10px;
            background: #fff;
            border-radius: 1rem;
            padding: 0.8rem 1.2rem;
            box-shadow: 0 8px 28px rgba(212,104,138,0.2);
            font-size: 0.72rem; text-align: center;
            border: 1px solid var(--border-pink);
        }
        .float-badge .fb-num {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem; color: var(--rose-deep); line-height: 1;
        }
        .float-badge .fb-label { color: var(--text-light); font-weight: 500; }

        /* ══════════════════════════════
           TICKER
        ══════════════════════════════ */
        .hk-ticker {
            background: var(--rose-deep);
            padding: 0.9rem 0; overflow: hidden;
        }
        .hk-ticker-inner {
            display: flex; gap: 3rem;
            animation: hkTicker 24s linear infinite;
            white-space: nowrap;
        }
        .hk-ticker-item {
            display: flex; align-items: center; gap: 0.8rem;
            font-size: 0.7rem; letter-spacing: 0.18em; text-transform: uppercase;
            color: rgba(255,255,255,0.85); font-weight: 600;
            flex-shrink: 0;
        }
        .hk-ticker-dot { width: 4px; height: 4px; border-radius: 50%; background: var(--rose-light); flex-shrink: 0; }
        @keyframes hkTicker { from { transform: translateX(0); } to { transform: translateX(-50%); } }

        /* ══════════════════════════════
           ABOUT
        ══════════════════════════════ */
        .hk-about {
            padding: 7rem 5rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
            background: var(--blush-soft);
        }

        .about-label {
            font-size: 0.7rem; letter-spacing: 0.2em; text-transform: uppercase;
            color: var(--rose); font-weight: 600; margin-bottom: 1rem; display: block;
        }
        .about-h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.6rem; font-weight: 400; line-height: 1.2;
            color: var(--text-dark); margin-bottom: 1.5rem;
        }
        .about-h2 em { font-style: italic; color: var(--rose-deep); }
        .about-p { font-size: 0.88rem; line-height: 1.9; color: var(--text-mid); margin-bottom: 1.2rem; }
        .about-highlights { display: grid; grid-template-columns: 1fr 1fr; gap: 1.2rem; margin-top: 2rem; }
        .highlight-item { display: flex; gap: 0.7rem; align-items: flex-start; }
        .highlight-icon {
            width: 38px; height: 38px; flex-shrink: 0;
            background: var(--rose-light); border-radius: 50%;
            display: flex; align-items: center; justify-content: center; font-size: 1rem;
        }
        .highlight-text h4 { font-size: 0.82rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.2rem; }
        .highlight-text p { font-size: 0.75rem; color: var(--text-light); line-height: 1.5; }
        .about-visual { position: relative; }
        .about-main-box {
            width: 100%; aspect-ratio: 4/5;
            border-radius: 2rem;
            background: linear-gradient(160deg, var(--rose-light) 0%, var(--rose) 100%);
            display: flex; align-items: center; justify-content: center;
            font-size: 5rem; color: rgba(255,255,255,0.5);
            overflow: hidden; box-shadow: 0 20px 60px rgba(212,104,138,0.2);
        }
        .about-main-box img { width: 100%; height: 100%; object-fit: cover; }
        .about-floating-pill {
            position: absolute; bottom: -20px; right: -20px;
            background: #fff; border-radius: 1.5rem;
            padding: 1.2rem 1.5rem;
            box-shadow: 0 12px 36px rgba(212,104,138,0.18);
            border: 1px solid var(--border-pink);
        }
        .about-floating-pill .afp-stars { color: #F2A7BB; font-size: 0.75rem; margin-bottom: 0.3rem; }
        .about-floating-pill .afp-text { font-size: 0.8rem; font-weight: 600; color: var(--text-dark); }
        .about-floating-pill .afp-sub { font-size: 0.7rem; color: var(--text-light); }

        /* ══════════════════════════════
           TREATMENTS
        ══════════════════════════════ */
        .hk-treatments { padding: 7rem 5rem; background: var(--white); }
        .section-head { text-align: center; margin-bottom: 4rem; }
        .section-head .s-label {
            font-size: 0.7rem; letter-spacing: 0.2em; text-transform: uppercase;
            color: var(--rose); font-weight: 600; display: block; margin-bottom: 0.8rem;
        }
        .section-head .s-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem; font-weight: 400; color: var(--text-dark); line-height: 1.2;
        }
        .section-head .s-title em { font-style: italic; color: var(--rose-deep); }
        .section-head .s-sub { font-size: 0.87rem; color: var(--text-light); margin-top: 0.8rem; }
        .treatments-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.8rem; }
        .treatment-card {
            border-radius: 1.5rem; overflow: hidden;
            background: var(--blush-soft); border: 1px solid var(--border-pink);
            transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;
        }
        .treatment-card:hover { transform: translateY(-6px); box-shadow: 0 16px 48px rgba(212,104,138,0.18); }
        .treatment-img {
            width: 100%; height: 220px;
            background: linear-gradient(160deg, var(--rose-light) 0%, var(--petal-2) 100%);
            display: flex; align-items: center; justify-content: center;
            font-size: 3rem; color: rgba(212,104,138,0.35);
            overflow: hidden; position: relative;
        }
        .treatment-img img { width: 100%; height: 100%; object-fit: cover; }
        .treatment-img .img-placeholder-label {
            position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);
            background: rgba(255,255,255,0.85); border-radius: 1rem;
            padding: 0.3rem 0.8rem; font-size: 0.65rem;
            color: var(--rose-deep); font-weight: 600; letter-spacing: 0.05em; white-space: nowrap;
        }
        .treatment-body { padding: 1.5rem; }
        .treatment-tag {
            display: inline-block; background: var(--rose-light); color: var(--rose-deep);
            font-size: 0.65rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
            border-radius: 2rem; padding: 0.2rem 0.75rem; margin-bottom: 0.8rem;
        }
        .treatment-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem; font-weight: 400; color: var(--text-dark); margin-bottom: 0.5rem;
        }
        .treatment-desc { font-size: 0.78rem; color: var(--text-light); line-height: 1.6; }

        /* ══════════════════════════════
           TESTIMONIALS
        ══════════════════════════════ */
        .hk-testimonials { padding: 7rem 5rem; background: var(--blush-soft); }
        .testi-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.8rem; margin-top: 4rem; }
        .testi-card {
            background: #fff; border-radius: 1.5rem; padding: 2rem;
            border: 1px solid var(--border-pink); box-shadow: 0 4px 24px rgba(212,104,138,0.07);
            transition: transform 0.25s;
        }
        .testi-card:hover { transform: translateY(-4px); }
        .testi-stars { color: var(--rose); font-size: 0.8rem; letter-spacing: 0.1em; margin-bottom: 1rem; }
        .testi-quote {
            font-family: 'Playfair Display', serif;
            font-size: 1rem; font-style: italic; color: var(--text-dark); line-height: 1.7; margin-bottom: 1.5rem;
        }
        .testi-person { display: flex; align-items: center; gap: 0.8rem; }
        .testi-avatar {
            width: 44px; height: 44px; border-radius: 50%; overflow: hidden;
            background: linear-gradient(135deg, var(--rose-light), var(--rose));
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem; color: rgba(255,255,255,0.7); flex-shrink: 0;
        }
        .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .testi-name { font-size: 0.82rem; font-weight: 600; color: var(--text-dark); }
        .testi-role { font-size: 0.7rem; color: var(--text-light); margin-top: 0.1rem; }

        /* ══════════════════════════════
           LOCATIONS
        ══════════════════════════════ */
        .hk-locations { padding: 7rem 5rem; background: var(--white); }
        .locations-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 4rem; }
        .location-card {
            border-radius: 1.5rem; overflow: hidden;
            border: 1px solid var(--border-pink); background: var(--blush-soft);
            transition: box-shadow 0.3s;
        }
        .location-card:hover { box-shadow: 0 12px 40px rgba(212,104,138,0.15); }
        .location-map {
            width: 100%; height: 200px;
            background: linear-gradient(160deg, var(--rose-light) 0%, #ffe4ec 100%);
            display: flex; align-items: center; justify-content: center;
            font-size: 2.5rem; position: relative; overflow: hidden;
        }
        .location-map-label {
            position: absolute; top: 10px; left: 10px;
            background: rgba(255,255,255,0.9); border-radius: 0.5rem; padding: 0.25rem 0.6rem;
            font-size: 0.65rem; font-weight: 700; color: var(--rose-deep); text-transform: uppercase; letter-spacing: 0.08em;
        }
        .location-body { padding: 1.5rem; }
        .location-branch { font-size: 0.65rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--rose); margin-bottom: 0.5rem; }
        .location-name { font-family: 'Playfair Display', serif; font-size: 1.15rem; font-weight: 400; color: var(--text-dark); margin-bottom: 0.6rem; }
        .location-address { font-size: 0.78rem; color: var(--text-light); line-height: 1.6; margin-bottom: 1rem; }
        .location-hours { font-size: 0.75rem; color: var(--text-mid); font-weight: 500; }
        .location-hours span { color: var(--rose-deep); }
        .location-gmaps-btn {
            display: inline-flex; align-items: center; gap: 0.4rem; margin-top: 1rem;
            background: var(--rose-deep); color: #fff; border-radius: 2rem; padding: 0.5rem 1.1rem;
            font-size: 0.72rem; font-weight: 600; text-decoration: none; transition: opacity 0.2s;
        }
        .location-gmaps-btn:hover { opacity: 0.85; }

        /* ══════════════════════════════
           SOCIAL EMBEDS
        ══════════════════════════════ */
        .hk-social { padding: 7rem 5rem; background: var(--blush-soft); }
        .social-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 4rem; }
        .social-card {
            background: #fff; border-radius: 1.5rem;
            border: 1px solid var(--border-pink); overflow: hidden;
            box-shadow: 0 4px 20px rgba(212,104,138,0.08);
        }
        .social-header {
            display: flex; align-items: center; gap: 1rem;
            padding: 1.2rem 1.5rem; border-bottom: 1px solid var(--border-pink);
        }
        .social-icon { width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
        .social-icon.ig { background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
        .social-icon.shopee { background: #EE4D2D; }
        .social-icon span { color: #fff; font-size: 1rem; }
        .social-name { font-size: 0.9rem; font-weight: 700; color: var(--text-dark); }
        .social-handle { font-size: 0.72rem; color: var(--text-light); }
        .social-embed-area {
            width: 100%; min-height: 380px;
            display: flex; align-items: center; justify-content: center;
            background: var(--petal); flex-direction: column; gap: 0.8rem;
            color: var(--text-light); font-size: 0.8rem; text-align: center; padding: 2rem;
        }
        .embed-icon { font-size: 2.5rem; opacity: 0.4; }
        .embed-note { font-size: 0.72rem; color: var(--text-light); }

        /* ══════════════════════════════
           CTA BANNER
        ══════════════════════════════ */
        .hk-cta {
            padding: 6rem 5rem;
            background: linear-gradient(135deg, var(--rose-deep) 0%, #b04d70 50%, #8a3058 100%);
            text-align: center; position: relative; overflow: hidden;
        }
        .hk-cta::before {
            content: 'HK'; position: absolute;
            font-family: 'Playfair Display', serif;
            font-size: 25rem; font-weight: 400;
            color: rgba(255,255,255,0.04);
            top: 50%; left: 50%; transform: translate(-50%, -50%);
            pointer-events: none; user-select: none;
        }
        .hk-cta h2 { font-family: 'Playfair Display', serif; font-size: 2.8rem; font-weight: 300; color: #fff; margin-bottom: 1rem; position: relative; }
        .hk-cta h2 em { font-style: italic; }
        .hk-cta p { color: rgba(255,255,255,0.75); font-size: 0.9rem; margin-bottom: 2.5rem; position: relative; }
        .btn-white {
            background: #fff; color: var(--rose-deep);
            padding: 0.9rem 2.8rem; border-radius: 3rem;
            font-size: 0.82rem; font-weight: 700; letter-spacing: 0.08em;
            text-decoration: none; display: inline-block;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 24px rgba(0,0,0,0.15); position: relative;
        }
        .btn-white:hover { transform: translateY(-2px); box-shadow: 0 8px 32px rgba(0,0,0,0.2); }

        .btn-pink {
            background: var(--rose-deep);
            color: #fff;
            padding: 0.9rem 2rem;
            border-radius: 3rem;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(212, 104, 138, 0.25);
            border: 2px solid transparent;
        }
        .btn-pink:hover {
            background: #be5374;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 104, 138, 0.35);
        }
        .btn-outline-pink {
            background: transparent;
            color: var(--rose-deep);
            padding: 0.9rem 2rem;
            border-radius: 3rem;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            border: 2px solid var(--rose);
        }
        .btn-outline-pink:hover {
            background: var(--rose-light);
            color: var(--rose-deep);
            border-color: var(--rose-deep);
            transform: translateY(-2px);
        }

        /* Embed Shopee & Iframe Maps Fix */
        .social-embed-area iframe {
            width: 100% !important;
            height: 100% !important;
            border: none !important;
            display: block;
        }
        .location-map iframe {
            width: 100% !important;
            height: 100% !important;
            border: 0 !important;
            position: absolute;
            top: 0;
            left: 0;
        }

        /* ══════════════════════════════
           FOOTER
        ══════════════════════════════ */
        .hk-footer { background: var(--text-dark); padding: 4rem 5rem 2rem; }
        .footer-top { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 3rem; margin-bottom: 3rem; }
        .footer-brand .fb-logo { font-family: 'Playfair Display', serif; font-size: 1.5rem; color: #fff; margin-bottom: 0.8rem; }
        .footer-brand .fb-logo span { color: var(--rose); }
        .footer-brand p { font-size: 0.78rem; color: rgba(255,255,255,0.45); line-height: 1.7; }
        .footer-brand .fb-socials { display: flex; gap: 0.8rem; margin-top: 1.2rem; }
        .fb-socials a {
            width: 34px; height: 34px; border-radius: 50%;
            background: rgba(255,255,255,0.08);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.6); font-size: 0.85rem;
            text-decoration: none; transition: background 0.2s;
        }
        .fb-socials a:hover { background: var(--rose-deep); color: #fff; }
        .footer-col h4 { font-size: 0.75rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(255,255,255,0.5); margin-bottom: 1.2rem; }
        .footer-col ul { list-style: none; }
        .footer-col li { margin-bottom: 0.6rem; }
        .footer-col a { font-size: 0.78rem; color: rgba(255,255,255,0.65); text-decoration: none; transition: color 0.2s; }
        .footer-col a:hover { color: var(--rose-light); }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.08); padding-top: 1.5rem;
            display: flex; justify-content: space-between; align-items: center;
        }
        .footer-bottom p { font-size: 0.72rem; color: rgba(255,255,255,0.35); }
        .footer-bottom a { color: rgba(255,255,255,0.35); text-decoration: none; }

        /* ══════════════════════════════
           ANIMATIONS
        ══════════════════════════════ */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .hero-tag    { animation: fadeUp 0.6s 0.1s ease both; }
        .hero-h1     { animation: fadeUp 0.6s 0.22s ease both; }
        .hero-sub    { animation: fadeUp 0.6s 0.34s ease both; }
        .hero-btns   { animation: fadeUp 0.6s 0.44s ease both; }
        .hero-stats  { animation: fadeUp 0.6s 0.54s ease both; }
        .hero-img-main  { animation: fadeUp 0.7s 0.15s ease both; }
        .img-pill    { animation: fadeUp 0.7s 0.3s ease both; }
        .img-circle  { animation: fadeUp 0.7s 0.45s ease both; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50%       { transform: translateY(-10px); }
        }
        .float-badge { animation: fadeUp 0.7s 0.5s ease both, float 4s 1.2s ease-in-out infinite; }
        .hero-img-main { animation: fadeUp 0.7s 0.15s ease both, float 5s 0.9s ease-in-out infinite; }

        /* ══════════════════════════════
           SKINCARE INDEX PAGE
        ══════════════════════════════ */

        /* Page wrapper — push below fixed nav */
        .skincare-page { padding-top: 50px; min-height: 100vh; background: var(--white); }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--petal) 0%, var(--white) 60%, var(--rose-light) 100%);
            padding: 4rem 5rem 3rem;
            border-bottom: 1px solid var(--border-pink);
            position: relative; overflow: hidden;
        }
        .page-header::after {
            content: '✦';
            position: absolute; right: 5rem; top: 50%; transform: translateY(-50%);
            font-size: 8rem; color: rgba(242,167,187,0.12);
            pointer-events: none; user-select: none;
        }
        .page-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 400; color: var(--text-dark); line-height: 1.1; margin-bottom: 0.6rem;
        }
        .page-title em { font-style: italic; color: var(--rose-deep); }
        .page-subtitle {
            font-size: 0.88rem; color: var(--text-light);
            letter-spacing: 0.06em; font-weight: 400;
        }

        /* Toolbar */
        .toolbar {
            display: flex; align-items: center; justify-content: space-between; gap: 1rem;
            padding: 1.4rem 5rem;
            background: var(--white);
            border-bottom: 1px solid var(--border-pink);
            position: sticky; top: 50px; z-index: 100;
            backdrop-filter: blur(12px);
        }
        .toolbar-left {
            display: flex; align-items: center; gap: 0.8rem; flex: 1;
        }
        .search-wrap {
            position: relative; flex: 1; max-width: 400px;
        }
        .search-wrap .search-icon {
            position: absolute; left: 1rem; top: 50%; transform: translateY(-50%);
            font-size: 0.85rem; pointer-events: none;
        }
        .search-wrap input {
            width: 100%;
            padding: 0.65rem 1rem 0.65rem 2.6rem;
            border: 1.5px solid var(--border-pink);
            border-radius: 2rem;
            font-size: 0.82rem; font-family: inherit;
            color: var(--text-dark); background: var(--petal);
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }
        .search-wrap input:focus {
            border-color: var(--rose);
            box-shadow: 0 0 0 3px rgba(242,167,187,0.2);
            background: var(--white);
        }
        .btn-filter {
            padding: 0.65rem 1.5rem; border-radius: 2rem;
            border: 1.5px solid var(--rose); background: transparent;
            color: var(--rose-deep); font-size: 0.8rem; font-weight: 600;
            cursor: pointer; font-family: inherit; transition: all 0.2s;
            letter-spacing: 0.04em;
        }
        .btn-filter:hover { background: var(--rose); color: #fff; }
        .btn-add {
            display: inline-flex; align-items: center; gap: 0.4rem;
            padding: 0.65rem 1.5rem; border-radius: 2rem;
            background: linear-gradient(135deg, var(--rose) 0%, var(--rose-deep) 100%);
            color: #fff; border: none; font-size: 0.8rem; font-weight: 600;
            cursor: pointer; font-family: inherit;
            box-shadow: 0 4px 16px rgba(212,104,138,0.35);
            transition: opacity 0.2s, transform 0.2s;
            white-space: nowrap;
        }
        .btn-add:hover { opacity: 0.88; transform: translateY(-1px); }

        /* Result info */
        .result-info {
            display: flex; justify-content: space-between; align-items: center;
            padding: 1.5rem 5rem 0;
            font-size: 0.8rem; color: var(--text-light);
        }
        .result-info strong { color: var(--rose-deep); }

        /* Product section */
        .product-section { padding: 1.5rem 5rem 4rem; }

        /* Product grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-top: 1.2rem;
        }

        /* Product card */
        .product-card {
            background: var(--white);
            border: 1px solid var(--border-pink);
            border-radius: 1.4rem;
            overflow: hidden;
            transition: transform 0.28s, box-shadow 0.28s;
            cursor: default;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 40px rgba(212,104,138,0.15);
        }
        .product-img-wrap {
            position: relative;
            width: 100%; height: 200px;
            background: linear-gradient(160deg, var(--petal) 0%, var(--rose-light) 100%);
            overflow: hidden;
            display: flex; align-items: center; justify-content: center;
        }
        .product-img-wrap img {
            width: 100%; height: 100%; object-fit: cover;
            transition: transform 0.35s;
        }
        .product-card:hover .product-img-wrap img { transform: scale(1.04); }
        .product-img-placeholder {
            font-size: 3.5rem; color: rgba(212,104,138,0.3);
            display: flex; align-items: center; justify-content: center;
            width: 100%; height: 100%;
        }
        .product-category-badge {
            position: absolute; bottom: 10px; left: 10px;
            background: rgba(255,255,255,0.9);
            color: var(--rose-deep);
            font-size: 0.62rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
            border-radius: 2rem; padding: 0.22rem 0.7rem;
            border: 1px solid var(--border-pink);
        }
        .product-body { padding: 1.2rem 1.3rem 1.4rem; }
        .product-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.05rem; font-weight: 400; color: var(--text-dark);
            margin-bottom: 0.5rem; line-height: 1.3;
        }
        .product-ingredients {
            font-size: 0.74rem; color: var(--text-light); line-height: 1.6;
            display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;
            overflow: hidden; margin-bottom: 1rem;
        }
        .product-footer {
            display: flex; align-items: center; justify-content: space-between;
            padding-top: 0.8rem;
            border-top: 1px solid var(--border-pink);
        }
        .product-category {
            font-size: 0.68rem; color: var(--rose); font-weight: 600;
            letter-spacing: 0.08em; text-transform: uppercase;
        }

        /* Empty state */
        .empty-state {
            grid-column: 1 / -1;
            text-align: center; padding: 5rem 2rem;
        }
        .empty-icon { font-size: 4rem; opacity: 0.35; margin-bottom: 1rem; }
        .empty-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem; font-weight: 400; color: var(--text-dark); margin-bottom: 0.5rem;
        }
        .empty-desc { font-size: 0.85rem; color: var(--text-light); }

        /* Modal */
        .modal-overlay {
            display: none;
            position: fixed; inset: 0; z-index: 500;
            background: rgba(45,27,36,0.45);
            backdrop-filter: blur(4px);
            align-items: center; justify-content: center;
        }
        .modal-overlay.open { display: flex; }
        .modal {
            background: var(--white);
            border-radius: 1.8rem;
            padding: 2.5rem;
            width: 100%; max-width: 500px;
            box-shadow: 0 24px 80px rgba(212,104,138,0.25);
            border: 1px solid var(--border-pink);
            animation: fadeUp 0.3s ease both;
        }
        .modal-header {
            display: flex; align-items: center; justify-content: space-between;
            margin-bottom: 1.8rem;
        }
        .modal-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem; font-weight: 400; color: var(--text-dark);
        }
        .modal-close {
            background: var(--petal); border: none;
            width: 34px; height: 34px; border-radius: 50%;
            cursor: pointer; font-size: 0.85rem; color: var(--text-mid);
            display: flex; align-items: center; justify-content: center;
            transition: background 0.2s;
        }
        .modal-close:hover { background: var(--rose-light); color: var(--rose-deep); }
        .form-group { margin-bottom: 1.2rem; }
        .form-label {
            display: block; font-size: 0.75rem; font-weight: 600;
            color: var(--text-mid); letter-spacing: 0.06em; text-transform: uppercase;
            margin-bottom: 0.4rem;
        }
        .form-input, .form-textarea {
            width: 100%;
            padding: 0.7rem 1rem;
            border: 1.5px solid var(--border-pink);
            border-radius: 0.8rem;
            font-size: 0.84rem; font-family: inherit;
            color: var(--text-dark); background: var(--petal);
            outline: none; transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-input:focus, .form-textarea:focus {
            border-color: var(--rose);
            box-shadow: 0 0 0 3px rgba(242,167,187,0.2);
            background: var(--white);
        }
        .form-textarea { resize: vertical; min-height: 90px; }
        .btn-submit {
            width: 100%; padding: 0.85rem;
            background: linear-gradient(135deg, var(--rose) 0%, var(--rose-deep) 100%);
            color: #fff; border: none; border-radius: 2rem;
            font-size: 0.85rem; font-weight: 600; font-family: inherit;
            cursor: pointer; letter-spacing: 0.06em;
            box-shadow: 0 4px 16px rgba(212,104,138,0.35);
            transition: opacity 0.2s, transform 0.2s; margin-top: 0.5rem;
        }
        .btn-submit:hover { opacity: 0.88; transform: translateY(-1px); }

        /* Pagination */
        .pagination-wrap {
            padding: 0 5rem 4rem;
        }
        .pagination-wrap nav p {
            font-size: 0.78rem; color: var(--text-light);
            margin-bottom: 1rem; text-align: center;
        }
        .pag-buttons {
            display: flex; align-items: center; justify-content: center; gap: 0.5rem; flex-wrap: wrap;
        }
        .pag-btn {
            display: inline-flex; align-items: center; justify-content: center;
            min-width: 2.4rem; height: 2.4rem; padding: 0 0.8rem;
            border-radius: 2rem;
            font-size: 0.78rem; font-weight: 600;
            text-decoration: none; transition: all 0.2s;
            border: 1.5px solid var(--border-pink);
            color: var(--text-mid); background: var(--white);
        }
        .pag-btn:hover:not(.disabled) {
            background: var(--rose); color: #fff; border-color: var(--rose);
        }
        .pag-btn.active {
            background: linear-gradient(135deg, var(--rose) 0%, var(--rose-deep) 100%);
            color: #fff; border-color: transparent;
        }
        .pag-btn.disabled {
            opacity: 0.35; cursor: not-allowed; pointer-events: none;
        }

        /* ══════════════════════════════
           RESPONSIVE
        ══════════════════════════════ */
        @media (max-width: 900px) {
            .hk-nav { padding: 0 1.5rem; }
            .hk-nav-links { display: none; }
            .hk-hero { grid-template-columns: 1fr; }
            .hero-right-hk { display: none; }
            .hero-left-hk { padding: 5rem 2rem 3rem; }
            .hk-about { grid-template-columns: 1fr; padding: 4rem 2rem; gap: 3rem; }
            .about-visual { display: none; }
            .hk-treatments { padding: 4rem 2rem; }
            .treatments-grid { grid-template-columns: 1fr 1fr; }
            .hk-testimonials { padding: 4rem 2rem; }
            .testi-grid { grid-template-columns: 1fr; }
            .hk-locations { padding: 4rem 2rem; }
            .locations-grid { grid-template-columns: 1fr; }
            .hk-social { padding: 4rem 2rem; }
            .social-grid { grid-template-columns: 1fr; }
            .hk-cta { padding: 4rem 2rem; }
            .hk-footer { padding: 3rem 2rem 1.5rem; }
            .footer-top { grid-template-columns: 1fr 1fr; }
            /* Index page responsive */
            .page-header { padding: 3rem 1.5rem 2rem; }
            .toolbar { padding: 1rem 1.5rem; flex-wrap: wrap; }
            .result-info { padding: 1rem 1.5rem 0; }
            .product-section { padding: 1rem 1.5rem 3rem; }
            .pagination-wrap { padding: 0 1.5rem 3rem; }
        }

        @media (max-width: 600px) {
            .treatments-grid { grid-template-columns: 1fr; }
            .footer-top { grid-template-columns: 1fr; }
            .hero-stats { flex-wrap: wrap; gap: 1.5rem; }
            .about-highlights { grid-template-columns: 1fr; }
            .toolbar-left { flex-wrap: wrap; }
            .product-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 420px) {
            .product-grid { grid-template-columns: 1fr; }
        }

        /* ══════════════════════════════ 
           HK EXCLUSIVE STYLES 
        ══════════════════════════════ */
        .hk-exclusive-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }

        .hk-exclusive-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .hk-img-container {
            width: 100%;
            height: 240px; /* Tinggi seragam untuk citra visual premium */
            background: linear-gradient(160deg, var(--petal) 0%, var(--rose-light) 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hk-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .hk-exclusive-card:hover .hk-img-container img {
            transform: scale(1.05);
        }

        .hk-img-container .no-img {
            font-size: 2.5rem;
            opacity: 0.35;
        }

        .badge-hk-exclusive {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(214, 104, 138, 0.9);
            color: #fff;
            font-size: 0.6rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .hk-exclusive-card .card-body {
            padding: 1.2rem 1rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .hk-exclusive-card .prod-category {
            font-size: 0.65rem;
            color: var(--text-light);
            letter-spacing: 0.05em;
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 600;
        }

        .hk-exclusive-card .prod-title {
            font-family: 'Playfair Display', serif;
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--text-dark);
            line-height: 1.4;
            height: 2.7rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: 1rem;
            flex-grow: 1;
        }

        .hk-exclusive-card .card-actions {
            margin-top: auto;
            width: 100%;
        }

        .btn-shopee {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background: #EE4D2D;
            color: var(--white) !important;
            padding: 0.65rem 1.25rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.25s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(238, 77, 45, 0.2);
            width: 100%;
            box-sizing: border-box;
        }
        
        .btn-shopee:hover:not(:disabled) {
            background: #d73c1c;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(238, 77, 45, 0.3);
        }

        .btn-shopee-disabled {
            background: #ccc !important;
            box-shadow: none !important;
            cursor: not-allowed !important;
            color: #666 !important;
        }
        
        .btn-shopee svg {
            width: 14px;
            height: 14px;
            fill: currentColor;
        }
        /* ══════════════════════════════ 
        HAMBURGER MENU FOR MOBILE 
        ══════════════════════════════ */
    .hk-hamburger {
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 24px;
        height: 18px;
        background: transparent;
        border: none;
        cursor: pointer;
        z-index: 1001;
    }
    
    .hk-hamburger span {
        width: 100%;
        height: 2px;
        background-color: var(--text-dark);
        transition: all 0.3s ease;
    }
    
    /* Transformasi Hamburger Menjadi 'X' saat Aktif */
    .hk-hamburger.active span:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }
    .hk-hamburger.active span:nth-child(2) {
        opacity: 0;
    }
    .hk-hamburger.active span:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }
    
    @media (max-width: 900px) {
        .hk-hamburger {
            display: flex; /* Muncul hanya di layar hp/tablet */
        }
    
        .hk-nav-links {
            display: flex; /* Override display:none bawaan */
            position: fixed;
            top: 0;
            right: -100%; /* Sembunyi di luar layar kanan */
            width: 280px;
            height: 100vh;
            background: rgba(255, 255, 255, 0.98);
            box-shadow: -5px 0 25px rgba(212, 104, 138, 0.1);
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 6rem 2.5rem 2rem;
            gap: 1.8rem;
            transition: right 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 1000;
        }
    
        .hk-nav-links.show {
            right: 0; /* Muncul bergeser ke kiri */
        }
    
        .hk-nav-links a {
            font-size: 0.9rem;
            width: 100%;
            display: block;
        }
}
</style>
</head>
<body>
    
    <nav class="hk-nav">
        <a href="/" class="hk-nav-logo">
            <span class="logo-text"><img src="{{ asset('images/logo.png') }}" alt="" width="200rem"></span>
        </a>

        <button class="hk-hamburger" id="hamburgerBtn" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="hk-nav-links" id="navLinks">
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#treatments">Treatment</a></li>
            <li><a href="#testimonials">Testimoni</a></li>
            <li><a href="#locations">Cabang</a></li>
            <li><a href="#social">Media Sosial</a></li>
            <li><a href="{{ route('skincare.hk') }}">Hk BeautyCare Product</a></li>
            <li><a href="{{ route('skincare.local') }}">Local Skincare Product</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
        document.addEventListener('DOMContentLoaded', function () {
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const navLinks = document.getElementById('navLinks');
        const menuItems = navLinks.querySelectorAll('a');

        // Toggle menu saat hamburger diklik
        hamburgerBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            hamburgerBtn.classList.toggle('active');
            navLinks.classList.toggle('show');
        });

        // Tutup menu saat link di dalamnya diklik (bagus untuk smooth scroll id navbar)
        menuItems.forEach(item => {
            item.addEventListener('click', function () {
                hamburgerBtn.classList.remove('active');
                navLinks.classList.remove('show');
            });
        });

        // Tutup menu jika pengguna mengklik di luar area menu
        document.addEventListener('click', function (e) {
            if (!navLinks.contains(e.target) && !hamburgerBtn.contains(e.target)) {
                hamburgerBtn.classList.remove('active');
                navLinks.classList.remove('show');
            }
        });
    });
    </script>
</body>
</html>