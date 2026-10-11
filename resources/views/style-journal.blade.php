<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Style Journal · SECOND STORY Curated Thriftwear</title>
<meta name="description" content="Inspirasi padu padan, cerita fashion preloved, dan panduan perawatan pakaian vintage dari SECOND STORY.">
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

/* ── JOURNAL HERO ────────────────────────────────────────────────── */
.journal-hero {
  margin-top: 24px;
  padding: clamp(36px, 6vh, 60px) clamp(24px, 4vw, 60px);
  text-align: center;
}
.journal-hero h1 {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(36px, 5vw, 68px); line-height: 1; margin-top: 10px; margin-bottom: 16px;
}
.journal-hero p {
  color: var(--text-muted); font-size: 15px; max-width: 54ch; margin: 0 auto; line-height: 1.6;
}

/* ── FEATURED EDITORIAL ARTICLE ─────────────────────────────────── */
#featured-story { padding: clamp(20px, 3vh, 40px) 0; }
.featured-card {
  display: grid; grid-template-columns: 1.1fr 0.9fr; gap: clamp(24px, 4vw, 56px);
  align-items: center; overflow: hidden; padding: clamp(24px, 4vw, 40px);
}
.featured-img {
  position: relative; aspect-ratio: 16/10; overflow: hidden; border-radius: 20px;
  border: 1px solid var(--glass-border);
}
.featured-img img {
  width: 100%; height: 100%; object-fit: cover; transition: transform 1s cubic-bezier(.2,.8,.3,1);
}
.featured-card:hover .featured-img img { transform: scale(1.06); }
.featured-content { display: flex; flex-direction: column; justify-content: center; }
.featured-meta {
  display: flex; gap: 16px; align-items: center; font-size: 11px; font-weight: 700;
  letter-spacing: 0.15em; text-transform: uppercase; color: var(--accent-blue); margin-bottom: 12px;
}
.featured-meta span { color: var(--text-muted); }
.featured-content h2 {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(28px, 3.5vw, 44px); line-height: 1.1; margin-bottom: 16px; color: var(--text-main);
}
.featured-content p {
  color: var(--text-muted); font-size: 14px; line-height: 1.7; margin-bottom: 24px;
}

@media(max-width: 880px) {
  .featured-card { grid-template-columns: 1fr; gap: 24px; }
}

/* ── JOURNAL CATEGORY TABS ───────────────────────────────────────── */
.journal-pills {
  display: flex; gap: 10px; overflow-x: auto; padding-bottom: 12px; margin: 40px 0 32px;
  scrollbar-width: none;
}
.journal-pills::-webkit-scrollbar { display: none; }
.pill-btn {
  padding: 11px 22px; border-radius: 30px; font-size: 11px; font-weight: 800;
  letter-spacing: 0.14em; text-transform: uppercase; border: 1px solid var(--glass-border-dark);
  background: rgba(255, 255, 255, 0.6); color: var(--text-muted); cursor: pointer;
  white-space: nowrap; transition: all 0.3s;
}
.pill-btn:hover, .pill-btn.active {
  background: var(--text-main); color: #fff; border-color: var(--text-main);
  box-shadow: 0 6px 18px rgba(15, 23, 42, 0.12);
}

/* ── JOURNAL ARTICLES GRID ───────────────────────────────────────── */
#journal-grid-section { padding-bottom: 80px; }
.articles-grid {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(20px, 2.5vw, 36px);
}
.article-card {
  display: flex; flex-direction: column; border-radius: 24px; overflow: hidden;
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.article-card:hover {
  border-color: var(--glass-border-dark); transform: translateY(-8px);
  box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12); background: rgba(255, 255, 255, 0.85);
}
.article-thumb {
  position: relative; aspect-ratio: 16/10; overflow: hidden; background: rgba(241, 245, 249, 0.8);
}
.article-thumb img {
  width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s cubic-bezier(.2,.8,.3,1);
}
.article-card:hover .article-thumb img { transform: scale(1.08); }
.article-body {
  padding: 24px; flex: 1; display: flex; flex-direction: column; justify-content: space-between; gap: 16px;
}
.article-tag {
  font-size: 10px; font-weight: 800; letter-spacing: 0.2em; text-transform: uppercase;
  color: var(--accent-blue); display: flex; justify-content: space-between; align-items: center;
}
.article-tag span { color: var(--text-muted); font-weight: 600; }
.article-body h3 {
  font-family: 'Syne', sans-serif; font-weight: 700; font-size: 20px; color: var(--text-main); line-height: 1.3;
}
.article-body p {
  font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-top: 6px;
}
.read-more {
  font-size: 11px; font-weight: 800; letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--accent-blue); display: inline-flex; align-items: center; gap: 8px; margin-top: auto;
}
.read-more i { font-style: normal; transition: transform .4s; }
.article-card:hover .read-more i { transform: translateX(6px); }

@media(max-width: 960px){ .articles-grid { grid-template-columns: repeat(2, 1fr); } }
@media(max-width: 600px){ .articles-grid { grid-template-columns: 1fr; } }

/* BUTTONS GLASS */
.btn-glass-primary {
  display: inline-flex; align-items: center; justify-content: center;
  background: var(--text-main); color: #fff; font-weight: 700;
  padding: 16px 36px; border-radius: 40px; font-size: 11px; letter-spacing: 0.2em;
  text-transform: uppercase; box-shadow: 0 10px 25px rgba(15, 23, 42, 0.18);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); border: none; cursor: pointer;
}
.btn-glass-primary:hover {
  transform: translateY(-3px) scale(1.02); background: #1e293b;
  box-shadow: 0 16px 32px rgba(15, 23, 42, 0.25);
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

<!-- 1 · JOURNAL HERO BANNER -->
<header id="journal-hero" class="wrap">
  <div class="glass-panel journal-hero rv">
    <div class="lbl">Editorial & Lookbook</div>
    <h1>Style <span style="color:var(--accent-blue)">Journal</span></h1>
    <p>Inspirasi padu padan, panduan perawatan pakaian vintage, serta cerita di balik keunikan busana preloved kurasi SECOND STORY.</p>
  </div>
</header>

<!-- 2 · FEATURED STORY -->
<section id="featured-story" class="wrap">
  <article class="glass-panel featured-card rv">
    <div class="featured-img">
      <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=1200&q=85" alt="Art of Layering Thriftwear" loading="lazy">
    </div>
    <div class="featured-content">
      <div class="featured-meta">
        EDITORIAL <span>· 5 MIN READ</span>
      </div>
      <h2>Art of Layering: Memadukan Jaket Vintage & Knitwear</h2>
      <p>Teknik layering bukan sekadar menumpuk pakaian, tapi menciptakan proporsi warna dan tekstur yang seimbang. Simak cara kami memadukan jacket denim 90-an dengan knit sweater bergaya street-casual.</p>
      <div>
        <a href="#" class="btn-glass-primary">Baca Artikel</a>
      </div>
    </div>
  </article>
</section>

<!-- 3 · ARTICLES & LOOKBOOKS SHOWCASE -->
<section id="journal-grid-section" class="wrap">

  <!-- Category Filter Pills -->
  <div class="journal-pills rv">
    <button class="pill-btn active" data-filter="all" onclick="filterArticles('all')">Semua Artikel</button>
    <button class="pill-btn" data-filter="style" onclick="filterArticles('style')">Style Guide</button>
    <button class="pill-btn" data-filter="history" onclick="filterArticles('history')">Vintage History</button>
    <button class="pill-btn" data-filter="care" onclick="filterArticles('care')">Care Guide</button>
  </div>

  <!-- Articles Grid -->
  <div class="articles-grid" id="articles-container"></div>
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
        <a href="{{ url('/style-journal') }}">Style Journal</a>
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
/* ── Articles Data ───────────────────────────────────────────────── */
const ARTICLES = [
  {
    id: 1,
    cat: 'style',
    tag: 'STYLE GUIDE',
    read: '4 MIN READ',
    title: 'Tips Memilih Oversized Tee Agar Tetap Proporsional',
    desc: 'Oversized tidak berarti kebesaran tanpa arah. Ketahui panduan bahu dan panjang kaos agar tampilanmu tetap berstruktur.',
    img: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=900&q=85'
  },
  {
    id: 2,
    cat: 'history',
    tag: 'VINTAGE HISTORY',
    read: '6 MIN READ',
    title: 'Evolusi Varsity Jacket dari Kampus Amerika ke Streetwear',
    desc: 'Bagaimana jaket tim olahraga universitas era 80-an bertransformasi menjadi salah satu fashion item paling ikonik abad ini.',
    img: 'https://images.unsplash.com/photo-1551537482-f2075a1d41f2?auto=format&fit=crop&w=900&q=85'
  },
  {
    id: 3,
    cat: 'care',
    tag: 'CARE GUIDE',
    read: '3 MIN READ',
    title: 'Cara Merawat Knitwear Vintage Agar Tidak Melar',
    desc: 'Teknik mencuci, mengeringkan, dan menyimpan sweater rajut preloved favoritmu agar serat kainnya tahan berteksur halus lama.',
    img: 'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?auto=format&fit=crop&w=900&q=85'
  },
  {
    id: 4,
    cat: 'style',
    tag: 'LOOKBOOK',
    read: '5 MIN READ',
    title: 'Casual Weekend Fit: Paduan Denim & Corduroy',
    desc: 'Kombinasi tekstur korduroy dan bahan denim untuk outfit akhir pekan yang santai namun tetap berkarakter kuat.',
    img: 'https://images.unsplash.com/photo-1541099649105-f69ad21f3246?auto=format&fit=crop&w=900&q=85'
  },
  {
    id: 5,
    cat: 'care',
    tag: 'CARE GUIDE',
    read: '4 MIN READ',
    title: 'Panduan Memilih & Membersihkan Jaket Kulit Preloved',
    desc: 'Langkah sederhana untuk menjaga kelembapan kulit sintesis atau asli pada jaket vintage agar tidak mudah pecah.',
    img: 'https://images.unsplash.com/photo-1520975954732-35dd22299614?auto=format&fit=crop&w=900&q=85'
  },
  {
    id: 6,
    cat: 'history',
    tag: 'THRIFT CULTURE',
    read: '5 MIN READ',
    title: 'Mengapa Thriftwear Lebih Ramah Lingkungan & Timeless',
    desc: 'Memberikan kesempatan kedua bagi pakaian berkualitas sekaligus mengurangi jejak karbon fashion cepat impor.',
    img: 'https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?auto=format&fit=crop&w=900&q=85'
  }
];

const container = document.getElementById('articles-container');

function renderArticles(list) {
  if (!list.length) {
    container.innerHTML = `<div class="glass-panel" style="grid-column: 1/-1; padding: 40px; text-align: center; color: var(--text-muted);">Belum ada artikel di kategori ini.</div>`;
    return;
  }

  container.innerHTML = list.map(item => `
    <article class="article-card glass-panel rv in">
      <div class="article-thumb">
        <img src="${item.img}" alt="${item.title}" loading="lazy">
      </div>
      <div class="article-body">
        <div>
          <div class="article-tag">
            ${item.tag} <span>${item.read}</span>
          </div>
          <h3 style="margin-top:10px;">${item.title}</h3>
          <p>${item.desc}</p>
        </div>
        <a href="#" class="read-more">Baca Selengkapnya <i>→</i></a>
      </div>
    </article>
  `).join('');
}

function filterArticles(category) {
  document.querySelectorAll('.pill-btn').forEach(btn => {
    if (btn.dataset.filter === category) btn.classList.add('active');
    else btn.classList.remove('active');
  });

  if (category === 'all') {
    renderArticles(ARTICLES);
  } else {
    const filtered = ARTICLES.filter(a => a.cat === category);
    renderArticles(filtered);
  }
}

// Initial Render
renderArticles(ARTICLES);

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
