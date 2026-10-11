<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Tentang Kami · SECOND STORY Curated Thriftwear</title>
<meta name="description" content="Mengenal SECOND STORY — filosofi kurasi pakaian preloved, komitmen keberlanjutan, dan cerita di balik setiap item vintage.">
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

/* ── ABOUT HERO ───────────────────────────────────────────────────── */
.about-hero {
  margin-top: 24px;
  padding: clamp(36px, 6vh, 60px) clamp(24px, 4vw, 60px);
  text-align: center;
}
.about-hero h1 {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(36px, 5vw, 68px); line-height: 1; margin-top: 10px; margin-bottom: 16px;
}
.about-hero p {
  color: var(--text-muted); font-size: 15px; max-width: 54ch; margin: 0 auto; line-height: 1.6;
}

/* ── PHILOSOPHY SECTION ───────────────────────────────────────────── */
#philosophy { padding: clamp(40px, 6vh, 80px) 0; }
.grid-philosophy {
  display: grid; grid-template-columns: 1fr 1fr; gap: clamp(32px, 5vw, 64px); align-items: center;
  padding: clamp(32px, 5vw, 60px);
}
.philosophy-text h2 {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(32px, 4vw, 52px); line-height: 1.05; margin-bottom: 20px;
}
.philosophy-text p {
  color: var(--text-muted); font-size: 15px; line-height: 1.7; margin-bottom: 16px;
}
.philosophy-media {
  position: relative; aspect-ratio: 4/5; overflow: hidden; border-radius: 20px;
  border: 1px solid var(--glass-border);
}
.philosophy-media img {
  width: 100%; height: 100%; object-fit: cover;
}

@media(max-width: 860px){ .grid-philosophy { grid-template-columns: 1fr; } }

/* ── VALUES CARDS ─────────────────────────────────────────────────── */
#values { padding: clamp(20px, 4vh, 60px) 0; }
.values-grid {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(20px, 3vw, 32px);
}
.value-card {
  padding: clamp(28px, 4vw, 40px); border-radius: 24px; transition: transform 0.4s;
}
.value-card:hover { transform: translateY(-6px); }
.value-card .num {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: 36px;
  color: var(--accent-blue); margin-bottom: 14px; line-height: 1;
}
.value-card h3 {
  font-family: 'Syne', sans-serif; font-weight: 700; font-size: 20px;
  margin-bottom: 10px; color: var(--text-main);
}
.value-card p {
  font-size: 14px; color: var(--text-muted); line-height: 1.6;
}

@media(max-width: 860px){ .values-grid { grid-template-columns: 1fr; } }

/* ── METRICS & ATELIER COUNTER ────────────────────────────────────── */
#atelier { margin: 60px 0; }
#atelier .agrid { display: grid; grid-template-columns: 1fr 1fr; align-items: stretch; gap: 32px; }
#atelier .ashot { overflow: hidden; border-radius: 20px; border: 1px solid var(--glass-border); }
#atelier .ashot img { width: 100%; height: 100%; object-fit: cover; min-height: min(68vh, 580px); }
#atelier .acopy { padding: clamp(40px, 8vh, 80px) clamp(24px, 5vw, 60px); align-self: center; }
#atelier h2 { font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(34px, 5vw, 62px); line-height: 0.95; margin-bottom: 20px; }
#atelier p { color: var(--text-muted); max-width: 36ch; font-size: 15px; line-height: 1.6; }
#atelier .acount { margin-top: 36px; display: flex; gap: clamp(24px, 4vw, 56px); flex-wrap: wrap; border-top: 1px solid var(--glass-border-dark); padding-top: 28px; }
#atelier .acount b { display: block; font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(36px, 4vw, 52px); color: var(--text-main); line-height: 1; margin-bottom: 8px; }
#atelier .acount span { font-size: 10px; font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-muted); }
@media(max-width:820px){ #atelier .agrid { grid-template-columns: 1fr; } }

/* ── CURATION PROCESS ────────────────────────────────────────────── */
#process { padding: clamp(40px, 6vh, 80px) 0; }
.process-grid {
  display: grid; grid-template-columns: repeat(4, 1fr); gap: clamp(16px, 2vw, 24px); margin-top: 32px;
}
.process-step {
  padding: 24px; border-radius: 20px; border: 1px solid var(--glass-border);
}
.process-step .step-no {
  font-size: 11px; font-weight: 800; letter-spacing: 0.2em; color: var(--accent-blue); margin-bottom: 12px;
}
.process-step h4 {
  font-family: 'Syne', sans-serif; font-weight: 700; font-size: 16px; margin-bottom: 8px;
}
.process-step p {
  font-size: 13px; color: var(--text-muted); line-height: 1.5;
}

@media(max-width: 900px){ .process-grid { grid-template-columns: 1fr 1fr; } }
@media(max-width: 500px){ .process-grid { grid-template-columns: 1fr; } }

/* BUTTONS GLASS */
.btn-glass-primary {
  display: inline-flex; align-items: center; justify-content: center;
  background: var(--text-main); color: #fff; font-weight: 700;
  padding: 18px 42px; border-radius: 40px; font-size: 12px; letter-spacing: 0.22em;
  text-transform: uppercase; box-shadow: 0 10px 25px rgba(15, 23, 42, 0.18);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
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

<!-- 1 · ABOUT HERO -->
<header id="about-hero" class="wrap">
  <div class="glass-panel about-hero rv">
    <div class="lbl">Heritage & Purpose</div>
    <h1>Give Clothes A <span style="color:var(--accent-blue)">Second Story</span></h1>
    <p>Kami hadir untuk mendefinisikan ulang cara memandang busana secondhand—menghadirkan kurasi thriftwear pilihan yang unik, berkarakter, dan ramah lingkungan.</p>
  </div>
</header>

<!-- 2 · BRAND PHILOSOPHY -->
<section id="philosophy" class="wrap">
  <div class="glass-panel grid-philosophy rv">
    <div class="philosophy-text">
      <div class="lbl" style="margin-bottom:12px;">Filosofi Kami</div>
      <h2>Pakaian Bagus Pantas Dipakai Lebih Lama</h2>
      <p>SECOND STORY lahir dari keyakinan bahwa tren terbaik sering kali sudah ada di sekitar kita. Setiap potong pakaian preloved yang kami pilih memiliki kualitas jahitan, bahan, dan nilai historis yang sulit ditemukan pada produk buatan massal hari ini.</p>
      <p>Dengan mengagumi keunikan barang vintage, kamu tidak hanya mengekspresikan gaya yang autentik, tapi juga ikut mendukung siklus fashion yang lebih berkelanjutan.</p>
    </div>
    <div class="philosophy-media">
      <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1000&q=85" alt="Kurasi Pakaian Thrift Second Story" loading="lazy">
    </div>
  </div>
</section>

<!-- 3 · CORE VALUES -->
<section id="values" class="wrap">
  <div style="margin-bottom:28px;" class="rv">
    <div class="lbl">Prinsip Kurasi</div>
    <h2 style="font-family:'Syne',sans-serif; font-weight:800; font-size:clamp(28px,4vw,42px); margin-top:6px;">
      Nilai Utama <span style="color:var(--accent-blue)">SECOND STORY</span>
    </h2>
  </div>

  <div class="values-grid">
    <div class="glass-panel value-card rv">
      <div class="num">01</div>
      <h3>Handpicked Curation</h3>
      <p>Setiap item disortir langsung satu per satu. Kami hanya memilih pakaian dengan kondisi fisik yang baik dan desain yang timeless.</p>
    </div>

    <div class="glass-panel value-card rv">
      <div class="num">02</div>
      <h3>Transparansi Kondisi</h3>
      <p>Detail ukuran, bahan, serta kondisi sebenarnya disampaikan secara jujur agar kamu berbelanja dengan tenang dan pasti.</p>
    </div>

    <div class="glass-panel value-card rv">
      <div class="num">03</div>
      <h3>Sustainable Fashion</h3>
      <p>Memperpanjang usia pakai busana membantu mengurangi limbah tekstil dan jejak karbon konsumsi fashion.</p>
    </div>
  </div>
</section>

<!-- 4 · ATELIER & METRICS SECTION -->
<section id="atelier" class="wrap">
  <div class="agrid">
    <figure class="ashot rv"><img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/atelier.webp" alt="Proses Pembersihan dan Kurasi Item" loading="lazy"></figure>
    <div class="glass-panel acopy">
      <div class="lbl rv" style="margin-bottom:16px;">Atelier & Studio</div>
      <h2 class="rv">Dibersihkan &<br><span style="color:var(--accent-blue)">Siap Pakai</span></h2>
      <p class="rv">Sebelum sampai di tanganmu, setiap item telah melalui proses sanitasi, pencucian lembut, pemeliharaan serat kain, dan inspeksi detail agar langsung nyaman digunakan.</p>
      <div class="acount rv">
        <div><b data-to="11">0</b><span>Kategori Utama</span></div>
        <div><b data-to="42">0</b><span>Drop Kurasi</span></div>
        <div><b data-to="120">0</b><span>Unique 1-of-1 Fits</span></div>
      </div>
    </div>
  </div>
</section>

<!-- 5 · CURATION PROCESS STEPS -->
<section id="process" class="wrap">
  <div class="glass-panel" style="padding: clamp(32px, 5vw, 56px);">
    <div class="lbl rv">Langkah Kerja</div>
    <h2 class="rv" style="font-family:'Syne',sans-serif; font-weight:800; font-size:clamp(28px, 4vw, 42px); margin-top:6px;">
      Bagaimana Item <span style="color:var(--accent-blue)">Dihadirkan</span>
    </h2>

    <div class="process-grid">
      <div class="glass-panel process-step rv">
        <div class="step-no">01 · SOURCING</div>
        <h4>Pencarian Item</h4>
        <p>Mencari pakaian vintage dan preloved pilihan dari berbagai sumber tepercaya.</p>
      </div>

      <div class="glass-panel process-step rv">
        <div class="step-no">02 · INSPECTION</div>
        <h4>Inspeksi Kualitas</h4>
        <p>Memeriksa keutuhan kain, kancing, zipper, dan mengklasifikasikan kondisi item.</p>
      </div>

      <div class="glass-panel process-step rv">
        <div class="step-no">03 · HYGIENE</div>
        <h4>Sanitasi & Perawatan</h4>
        <p>Pembersihan mendalam untuk memastikan pakaian higienis dan siap pakai.</p>
      </div>

      <div class="glass-panel process-step rv">
        <div class="step-no">04 · DROP</div>
        <h4>Rilis Koleksi</h4>
        <p>Pengukuran rinci, dokumentasi foto presisi, dan rilis mingguan untukmu.</p>
      </div>
    </div>

    <div style="text-align:center; margin-top:40px;" class="rv">
      <a href="{{ url('/koleksi') }}" class="btn-glass-primary">Jelajahi Koleksi Kami</a>
    </div>
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
        <a href="{{ url('/style-journal') }}">Style Journal</a>
        <a href="{{ url('/kontak') }}">Hubungi Kami</a>
      </div>
    </div>
    <div class="legal">
      <span>© 2026 SECOND STORY · THRIFTWEAR CURATED</span>
      <span>PRELOVED · VINTAGE · EVERYDAY STYLE</span>
    </div>
  </div>
</footer>

<script>
/* ── Atelier Counter Animation ───────────────────────────────────── */
(function(){
  const nums = [...document.querySelectorAll('#atelier .acount b')];
  if(!nums.length) return;
  const run = n => {
    const to = +n.dataset.to;
    const t0 = performance.now(), D = 1400;
    (function step(now){
      const p = Math.min(1, (now - t0) / D);
      const e = 1 - Math.pow(1 - p, 3);
      n.textContent = Math.round(to * e);
      if(p < 1) requestAnimationFrame(step);
    })(t0);
  };
  const o = new IntersectionObserver(es => es.forEach(e => {
    if(e.isIntersecting){ run(e.target); o.unobserve(e.target); }
  }), {threshold:.5});
  nums.forEach(n => o.observe(n));
})();

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
