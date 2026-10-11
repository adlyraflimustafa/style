<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>SECOND STORY · Curated Thriftwear</title>
<meta name="description" content="SECOND STORY — curated thriftwear, vintage finds, dan fashion preloved pilihan.">
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

/* ── Navigation (Tata Letak Asli 3-Kolom Floating Glass) ───────────────────────── */
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

/* ── HERO SECTION ─────────────────────────────────────────────── */
#hero {
  position: relative; min-height: calc(100vh - var(--nav) - 40px);
  display: flex; flex-direction: column; justify-content: center;
  overflow: hidden; padding: clamp(40px, 6vh, 80px) 0;
}

#hero .hero-card {
  padding: clamp(30px, 5vh, 60px); position: relative; overflow: hidden;
}

#hero .stage {
  position: relative; width: 100%; display: grid; place-items: center;
  min-height: min(60vh, 580px);
}
#hero .word {
  position: absolute; inset: 0; display: grid; place-items: center; pointer-events: none;
}
#hero .word b {
  font-family: 'Syne', sans-serif; font-weight: 800;
  font-size: clamp(90px, 22vw, 320px); letter-spacing: -0.01em; line-height: 0.8;
  white-space: nowrap; opacity: 0.06; color: var(--text-main);
}
#hero .model {
  position: relative; z-index: 2; height: min(64vh, 620px); width: auto;
  filter: drop-shadow(0 20px 30px rgba(15, 23, 42, 0.12));
}

#hero .tl { position: absolute; left: clamp(30px, 5vw, 70px); top: clamp(20px, 4vh, 50px); z-index: 4; }
#hero .tl p { font-size: 13px; font-weight: 700; letter-spacing: 0.24em; text-transform: uppercase; color: var(--text-main); }
#hero .tl .rule { width: 60px; height: 3px; background: var(--text-main); margin-top: 14px; border-radius: 4px; }

#hero .br {
  position: relative;
  z-index: 4;
  align-self: flex-end;
  margin: 12px 0 0;
  padding: 0;
  text-align: right;
  max-width: 100%;
}
#hero .br p { overflow-wrap: anywhere; }
#hero .acts {
  position: relative;
  z-index: 5;
  margin-top: 28px;
  padding-top: 4px;
}
@media (max-width: 820px) {
  #hero .br { align-self: flex-start; text-align: left; margin-top: 8px; }
  #hero .acts { justify-content: flex-start; gap: 12px; }
}
#hero .br p { font-size: 12px; font-weight: 700; letter-spacing: 0.24em; text-transform: uppercase; color: var(--text-muted); }

#hero .acts {
  position: relative; z-index: 4; display: flex; gap: 20px; align-items: center;
  margin-top: clamp(20px, 4vh, 36px); flex-wrap: wrap; justify-content: center;
}

/* WHITE GLASS BUTTONS */
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

.btn-glass-secondary {
  display: inline-flex; align-items: center; justify-content: center;
  background: rgba(255, 255, 255, 0.8); backdrop-filter: var(--blur-amount);
  border: 1px solid var(--glass-border); color: var(--text-main); font-weight: 700;
  padding: 17px 38px; border-radius: 40px; font-size: 12px; letter-spacing: 0.22em;
  text-transform: uppercase; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
  transition: all 0.4s;
}
.btn-glass-secondary:hover {
  background: rgba(255, 255, 255, 0.95); border-color: var(--glass-border-dark);
  box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08); transform: translateY(-2px);
}

@media(max-width:820px){
  #hero .model { height: 48vh; }
  #hero .word b { font-size: clamp(60px, 18vw, 140px); }
  #hero .tl, #hero .br { position: static; text-align: left; margin-bottom: 16px; }
}

/* ── CATEGORY STRIP ─────────────────────────────────────────────── */
#cats { padding: clamp(40px, 6vh, 80px) 0; }
#cats .row { display: grid; grid-template-columns: repeat(3, 1fr); gap: clamp(20px, 3vw, 36px); }
#cats .cat-card {
  display: grid; grid-template-columns: auto 1fr; gap: clamp(16px, 2vw, 24px);
  align-items: center; padding: 22px; transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
#cats .cat-card:hover {
  border-color: var(--glass-border-dark); transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(15, 23, 42, 0.1);
  background: rgba(255, 255, 255, 0.85);
}
#cats .ph {
  width: clamp(86px, 8vw, 110px); aspect-ratio: 3/4; overflow: hidden;
  border-radius: 14px; border: 1px solid var(--glass-border-dark); flex: 0 0 auto;
}
#cats .ph img {
  width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s cubic-bezier(.2,.8,.3,1);
}
#cats .cat-card:hover .ph img { transform: scale(1.12); }
#cats h3 {
  font-family: 'Syne', sans-serif; font-weight: 700; font-size: clamp(18px, 1.6vw, 22px);
  margin-bottom: 6px; color: var(--text-main);
}
#cats p { font-size: 13px; color: var(--text-muted); margin-bottom: 12px; line-height: 1.5; }
#cats .go {
  font-size: 11px; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--accent-blue); display: inline-flex; align-items: center; gap: 8px;
}
#cats .go i { font-style: normal; transition: transform .4s; }
#cats .cat-card:hover .go i { transform: translateX(6px); }
@media(max-width:860px){ #cats .row { grid-template-columns: 1fr; gap: 20px; } }

/* ── SEASON EDITORIAL ────────────────────────────────────────────── */
#season { padding: clamp(40px, 6vh, 80px) 0; }
#season .grid { display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: 40px; }
#season .copy { padding: clamp(36px, 6vh, 70px) clamp(24px, 4vw, 60px); }
#season h2 {
  font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(38px, 5.5vw, 76px);
  line-height: 0.95; letter-spacing: -0.02em; margin-top: 10px; margin-bottom: 20px;
}
#season p { max-width: 38ch; color: var(--text-muted); font-size: 15px; line-height: 1.7; margin-bottom: 30px; }
#season .shot { position: relative; border-radius: 24px; overflow: hidden; min-height: 480px; border: 1px solid var(--glass-border); }
#season .shot img {
  width: 100%; height: 100%; object-fit: cover; object-position: center 28%;
  transition: transform 1.2s;
}
#season:hover .shot img { transform: scale(1.06); }
@media(max-width:860px){
  #season .grid { grid-template-columns: 1fr; }
  #season .shot { height: 60vw; min-height: 320px; }
}

/* ── SERVICE ROW ─────────────────────────────────────────────────── */
#svc { margin: 40px 0; }
#svc .row {
  display: grid; grid-template-columns: repeat(4, 1fr); gap: clamp(20px, 3vw, 36px);
  padding: clamp(28px, 4vh, 40px) 32px;
}
#svc div h4 {
  font-size: 12px; font-weight: 800; letter-spacing: 0.2em; text-transform: uppercase;
  color: var(--text-main); margin-bottom: 6px; display: flex; align-items: center; gap: 8px;
}
#svc div h4::before { content: '◆'; font-size: 8px; color: var(--accent-blue); }
#svc div p { font-size: 13px; color: var(--text-muted); line-height: 1.5; }
@media(max-width:820px){ #svc .row { grid-template-columns: 1fr 1fr; gap: 24px; } }

/* ── SHOP GRID ───────────────────────────────────────────────────── */
#shop { padding: clamp(50px, 8vh, 100px) 0; }
#shop .hd {
  display: flex; justify-content: space-between; align-items: flex-end; gap: 20px;
  margin-bottom: clamp(30px, 5vh, 50px); flex-wrap: wrap;
}
#shop h2 { font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(32px, 4vw, 52px); }
#shop .grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: clamp(16px, 2.2vw, 32px); }

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
@media(max-width:1000px){ #shop .grid { grid-template-columns: repeat(2, 1fr); } }

/* ── LOOKBOOK EDITORIAL ───────────────────────────────────────────── */
#look { padding: clamp(50px, 8vh, 100px) 0; }
#look .lhd { display: grid; grid-template-columns: 1fr 1fr; gap: clamp(20px, 4vw, 60px); align-items: end; margin-bottom: clamp(30px, 5vh, 60px); }
#look h2 { font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(38px, 6vw, 76px); line-height: 0.92; }
#look .lhd p { color: var(--text-muted); max-width: 38ch; font-size: 15px; line-height: 1.6; }

#look .lgrid { display: grid; grid-template-columns: repeat(12, 1fr); gap: clamp(16px, 2.4vw, 32px); }
#look .lg-a { grid-column: 1/6; }
#look .lg-b { grid-column: 6/13; margin-top: clamp(30px, 8vw, 100px); }
#look .lg-c { grid-column: 3/9; margin-top: clamp(20px, 4vw, 50px); }

#look figure { padding: 14px; border-radius: 20px; }
#look .ph { overflow: hidden; border-radius: 14px; position: relative; }
#look .lg-a .ph { aspect-ratio: 3/4; }
#look .lg-b .ph { aspect-ratio: 4/3; }
#look .lg-c .ph { aspect-ratio: 16/9; }
#look img { width: 100%; height: 100%; object-fit: cover; transition: transform 1.2s; }
#look figure:hover img { transform: scale(1.06); }
#look figcaption { margin-top: 14px; font-size: 11px; font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase; color: var(--accent-blue); display: flex; gap: 12px; align-items: center; }
#look figcaption span { color: var(--text-main); font-family: 'Syne', sans-serif; font-size: 14px; }
@media(max-width:820px){ #look .lhd { grid-template-columns: 1fr; } #look .lgrid { grid-template-columns: 1fr; } #look .lg-a, #look .lg-b, #look .lg-c { grid-column: 1/-1; margin-top: 0; } }

/* ── FABRIC & ATELIER ────────────────────────────────────────────── */
#cloth { margin: 60px 0; }
#cloth .cgrid { display: grid; grid-template-columns: 1fr 1fr; align-items: stretch; gap: 32px; }
#cloth .ccopy { padding: clamp(40px, 8vh, 80px) clamp(24px, 5vw, 60px); align-self: center; }
#cloth h2 { font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(34px, 5vw, 62px); line-height: 0.95; margin-bottom: 20px; }
#cloth p { color: var(--text-muted); max-width: 36ch; font-size: 15px; line-height: 1.6; }
#cloth dl { margin-top: 32px; border-top: 1px solid var(--glass-border-dark); }
#cloth dl div { display: flex; justify-content: space-between; gap: 16px; padding: 14px 0; border-bottom: 1px solid var(--glass-border-dark); font-size: 13px; }
#cloth dt { font-weight: 700; color: var(--text-main); }
#cloth dd { color: var(--text-muted); }
#cloth .cshot { position: relative; min-height: min(65vh, 560px); overflow: hidden; border-radius: 20px; border: 1px solid var(--glass-border); }
#cloth .cshot video { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }

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
@media(max-width:820px){ #cloth .cgrid, #atelier .agrid { grid-template-columns: 1fr; } }

/* ── SIGNUP ──────────────────────────────────────────────────────── */
#signup { padding: clamp(60px, 10vh, 100px) 0; }
#signup .signup-panel { padding: clamp(40px, 8vh, 80px) 24px; text-align: center; }
#signup h2 { font-family: 'Syne', sans-serif; font-weight: 800; font-size: clamp(34px, 5vw, 64px); margin-bottom: 16px; }
#signup p { color: var(--text-muted); max-width: 44ch; margin: 0 auto 32px; font-size: 15px; line-height: 1.6; }
#signup form { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
#signup input {
  flex: 1; min-width: min(300px, 80vw); max-width: 400px; padding: 18px 24px;
  border: 1px solid var(--glass-border-dark); border-radius: 40px; background: rgba(255, 255, 255, 0.8);
  font-size: 14px; color: var(--text-main); backdrop-filter: blur(10px); outline: none; transition: all 0.3s;
}
#signup input:focus { border-color: var(--text-main); box-shadow: 0 0 20px rgba(15, 23, 42, 0.1); }
#signup .ok { margin-top: 20px; font-size: 12px; font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase; color: var(--accent-blue); opacity: 0; transition: opacity .45s; }
#signup .ok.on { opacity: 1; }

/* ── FOOTER ──────────────────────────────────────────────────────── */
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

<!-- 1 · HERO SECTION -->
<header id="hero" class="wrap">
  <div class="glass-panel hero-card">
    <div class="tl rv">
      <p>Secondhand, First Choice</p>
      <p style="font-size:11px; color:var(--text-muted); margin-top:4px;">Vintage Finds · Everyday Style</p>
      <div class="rule"></div>
    </div>

    <div class="stage">
      <div class="word back" aria-hidden="true"><b id="wb">SECOND STORY</b></div>
      <img class="model" id="hm" src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/model.png" alt="Model dengan gaya thrift vintage">
    </div>

    <div class="br rv">
      <p class="lbl">Curated Thrift Drop</p>
      <p style="font-family:'Syne',sans-serif; font-size:22px; color:var(--text-main); font-weight:800; margin-top:4px;">Koleksi Pilihan 2026</p>
    </div>

    <div class="acts rv">
      <a href="{{ url('/#shop') }}" class="btn-glass-primary">Belanja Thrift</a>
      <a href="{{ url('/#season') }}" class="btn-glass-secondary">Lihat Cerita Kami</a>
    </div>
  </div>
</header>

<!-- 2 · CATEGORIES SECTION -->
<section id="cats" class="wrap">
  <div class="row">
    <a href="{{ url('/#shop') }}" class="glass-panel cat-card rv">
      <div class="ph"><img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/cat-men.webp" alt="Jackets" loading="lazy"></div>
      <div>
        <h3>Jackets</h3>
        <p>Jaket vintage dan outer pilihan untuk gaya sehari-hari.</p>
        <span class="go">Explore Jackets <i>→</i></span>
      </div>
    </a>
    <a href="{{ url('/#shop') }}" class="glass-panel cat-card rv">
      <div class="ph"><img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/cat-women.webp" alt="Sweaters" loading="lazy"></div>
      <div>
        <h3>Sweaters</h3>
        <p>Sweater, hoodie, dan knitwear preloved yang nyaman.</p>
        <span class="go">Explore Sweaters <i>→</i></span>
      </div>
    </a>
    <a href="{{ url('/#shop') }}" class="glass-panel cat-card rv">
      <div class="ph"><img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/cat-tailoring.webp" alt="Vintage Picks" loading="lazy"></div>
      <div>
        <h3>Vintage Picks</h3>
        <p>Item vintage unik yang bikin outfit kamu beda.</p>
        <span class="go">Explore Vintage Picks <i>→</i></span>
      </div>
    </a>
  </div>
</section>

<!-- 3 · SEASON EDITORIAL -->
<section id="season" class="wrap">
  <div class="glass-panel grid">
    <div class="copy">
      <div class="lbl rv">Drop Terbaru</div>
      <h2 class="rv">Good<br><span style="color:var(--accent-blue)">Finds</span></h2>
      <p class="rv">Pilihan thrift yang dikurasi satu per satu. Temukan pakaian dengan karakter, harga lebih ramah, dan kesempatan memberi barang berkualitas kehidupan kedua.</p>
      <a href="{{ url('/#shop') }}" class="btn-glass-primary rv">Jelajahi Pilihan</a>
    </div>
    <div class="shot">
      <img id="seasonImg" src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/season.webp" alt="Autumn Editorial Model" loading="lazy">
    </div>
  </div>
</section>

<!-- 4 · SERVICE BAR -->
<section id="svc" class="wrap">
  <div class="glass-panel row">
    <div class="rv"><h4>Pengiriman Aman</h4><p>Pesanan dikemas rapi dan dikirim ke alamatmu.</p></div>
    <div class="rv"><h4>Detail Transparan</h4><p>Foto dan kondisi item ditampilkan sejelas mungkin.</p></div>
    <div class="rv"><h4>Preloved Berkualitas</h4><p>Item pilihan yang layak dipakai kembali.</p></div>
    <div class="rv"><h4>Belanja Praktis</h4><p>Pilih item favorit dan cek detailnya sebelum membeli.</p></div>
  </div>
</section>

<!-- 5 · SHOP SECTION -->
<section id="shop" class="wrap">
  <div class="hd">
    <div>
      <div class="lbl rv" style="margin-bottom:8px;">Pilihan Preloved</div>
      <h2 class="rv">Best Finds <span style="color:var(--accent-blue)">This Week</span></h2>
    </div>
    <a href="{{ url('/#shop') }}" class="btn-glass-secondary rv">Lihat Semua Item</a>
  </div>
  <div class="grid" id="grid"></div>
</section>

<!-- 6 · LOOKBOOK SECTION -->
<section id="look" class="wrap">
  <div class="lhd">
    <div>
      <div class="lbl rv" style="margin-bottom:12px;">Style Inspiration</div>
      <h2 class="rv">Everyday <span style="color:var(--accent-blue)">Vintage Style</span></h2>
    </div>
    <p class="rv">Inspirasi padu padan item thrift untuk tampilan kasual, streetwear, hingga gaya vintage yang timeless.</p>
  </div>
  <div class="lgrid">
    <figure class="lg-a glass-panel rv">
      <div class="ph"><img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/look1.webp" alt="Look 01" loading="lazy"></div>
      <figcaption><span>01</span> Vintage Jacket Fit</figcaption>
    </figure>
    <figure class="lg-b glass-panel rv">
      <div class="ph"><img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/look2.webp" alt="Look 02" loading="lazy"></div>
      <figcaption><span>02</span> Casual Layering</figcaption>
    </figure>
    <figure class="lg-c glass-panel rv">
      <div class="ph"><img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/season.webp" alt="Look 03" loading="lazy"></div>
      <figcaption><span>03</span> Everyday Vintage</figcaption>
    </figure>
  </div>
</section>

<!-- 7 · CRAFT / CLOTH -->
<section id="cloth" class="wrap">
  <div class="cgrid">
    <div class="glass-panel ccopy">
      <div class="lbl rv" style="margin-bottom:16px;">Our Promise</div>
      <h2 class="rv">Secondhand<br><span style="color:var(--accent-blue)">Stories</span></h2>
      <p class="rv">Kami percaya pakaian bagus pantas dipakai lebih lama. Setiap item dipilih berdasarkan gaya, kondisi, dan karakter uniknya.</p>
      <dl class="rv">
        <div><dt>Kondisi Item</dt><dd>Dijelaskan di detail produk</dd></div>
        <div><dt>Pilihan Gaya</dt><dd>Vintage, casual, streetwear</dd></div>
        <div><dt>Stok</dt><dd>Unik dan terbatas</dd></div>
      </dl>
    </div>
    <figure class="cshot rv">
      <video data-src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/cloth.mp4" poster="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/cloth.webp" muted="" loop="" playsinline="" preload="none"></video>
    </figure>
  </div>
</section>

<!-- 8 · ATELIER SECTION -->
<section id="atelier" class="wrap">
  <div class="agrid">
    <figure class="ashot rv"><img src="https://cdn.jsdelivr.net/gh/VanhDc/aura-assets@sable-v2/sable/img/atelier.webp" alt="Redchurch Tentang Kami Craftsman" loading="lazy"></figure>
    <div class="glass-panel acopy">
      <div class="lbl rv" style="margin-bottom:16px;">About Second Story</div>
      <h2 class="rv">Give Clothes<br><span style="color:var(--accent-blue)">A Second Story</span></h2>
      <p class="rv">SECOND STORY menghadirkan pakaian preloved pilihan buat kamu yang ingin tampil beda tanpa harus membeli semuanya dalam kondisi baru. Karena tiap item punya cerita dan karakter sendiri.</p>
      <div class="acount rv">
        <div><b data-to="11">0</b><span>Core Categories</span></div>
        <div><b data-to="42">0</b><span>Curated Finds</span></div>
        <div><b data-to="120">0</b><span>Unique Per Item</span></div>
      </div>
    </div>
  </div>
</section>

<!-- 9 · NEWSLETTER -->
<section id="signup" class="wrap">
  <div class="glass-panel signup-panel">
    <div class="lbl rv" style="margin-bottom:14px;">Join Our Community</div>
    <h2 class="rv">Temukan <span style="color:var(--accent-blue)">Your Next Fit</span></h2>
    <p class="rv">Dapatkan kabar tentang drop terbaru, item vintage pilihan, dan rekomendasi gaya langsung melalui email.</p>
    <form class="rv" id="nf" novalidate="">
      <input type="email" required="" placeholder="Masukkan alamat email..." aria-label="Email address">
      <button class="btn-glass-primary" type="submit">Gabung Sekarang</button>
    </form>
    <div class="ok" id="nok" role="status">Terima kasih! Kamu sudah masuk daftar update SECOND STORY.</div>
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
        <a href="{{ url('/#shop') }}">Jackets</a>
        <a href="{{ url('/#shop') }}">Sweaters</a>
        <a href="{{ url('/#shop') }}">Vintage Picks</a>
        <a href="{{ url('/#shop') }}">Private Thrift Picks</a>
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
/* ── Product Data Grid Initialization ────────────────────────────── */
const PRODUCTS = [
  {nm:'Vintage Denim Jacket', ct:'Jaket · Size M', pr:129000, badge:'VINTAGE FIND', img:'https://images.unsplash.com/photo-1551537482-f2075a1d41f2?auto=format&fit=crop&w=900&q=85'},
  {nm:'Graphic Oversized Tee', ct:'Kaos · Size L', pr:65000, badge:'PRELOVED PICK', img:'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=900&q=85'},
  {nm:'Knit Sweater Classic', ct:'Sweater · Size M', pr:89000, badge:'ONE OF A KIND', img:'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?auto=format&fit=crop&w=900&q=85'},
  {nm:'Retro Button Shirt', ct:'Kemeja · Size L', pr:75000, badge:'GOOD FIND', img:'https://images.unsplash.com/photo-1598033129183-c4f50c736f10?auto=format&fit=crop&w=900&q=85'}
];

const grid = document.getElementById('grid');
const heartIcon = '<svg viewBox="0 0 24 24"><path d="M12 20.5 3.8 12.6a5 5 0 0 1 7.1-7l1.1 1.1 1.1-1.1a5 5 0 0 1 7.1 7Z"/></svg>';

grid.innerHTML = PRODUCTS.map((p, i) => `
  <article class="card glass-panel rv">
    <div class="ph">
      <span class="badge">${p.badge}</span>
      <img src="${p.img}" alt="${p.nm}" loading="lazy">
      <button class="fav" aria-pressed="false" aria-label="Save ${p.nm}">${heartIcon}</button>
      <button class="add" data-i="${i}">Add to Bag</button>
    </div>
    <div class="meta">
      <div>
        <div class="nm">${p.nm}</div>
        <div class="ct">${p.ct}</div>
      </div>
      <div class="pr">Rp ${p.pr.toLocaleString('id-ID')}</div>
    </div>
  </article>`).join('');

let bag = 0;
grid.addEventListener('click', e => {
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

/* ── Video Autoplay on Scroll ────────────────────────────────────── */
(function(){
  const vids = [...document.querySelectorAll('.cshot video')];
  if(!vids.length) return;
  const o = new IntersectionObserver(es => es.forEach(e => {
    const v = e.target;
    if(e.isIntersecting){
      if(!v.src && v.dataset.src) v.src = v.dataset.src;
      v.play().catch(()=>{});
    } else if(v.src){
      v.pause();
    }
  }), {threshold:.2});
  vids.forEach(v => o.observe(v));
})();

/* ── Newsletter Form Handling ───────────────────────────────────── */
document.getElementById('nf')?.addEventListener('submit', e => {
  e.preventDefault();
  const i = e.target.querySelector('input');
  if(!i.value || !i.checkValidity()){ i.focus(); return; }
  document.getElementById('nok').classList.add('on');
  i.value = '';
});
</script>
</body>
</html>
