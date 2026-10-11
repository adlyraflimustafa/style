<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Kategori · SECOND STORY Curated Thriftwear</title>
<meta name="description" content="Jelajahi kategori pakaian thriftwear, vintage finds, dan preloved pilihan dari SECOND STORY.">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='8' fill='%230f172a'/%3E%3Ctext x='16' y='23' font-family='sans-serif' font-size='20' font-weight='700' fill='%23ffffff' text-anchor='middle'%3ES%3C/text%3E%3C/svg%3E">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Syne:wght@700;800&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>

<style>
:root {
  --bg-light: #f8fafc;
  --glass-bg: rgba(255, 255, 255, 0.65);
  --glass-bg-hover: rgba(255, 255, 255, 0.85);
  --glass-card: rgba(255, 255, 255, 0.6);
  --glass-border: rgba(255, 255, 255, 0.85);
  --glass-border-dark: rgba(15, 23, 42, 0.08);
  --glass-border-hover: rgba(15, 23, 42, 0.2);
  --glass-glow: rgba(255, 255, 255, 0.9);
  --glass-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.07), inset 0 1px 2px 0 rgba(255, 255, 255, 0.95);
  --accent-slate: #0f172a;
  --accent-blue: #2563eb;
  --text-main: #0f172a;
  --text-muted: #64748b;
  --blur-amount: blur(20px) saturate(180%);
  --nav: 86px;
}

* { margin: 0; padding: 0; box-sizing: border-box; }
html { overflow-x: clip; scroll-behavior: smooth; scroll-padding-top: 110px; }
section[id], header[id] { scroll-margin-top: 110px; }
body {
  background: var(--bg-light);
  color: var(--text-main);
  overflow-x: clip;
  font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
  -webkit-font-smoothing: antialiased;
  position: relative;
}

/* ── Ambient Glow Background Orbs ────────────────────────────── */
body::before, body::after {
  content: ''; position: fixed; border-radius: 50%; pointer-events: none; z-index: -1;
}
body::before {
  width: 650px; height: 650px; top: -100px; left: -150px;
  background: radial-gradient(circle, rgba(147, 197, 253, 0.35) 0%, rgba(221, 214, 254, 0.25) 50%, transparent 70%);
  filter: blur(90px); animation: floatOrb 18s ease-in-out infinite alternate;
}
body::after {
  width: 700px; height: 700px; bottom: 10%; right: -200px;
  background: radial-gradient(circle, rgba(251, 207, 232, 0.3) 0%, rgba(199, 210, 254, 0.25) 50%, transparent 70%);
  filter: blur(100px); animation: floatOrb 22s ease-in-out infinite alternate-reverse;
}

@keyframes floatOrb {
  0% { transform: translate(0, 0) scale(1); }
  50% { transform: translate(60px, 80px) scale(1.08); }
  100% { transform: translate(-40px, 120px) scale(0.95); }
}

img { display: block; max-width: 100%; }
a { color: inherit; text-decoration: none; }
.wrap { max-width: 1440px; margin: 0 auto; padding: 0 clamp(20px, 4vw, 56px); }

.font-syne { font-family: 'Syne', sans-serif; }
.glass-panel {
  background: var(--glass-card);
  backdrop-filter: var(--blur-amount);
  -webkit-backdrop-filter: var(--blur-amount);
  border: 1px solid var(--glass-border);
  box-shadow: var(--glass-shadow);
  border-radius: 24px;
}

.lbl {
  font-size: 11px; font-weight: 700; letter-spacing: 0.26em; text-transform: uppercase;
  color: var(--accent-blue);
}

/* ── Announcement Bar ────────────────────────────────────────────── */
.ann {
  background: rgba(255, 255, 255, 0.7);
  backdrop-filter: blur(12px);
  border-bottom: 1px solid var(--glass-border-dark);
  color: var(--text-main); overflow: hidden;
}
.ann .row { display: flex; width: max-content; }
.ann .tk {
  display: flex; align-items: center; flex: 0 0 auto; gap: 48px; padding-right: 48px;
  animation: tick 28s linear infinite; font-size: 11px; font-weight: 700;
  letter-spacing: 0.2em; text-transform: uppercase; padding-top: 10px; padding-bottom: 10px;
}
@keyframes tick { from { transform: translateX(0); } to { transform: translateX(-100%); } }
.ann:hover .tk { animation-play-state: paused; }
.ann .tk i { font-style: normal; color: var(--accent-blue); }

/* ── Navigation (Tata Letak 3-Kolom Floating Glass Asli) ───────────────────────── */
nav {
  position: sticky; top: 12px; z-index: 60;
  margin: 0 auto; max-width: calc(100% - 32px);
  background: rgba(255, 255, 255, 0.65);
  backdrop-filter: var(--blur-amount);
  -webkit-backdrop-filter: var(--blur-amount);
  border: 1px solid var(--glass-border);
  border-radius: 30px;
  box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05), inset 0 1px 2px rgba(255, 255, 255, 0.9);
}
nav .bar {
  display: grid; grid-template-columns: minmax(0, 1fr) auto minmax(0, 1fr); align-items: center; gap: 24px;
  min-height: calc(var(--nav) - 12px); padding: 0 30px;
}
nav ul { display: flex; align-items: center; gap: clamp(12px, 1.35vw, 22px); list-style: none; min-width: 0; padding: 0; margin: 0; }
nav .mk { text-decoration: none; }
nav .search-link { color: var(--text-muted); transition: color .3s; }
nav .search-link:hover { color: var(--text-main); }
nav ul a {
  display: inline-block; white-space: nowrap; font-size: 10px; font-weight: 700; letter-spacing: 0.11em; text-transform: uppercase;
  position: relative; padding: 9px 0; color: var(--text-muted); transition: color 0.3s;
}
nav ul a:hover, nav ul a.active { color: var(--text-main); }
nav ul a::after {
  content: ''; position: absolute; left: 0; right: 0; bottom: 0; height: 2px;
  background: var(--text-main);
  transform: scaleX(0); transform-origin: right; transition: transform .4s cubic-bezier(.6,0,.2,1);
  border-radius: 2px;
}
nav ul a:hover::after, nav ul a.active::after { transform: scaleX(1); transform-origin: left; }
nav .mk {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(18px, 1.6vw, 24px);
  letter-spacing: 0.10em; text-align: center; text-transform: uppercase; white-space: nowrap;
  color: var(--text-main);
}
nav .util {
  display: flex; gap: 16px; justify-content: flex-end; align-items: center;
  font-size: 10px; font-weight: 700; letter-spacing: 0.10em; text-transform: uppercase; white-space: nowrap;
}
nav .util a { color: var(--text-muted); cursor: pointer; transition: color 0.3s; }
nav .util a:hover { color: var(--text-main); }
nav .bag-btn {
  display: inline-flex; align-items: center; justify-content: center;
  background: rgba(15, 23, 42, 0.05);
  border: 1px solid var(--glass-border-dark); backdrop-filter: blur(8px);
  padding: 10px 17px; border-radius: 30px; color: var(--text-main) !important; transition: all 0.3s;
}
nav .bag-btn:hover {
  background: var(--text-main); color: #fff !important;
  box-shadow: 0 6px 20px rgba(15, 23, 42, 0.15); transform: translateY(-1px);
}
@media (max-width: 1100px) {
  nav .bar { gap: 14px; padding: 0 20px; }
  nav ul { gap: 10px; }
  nav ul a { font-size: 8px; letter-spacing: .06em; }
  nav .util { gap: 10px; font-size: 9px; }
}
@media (max-width: 760px) {
  nav { top: 8px; max-width: calc(100% - 20px); border-radius: 22px; }
  nav .bar { display: grid; grid-template-columns: 1fr auto; gap: 0 12px; min-height: auto; padding: 13px 16px 10px; }
  nav .mk { grid-column: 1; grid-row: 1; font-size: clamp(16px, 4vw, 21px); letter-spacing: .07em; text-align: left; }
  nav .util { grid-column: 2; grid-row: 1; margin-left: auto; }
  nav .search-link { display: none; }
  nav .bag-btn { padding: 9px 13px; font-size: 9px; letter-spacing: .06em; }
  nav ul { grid-column: 1 / -1; grid-row: 2; display: flex; overflow-x: auto; gap: 20px; padding-top: 9px; margin-top: 9px; border-top: 1px solid var(--glass-border); scrollbar-width: none; }
  nav ul::-webkit-scrollbar { display: none; }
  nav ul li { flex: 0 0 auto; }
  nav ul a { font-size: 9px; padding: 5px 0; }
}
@media (max-width: 360px) {
  nav .mk { font-size: 14px; }
  nav .bar { padding: 0 12px; }
  nav .bag-btn { padding: 8px 10px; }
}

/* ── CATEGORY HEADER HERO ───────────────────────────────────────── */
.cat-hero {
  margin-top: 24px;
  padding: clamp(36px, 6vh, 60px) clamp(24px, 4vw, 60px);
  text-align: center;
}
.cat-hero h1 {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(36px, 5vw, 68px); line-height: 1; margin-top: 10px; margin-bottom: 16px;
}
.cat-hero p {
  color: var(--text-muted); font-size: 15px; max-width: 52ch; margin: 0 auto; line-height: 1.6;
}

/* ── CATEGORY GRID SHOWCASE ─────────────────────────────────────── */
#cat-list { padding: clamp(40px, 6vh, 80px) 0; }
.cat-full-grid {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(20px, 3vw, 32px);
}
.cat-box {
  display: flex; flex-direction: column; overflow: hidden;
  border-radius: 24px; transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
}
.cat-box:hover {
  border-color: var(--glass-border-dark); transform: translateY(-8px);
  box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
  background: rgba(255, 255, 255, 0.85);
}
.cat-box .img-wrapper {
  position: relative; aspect-ratio: 4/3; overflow: hidden; background: rgba(241, 245, 249, 0.8);
}
.cat-box .img-wrapper img {
  width: 100%; height: 100%; object-fit: cover; transition: transform 0.9s cubic-bezier(.2,.8,.3,1);
}
.cat-box:hover .img-wrapper img { transform: scale(1.1); }
.cat-box .count-tag {
  position: absolute; top: 14px; right: 14px; z-index: 3;
  background: rgba(255, 255, 255, 0.85); border: 1px solid var(--glass-border);
  color: var(--text-main); font-size: 9px; font-weight: 800; letter-spacing: 0.18em;
  text-transform: uppercase; padding: 6px 14px; border-radius: 30px; backdrop-filter: blur(10px);
}
.cat-box .info {
  padding: 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between; gap: 16px;
}
.cat-box h3 {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: 22px; color: var(--text-main); margin-bottom: 6px;
}
.cat-box p { font-size: 13px; color: var(--text-muted); line-height: 1.5; }
.cat-box .btn-explore {
  font-size: 11px; font-weight: 800; letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--accent-blue); display: inline-flex; align-items: center; gap: 8px; margin-top: auto;
}
.cat-box .btn-explore i { font-style: normal; transition: transform .4s; }
.cat-box:hover .btn-explore i { transform: translateX(6px); }

@media(max-width: 980px){ .cat-full-grid { grid-template-columns: repeat(2, 1fr); } }
@media(max-width: 640px){ .cat-full-grid { grid-template-columns: 1fr; } }

/* ── FILTER & QUICK PRODUCTS SECTION ───────────────────────────── */
#filter-section { padding: clamp(40px, 6vh, 80px) 0 60px; }
.filter-tabs {
  display: flex; gap: 10px; overflow-x: auto; padding-bottom: 16px; margin-bottom: 36px;
  scrollbar-width: none;
}
.filter-tabs::-webkit-scrollbar { display: none; }
.tab-btn {
  padding: 12px 24px; border-radius: 30px; font-size: 11px; font-weight: 800;
  letter-spacing: 0.15em; text-transform: uppercase; border: 1px solid var(--glass-border-dark);
  background: rgba(255, 255, 255, 0.6); color: var(--text-muted); cursor: pointer;
  white-space: nowrap; transition: all 0.3s;
}
.tab-btn:hover, .tab-btn.active {
  background: var(--text-main); color: #fff; border-color: var(--text-main);
  box-shadow: 0 6px 20px rgba(15, 23, 42, 0.12);
}

.shop-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: clamp(16px, 2.2vw, 32px); }

.card {
  position: relative; border-radius: 20px; overflow: hidden; transition: all 0.4s;
}
.card:hover {
  border-color: var(--glass-border-dark); transform: translateY(-8px);
  box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
}
.card .ph { position: relative; aspect-ratio: 3/4; overflow: hidden; background: rgba(241, 245, 249, 0.8); }
.card .ph img {
  width: 100%; height: 100%; object-fit: cover; transition: transform 0.9s cubic-bezier(.2,.8,.3,1);
}
.card:hover .ph img { transform: scale(1.08); }

.card .badge {
  position: absolute; top: 14px; left: 14px; z-index: 3;
  background: rgba(255, 255, 255, 0.85); border: 1px solid var(--glass-border);
  color: var(--text-main); font-size: 9px; font-weight: 800; letter-spacing: 0.2em;
  text-transform: uppercase; padding: 6px 12px; border-radius: 30px; backdrop-filter: blur(10px);
}

.card .fav {
  position: absolute; top: 14px; right: 14px; width: 38px; height: 38px; border-radius: 50%;
  background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);
  display: grid; place-items: center; border: 1px solid var(--glass-border);
  cursor: pointer; z-index: 3; transition: all 0.3s;
}
.card .fav svg { width: 16px; height: 16px; fill: none; stroke: var(--text-main); stroke-width: 2; }
.card .fav[aria-pressed="true"] svg { fill: var(--text-main); stroke: var(--text-main); }
.card .fav:hover { transform: scale(1.15); background: #fff; }

.card .add {
  position: absolute; left: 14px; right: 14px; bottom: 14px; z-index: 3;
  background: var(--text-main); color: #fff; border: none; cursor: pointer;
  padding: 14px; border-radius: 12px; font-size: 11px; font-weight: 800;
  letter-spacing: 0.2em; text-transform: uppercase; opacity: 0; transform: translateY(16px);
  transition: all 0.4s cubic-bezier(.2,.8,.3,1); box-shadow: 0 8px 20px rgba(15, 23, 42, 0.2);
}
.card:hover .add, .card:focus-within .add { opacity: 1; transform: translateY(0); }

.card .meta { padding: 20px; display: flex; justify-content: space-between; gap: 12px; align-items: flex-start; }
.card .nm { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 16px; color: var(--text-main); }
.card .ct { font-size: 11px; color: var(--text-muted); letter-spacing: 0.1em; text-transform: uppercase; margin-top: 4px; }
.card .pr { font-size: 16px; font-weight: 800; color: var(--text-main); }
@media(max-width:1000px){ .shop-grid { grid-template-columns: repeat(2, 1fr); } }
@media(max-width:540px){ .shop-grid { grid-template-columns: 1fr; } }

/* BUTTONS GLASS */
.btn-glass-primary {
  display: inline-flex; align-items: center; justify-content: center;
  background: var(--text-main); color: #fff; font-weight: 700;
  padding: 18px 42px; border-radius: 40px; font-size: 12px; letter-spacing: 0.22em;
  text-transform: uppercase; box-shadow: 0 10px 25px rgba(15, 23, 42, 0.18);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.btn-glass-primary:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 16px 32px rgba(15, 23, 42, 0.25);
  background: #1e293b;
}

/* ── FOOTER ─────────────────────────────────────────────── */
footer { padding: clamp(50px, 8vh, 80px) 0 36px; margin-top: 60px; }
footer .cols { display: grid; grid-template-columns: 1.6fr 1fr 1fr 1fr; gap: clamp(24px, 4vw, 52px); margin-bottom: 50px; }
footer h4 { font-size: 11px; font-weight: 800; letter-spacing: 0.24em; text-transform: uppercase; color: var(--text-main); margin-bottom: 20px; }
footer a { display: block; padding: 6px 0; font-size: 14px; color: var(--text-muted); transition: color 0.3s; }
footer a:hover { color: var(--text-main); }
footer .mk { font-family: 'Syne', sans-serif; font-weight: 800; font-size: 32px; letter-spacing: 0.2em; margin-bottom: 16px; color: var(--text-main); }
footer address { font-style: normal; font-size: 13px; line-height: 1.9; color: var(--text-muted); }
footer .legal { border-top: 1px solid var(--glass-border-dark); padding-top: 28px; display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap; font-size: 12px; color: var(--text-muted); }
@media(max-width:820px){ footer .cols { grid-template-columns: 1fr 1fr; } }

/* Reveal Animations */
.rv { opacity: 0; transform: translateY(30px); transition: opacity .9s cubic-bezier(.16,1,.3,1), transform .9s cubic-bezier(.16,1,.3,1); }
.rv.in { opacity: 1; transform: none; }
</style>
</head>
<body>

<!-- Announcement Bar -->
<div class="ann" aria-hidden="true">
  <div class="row">
    <div class="tk"><span>Gratis Ongkir untuk Pesanan Tertentu</span><i>◆</i><span>Curated Thriftwear Drop</span><i>◆</i><span>Preloved Pilihan, Harga Bersahabat</span><i>◆</i><span>New Finds Setiap Minggu</span><i>◆</i></div>
    <div class="tk"><span>Gratis Ongkir untuk Pesanan Tertentu</span><i>◆</i><span>Curated Thriftwear Drop</span><i>◆</i><span>Preloved Pilihan, Harga Bersahabat</span><i>◆</i><span>New Finds Setiap Minggu</span><i>◆</i></div>
  </div>
</div>

<!-- Floating White Glass Navigation (Struktur Asli CSS) -->
<nav>
  <div class="bar">
    <ul class="nav-links" aria-label="Navigasi utama">
      <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
      <li><a href="{{ url('/kategori') }}" class="{{ request()->is('kategori') ? 'active' : '' }}">Kategori</a></li>
      <li><a href="{{ url('/koleksi') }}" class="{{ request()->is('koleksi') ? 'active' : '' }}">Koleksi</a></li>
      <li><a href="{{ url('/style-journal') }}" class="{{ request()->is('style-journal') ? 'active' : '' }}">Style Journal</a></li>
      <li><a href="{{ url('/tentang') }}" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
      <li><a href="{{ url('/kontak') }}" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak</a></li>
    </ul>

    <a class="mk" href="{{ url('/#hero') }}" aria-label="SECOND STORY — Beranda">SECOND STORY</a>

    <div class="util">
      <a href="{{ url('/#shop') }}" class="search-link">Cari Item</a>
      <a href="{{ url('/bag') }}" class="bag-btn">Bag (<span id="bagn">0</span>)</a>
    </div>
  </div>
</nav>

<!-- 1 · CATEGORY HERO BANNER -->
<header id="cat-hero" class="wrap">
  <div class="glass-panel cat-hero rv">
    <div class="lbl">Curated Collections</div>
    <h1>Jelajahi <span style="color:var(--accent-blue)">Kategori</span></h1>
    <p>Setiap item thrift dikurasi secara individual berdasarkan kualitas bahan, keunikan vintage, dan karakter gaya yang timeless.</p>
  </div>
</header>

<!-- 2 · MAIN CATEGORY SHOWCASE -->
<section id="cat-list" class="wrap">
  <div class="cat-full-grid">

    <!-- Category 1: Jackets -->
    <a href="#items-view" onclick="filterCategory('jackets')" class="glass-panel cat-box rv">
      <div class="img-wrapper">
        <span class="count-tag">18 Items</span>
        <img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/cat-men.webp" alt="Jackets & Outerwear" loading="lazy">
      </div>
      <div class="info">
        <div>
          <h3>Jackets & Outer</h3>
          <p>Vintage denim, bomber jacket, workwear jacket, dan varsity klasik pilihan.</p>
        </div>
        <span class="btn-explore">Lihat Koleksi <i>→</i></span>
      </div>
    </a>

    <!-- Category 2: Sweaters -->
    <a href="#items-view" onclick="filterCategory('sweaters')" class="glass-panel cat-box rv">
      <div class="img-wrapper">
        <span class="count-tag">24 Items</span>
        <img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/cat-women.webp" alt="Sweaters & Knitwear" loading="lazy">
      </div>
      <div class="info">
        <div>
          <h3>Sweaters & Knits</h3>
          <p>Oversized hoodie, crewneck vintage, dan knitwear preloved yang nyaman dipadukan.</p>
        </div>
        <span class="btn-explore">Lihat Koleksi <i>→</i></span>
      </div>
    </a>

    <!-- Category 3: Vintage Picks -->
    <a href="#items-view" onclick="filterCategory('vintage')" class="glass-panel cat-box rv">
      <div class="img-wrapper">
        <span class="count-tag">12 Items</span>
        <img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/cat-tailoring.webp" alt="Vintage Picks" loading="lazy">
      </div>
      <div class="info">
        <div>
          <h3>Vintage Picks</h3>
          <p>Koleksi langka era 80s-90s dengan detail otentik dan nilai historis unik.</p>
        </div>
        <span class="btn-explore">Lihat Koleksi <i>→</i></span>
      </div>
    </a>

    <!-- Category 4: Shirts & Tees -->
    <a href="#items-view" onclick="filterCategory('shirts')" class="glass-panel cat-box rv">
      <div class="img-wrapper">
        <span class="count-tag">30 Items</span>
        <img src="https://images.unsplash.com/photo-1598033129183-c4f50c736f10?auto=format&fit=crop&w=900&q=85" alt="Shirts & Tees" loading="lazy">
      </div>
      <div class="info">
        <div>
          <h3>Shirts & Tees</h3>
          <p>Graphic t-shirts, kemeja flanel vintage, dan kemeja patterned santai.</p>
        </div>
        <span class="btn-explore">Lihat Koleksi <i>→</i></span>
      </div>
    </a>

    <!-- Category 5: Denim & Trousers -->
    <a href="#items-view" onclick="filterCategory('pants')" class="glass-panel cat-box rv">
      <div class="img-wrapper">
        <span class="count-tag">15 Items</span>
        <img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246?auto=format&fit=crop&w=900&q=85" alt="Denim & Trousers" loading="lazy">
      </div>
      <div class="info">
        <div>
          <h3>Denim & Trousers</h3>
          <p>Celana denim vintage, cargo pants, dan corduroy trousers pilihan.</p>
        </div>
        <span class="btn-explore">Lihat Koleksi <i>→</i></span>
      </div>
    </a>

    <!-- Category 6: Accessories -->
    <a href="#items-view" onclick="filterCategory('accessories')" class="glass-panel cat-box rv">
      <div class="img-wrapper">
        <span class="count-tag">10 Items</span>
        <img src="https://images.unsplash.com/photo-1523206489230-c012c64b2b48?auto=format&fit=crop&w=900&q=85" alt="Accessories" loading="lazy">
      </div>
      <div class="info">
        <div>
          <h3>Accessories</h3>
          <p>Topi vintage, tas preloved kulit, dan aksesoris fashion pelengkap outfit.</p>
        </div>
        <span class="btn-explore">Lihat Koleksi <i>→</i></span>
      </div>
    </a>

  </div>
</section>

<!-- 3 · INTERACTIVE FILTER & ITEMS PREVIEW -->
<section id="items-view" class="wrap">
  <div id="filter-section">
    <div style="margin-bottom:24px;">
      <div class="lbl rv" style="margin-bottom:8px;">Interactive Filter</div>
      <h2 class="rv" style="font-family:'Syne',sans-serif; font-weight:800; font-size:clamp(28px, 4vw, 42px);">
        Item <span style="color:var(--accent-blue)">Berdasarkan Kategori</span>
      </h2>
    </div>

    <!-- Filter Tabs -->
    <div class="filter-tabs rv">
      <button class="tab-btn active" data-cat="all" onclick="filterCategory('all')">Semua Item</button>
      <button class="tab-btn" data-cat="jackets" onclick="filterCategory('jackets')">Jackets</button>
      <button class="tab-btn" data-cat="sweaters" onclick="filterCategory('sweaters')">Sweaters</button>
      <button class="tab-btn" data-cat="shirts" onclick="filterCategory('shirts')">Shirts & Tees</button>
      <button class="tab-btn" data-cat="pants" onclick="filterCategory('pants')">Denim & Pants</button>
      <button class="tab-btn" data-cat="vintage" onclick="filterCategory('vintage')">Vintage Picks</button>
    </div>

    <!-- Product Grid -->
    <div class="shop-grid" id="category-grid"></div>
  </div>
</section>

<!-- FOOTER -->
<footer class="wrap">
  <div class="glass-panel" style="padding: clamp(30px, 5vh, 50px);">
    <div class="cols">
      <div>
        <div class="mk">SECOND STORY</div>
        <address>
          Thrift Finds · Curated with Care<br>Indonesia<br><br>
          hello@secondstory.store
        </address>
      </div>
      <div>
        <h4>Belanja</h4>
        <a href="{{ url('/koleksi') }}">Jackets</a>
        <a href="{{ url('/koleksi') }}">Sweaters</a>
        <a href="{{ url('/koleksi') }}">Vintage Picks</a>
        <a href="{{ url('/koleksi') }}">Private Thrift Picks</a>
      </div>
      <div>
        <h4>Bantuan</h4>
        <a href="#">Panduan Ukuran</a>
        <a href="#">Pengiriman</a>
        <a href="#">Kebijakan Pembelian</a>
        <a href="#">Perawatan Pakaian</a>
      </div>
      <div>
        <h4>Tentang Kami</h4>
        <a href="#">Kurasi Item</a>
        <a href="#">Lokasi</a>
        <a href="#">Style Journal</a>
        <a href="#">Hubungi Kami</a>
      </div>
    </div>
    <div class="legal">
      <span>© 2026 SECOND STORY · THRIFTWEAR CURATED</span>
      <span>PRELOVED · VINTAGE · EVERYDAY STYLE</span>
    </div>
  </div>
</footer>

<script>
/* ── All Items Data ──────────────────────────────────────────────── */
const ALL_PRODUCTS = [
  {id:1, cat:'jackets', nm:'Vintage Denim Jacket', ct:'Jaket · Size M', pr:129000, badge:'VINTAGE FIND', img:'https://images.unsplash.com/photo-1551537482-f2075a1d41f2?auto=format&fit=crop&w=900&q=85'},
  {id:2, cat:'shirts', nm:'Graphic Oversized Tee', ct:'Kaos · Size L', pr:65000, badge:'PRELOVED PICK', img:'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=900&q=85'},
  {id:3, cat:'sweaters', nm:'Knit Sweater Classic', ct:'Sweater · Size M', pr:89000, badge:'ONE OF A KIND', img:'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?auto=format&fit=crop&w=900&q=85'},
  {id:4, cat:'shirts', nm:'Retro Button Shirt', ct:'Kemeja · Size L', pr:75000, badge:'GOOD FIND', img:'https://images.unsplash.com/photo-1598033129183-c4f50c736f10?auto=format&fit=crop&w=900&q=85'},
  {id:5, cat:'pants', nm:'Classic Selvedge Denim', ct:'Celana · Size 31', pr:145000, badge:'PRELOVED PICK', img:'https://images.unsplash.com/photo-1541099649105-f69ad21f3246?auto=format&fit=crop&w=900&q=85'},
  {id:6, cat:'vintage', nm:'80s Leather Bomber', ct:'Jaket · Size L', pr:210000, badge:'VINTAGE FIND', img:'https://images.unsplash.com/photo-1520975954732-35dd22299614?auto=format&fit=crop&w=900&q=85'},
  {id:7, cat:'sweaters', nm:'Heavyweight College Hoodie', ct:'Sweater · Size XL', pr:98000, badge:'GOOD FIND', img:'https://images.unsplash.com/photo-1556905055-8f358a7a47b2?auto=format&fit=crop&w=900&q=85'},
  {id:8, cat:'jackets', nm:'Utility Cargo Jacket', ct:'Outer · Size M', pr:135000, badge:'ONE OF A KIND', img:'https://images.unsplash.com/photo-1548883354-7622d03aca27?auto=format&fit=crop&w=900&q=85'}
];

const gridEl = document.getElementById('category-grid');
const heartIcon = '<svg viewBox="0 0 24 24"><path d="M12 20.5 3.8 12.6a5 5 0 0 1 7.1-7l1.1 1.1 1.1-1.1a5 5 0 0 1 7.1 7Z"/></svg>';

function renderProducts(items) {
  if (!items.length) {
    gridEl.innerHTML = `<div class="glass-panel" style="grid-column: 1/-1; padding: 40px; text-align: center; color: var(--text-muted); font-size:14px;">Belum ada item untuk kategori ini.</div>`;
    return;
  }

  gridEl.innerHTML = items.map((p, i) => `
    <article class="card glass-panel rv in">
      <div class="ph">
        <span class="badge">${p.badge}</span>
        <img src="${p.img}" alt="${p.nm}" loading="lazy">
        <button class="fav" aria-pressed="false" aria-label="Save ${p.nm}">${heartIcon}</button>
        <button class="add" data-i="${p.id}">Add to Bag</button>
      </div>
      <div class="meta">
        <div>
          <div class="nm">${p.nm}</div>
          <div class="ct">${p.ct}</div>
        </div>
        <div class="pr">Rp ${p.pr.toLocaleString('id-ID')}</div>
      </div>
    </article>`).join('');
}

function filterCategory(category) {
  // Update Tab Active
  document.querySelectorAll('.tab-btn').forEach(btn => {
    if (btn.dataset.cat === category) {
      btn.classList.add('active');
    } else {
      btn.classList.remove('active');
    }
  });

  // Filter Items
  if (category === 'all') {
    renderProducts(ALL_PRODUCTS);
  } else {
    const filtered = ALL_PRODUCTS.filter(item => item.cat === category);
    renderProducts(filtered);
  }
}

// Initial Render All Products
renderProducts(ALL_PRODUCTS);

/* ── Cart Bag Interaction ───────────────────────────────────────── */
let bag = 0;
gridEl.addEventListener('click', e => {
  const fav = e.target.closest('.fav');
  if(fav){
    fav.setAttribute('aria-pressed', fav.getAttribute('aria-pressed') === 'true' ? 'false' : 'true');
    return;
  }
  const add = e.target.closest('.add');
  if(add){
    bag++;
    const bagn = document.getElementById('bagn');
    if(bagn) bagn.textContent = bag;
    add.textContent = 'Added to Bag';
    setTimeout(() => { add.textContent = 'Add to Bag'; }, 1500);
  }
});

/* ── Scroll Reveal Intersection Observer ──────────────────────── */
const pending = new Set(document.querySelectorAll('.rv'));
const io = new IntersectionObserver(es => {
  es.forEach(e => { if(e.isIntersecting || e.boundingClientRect.top < 0) show(e.target); });
}, {threshold:.1, rootMargin:'0px 0px -50px 0px'});

function show(el){ el.classList.add('in'); pending.delete(el); io.unobserve(el); }
[...pending].forEach((el, i) => { el.style.transitionDelay = (i % 4) * 80 + 'ms'; io.observe(el); });
</script>
</body>
</html>
