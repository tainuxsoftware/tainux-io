<?php /* TAINUX | Helm Charts | charts.tainux.io | images/logo.png */ ?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>TAINUX Helm Charts — charts.tainux.io</title>
<meta name="description" content="Official TAINUX Helm repository. Install Guardrails, Cluster Doctor and Security AI on OKD and OpenShift in minutes.">
<link rel="icon" type="image/png" href="images/logo.png"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,700&family=Red+Hat+Text:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Red+Hat+Mono:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
<style>
/* ══════════════════════════════════════════════════
   TAINUX · RED HAT DESIGN SYSTEM
   Fonts:  Red Hat Display · Red Hat Text · Red Hat Mono
   Colors: #EE0000 red · #151515 dark · #ffffff light
   Pattern: redhat.com / patternfly standard
══════════════════════════════════════════════════ */
:root {
  --rh-red:       #EE0000; --rh-red-dark:  #C00000; --rh-red-light: rgba(238,0,0,.1);
  --rh-dark:      #151515; --rh-dark2:     #1a1a1a; --rh-dark3:     #212121;
  --rh-white:     #ffffff; --rh-gray-10:   #f5f5f5; --rh-gray-20:   #e8e8e8;
  --rh-gray-50:   #8a8d90; --rh-gray-70:   #4f5255; --rh-gray-90:   #1b1d21;
  --rh-blue:      #0066CC; --rh-green:     #3E8635;
  --border-light: #e8e8e8; --border-dark:  rgba(255,255,255,.1);
  --f-display: 'Red Hat Display','Helvetica Neue',Arial,sans-serif;
  --f-text:    'Red Hat Text',   'Helvetica Neue',Arial,sans-serif;
  --f-mono:    'Red Hat Mono',   'Courier New',monospace;
  --nav-h:72px; --max:1200px; --g:clamp(16px,4vw,48px);
  --ease:cubic-bezier(.22,1,.36,1);
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-size:16px;}
body{font-family:var(--f-text);background:var(--rh-white);color:var(--rh-dark);overflow-x:hidden;line-height:1.5;}
img{display:block;max-width:100%;}a{color:inherit;text-decoration:none;}
button{cursor:pointer;font-family:inherit;border:none;background:none;color:inherit;}
*:focus-visible{outline:2px solid var(--rh-blue);outline-offset:3px;}
::selection{background:var(--rh-red);color:#fff;}
::-webkit-scrollbar{width:4px;}::-webkit-scrollbar-thumb{background:var(--rh-red);}

/* ══ NAV ══ */
#nav{position:fixed;inset-block-start:0;inset-inline:0;z-index:9000;height:var(--nav-h);background:var(--rh-dark);border-bottom:1px solid rgba(255,255,255,.06);transition:border-color .3s;}
#nav.on{border-color:rgba(255,255,255,.12);}
.nav-w{max-width:var(--max);margin:auto;height:100%;padding:0 var(--g);display:flex;align-items:center;}
.nav-logo{display:flex;align-items:center;gap:12px;margin-right:40px;flex-shrink:0;}
.nav-logo img{height:32px;width:32px;object-fit:contain;border-radius:50%;}
.nav-logo-name{font-family:var(--f-display);font-size:1.05rem;font-weight:700;color:var(--rh-white);letter-spacing:-.01em;}
.nav-logo-name em{color:var(--rh-red);font-style:normal;}
.nav-div{width:1px;height:22px;background:rgba(255,255,255,.15);margin:0 20px;}
.nav-product-label{font-family:var(--f-text);font-size:.8rem;color:rgba(255,255,255,.5);white-space:nowrap;}
.nav-links{display:flex;align-items:center;list-style:none;margin-left:auto;}
.nav-links a{display:block;padding:8px 14px;font-family:var(--f-text);font-size:.88rem;color:rgba(255,255,255,.75);border-radius:3px;white-space:nowrap;transition:color .15s,background .15s;}
.nav-links a:hover{color:var(--rh-white);background:rgba(255,255,255,.08);}
.nav-cta{margin-left:12px;flex-shrink:0;padding:9px 22px;font-family:var(--f-text);font-size:.88rem;font-weight:500;background:var(--rh-red);color:var(--rh-white);border:1px solid transparent;border-radius:3px;transition:background .18s;}
.nav-cta:hover{background:var(--rh-red-dark);}
.nav-burger{display:none;padding:8px;color:rgba(255,255,255,.7);border-radius:3px;}

/* ══ HERO ══ */
#hero{background:var(--rh-dark);padding-top:var(--nav-h);position:relative;overflow:hidden;}
.hero-bg-grid{position:absolute;inset:0;pointer-events:none;z-index:0;background-image:linear-gradient(rgba(255,255,255,.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.03) 1px,transparent 1px);background-size:40px 40px;mask-image:radial-gradient(ellipse 100% 100% at 50% 0%,black 40%,transparent 80%);-webkit-mask-image:radial-gradient(ellipse 100% 100% at 50% 0%,black 40%,transparent 80%);}
.hero-bg-red{position:absolute;top:0;left:0;right:0;height:3px;background:var(--rh-red);z-index:1;}
#hero-canvas{position:absolute;inset:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:.6;}
.hero-w{position:relative;z-index:2;max-width:var(--max);margin:auto;padding:clamp(60px,8vw,100px) var(--g) clamp(60px,7vw,90px);display:grid;grid-template-columns:1fr 1fr;gap:clamp(40px,5vw,80px);align-items:center;}
.hero-eyebrow{display:inline-flex;align-items:center;gap:8px;padding:4px 14px;border-radius:20px;background:rgba(238,0,0,.15);border:1px solid rgba(238,0,0,.3);font-family:var(--f-mono);font-size:.72rem;font-weight:500;letter-spacing:.06em;color:#FF6B6B;margin-bottom:24px;}
.hero-eyebrow-dot{width:6px;height:6px;border-radius:50%;background:var(--rh-red);animation:blink 2s infinite;}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.2}}
h1.hero-h1{font-family:var(--f-display);font-weight:800;font-size:clamp(2.4rem,4.5vw,3.8rem);line-height:1.1;letter-spacing:-.02em;color:var(--rh-white);margin-bottom:20px;}
h1.hero-h1 .red{color:var(--rh-red);}
.hero-lead{font-family:var(--f-text);font-size:clamp(.95rem,1.3vw,1.1rem);color:rgba(255,255,255,.65);line-height:1.7;max-width:480px;margin-bottom:36px;}
.hero-actions{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:48px;}
.btn-primary{display:inline-flex;align-items:center;gap:8px;padding:13px 28px;background:var(--rh-red);color:var(--rh-white);font-family:var(--f-text);font-size:.95rem;font-weight:500;border-radius:3px;border:1px solid transparent;transition:background .18s,transform .2s var(--ease);}
.btn-primary:hover{background:var(--rh-red-dark);transform:translateY(-1px);}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;padding:13px 26px;background:transparent;color:var(--rh-white);font-family:var(--f-text);font-size:.95rem;font-weight:500;border:1px solid rgba(255,255,255,.3);border-radius:3px;transition:border-color .18s,background .18s,transform .2s var(--ease);}
.btn-secondary:hover{border-color:rgba(255,255,255,.6);background:rgba(255,255,255,.05);transform:translateY(-1px);}
.hero-stats{display:flex;gap:0;border-top:1px solid rgba(255,255,255,.1);padding-top:28px;}
.hst{padding-right:36px;border-right:1px solid rgba(255,255,255,.1);margin-right:36px;}
.hst:last-child{border-right:none;padding-right:0;margin-right:0;}
.hst-n{font-family:var(--f-display);font-size:2rem;font-weight:700;color:var(--rh-white);line-height:1;}
.hst-n em{color:var(--rh-red);font-style:normal;}
.hst-l{font-family:var(--f-text);font-size:.78rem;color:rgba(255,255,255,.5);margin-top:4px;}
.hero-terminal{background:var(--rh-gray-90);border:1px solid rgba(255,255,255,.1);border-radius:6px;overflow:hidden;box-shadow:0 24px 64px rgba(0,0,0,.6),0 0 0 1px rgba(255,255,255,.05);}
.t-bar{display:flex;align-items:center;gap:7px;padding:12px 16px;background:rgba(255,255,255,.04);border-bottom:1px solid rgba(255,255,255,.08);}
.t-dot{width:10px;height:10px;border-radius:50%;}
.td-r{background:#ff5f57}.td-y{background:#febc2e}.td-g{background:#28c840}
.t-bar-label{margin-left:auto;font-family:var(--f-mono);font-size:.68rem;color:rgba(255,255,255,.3);}
.t-body{padding:20px;font-family:var(--f-mono);font-size:.76rem;line-height:2;}
.tl{display:flex;gap:8px;}.tp{color:var(--rh-red);font-weight:600;flex-shrink:0;}
.tc{color:rgba(255,255,255,.85);}.to{padding-left:16px;color:rgba(255,255,255,.35);}
.tg{color:#5cba47}.tw{color:#f0ab00}
.t-cur{display:inline-block;width:7px;height:14px;background:var(--rh-red);animation:cur .9s step-end infinite;vertical-align:middle;}
@keyframes cur{0%,100%{opacity:1}50%{opacity:0}}

/* ══ SHARED ══ */
.band-red{height:4px;background:var(--rh-red);}
.section{position:relative;overflow:hidden;}
.container{max-width:var(--max);margin:auto;padding:clamp(56px,7vw,100px) var(--g);}
.section-eyebrow{font-family:var(--f-mono);font-size:.72rem;font-weight:500;letter-spacing:.1em;text-transform:uppercase;color:var(--rh-red);margin-bottom:14px;display:block;}
h2.section-title{font-family:var(--f-display);font-weight:700;font-size:clamp(1.75rem,3vw,2.6rem);line-height:1.15;letter-spacing:-.02em;color:var(--rh-dark);margin-bottom:16px;}
h2.section-title.light{color:var(--rh-white);}
.section-lead{font-family:var(--f-text);font-size:1.05rem;color:var(--rh-gray-70);line-height:1.7;max-width:560px;}
.section-lead.light{color:rgba(255,255,255,.6);}
.sh{display:flex;align-items:flex-end;justify-content:space-between;gap:24px;flex-wrap:wrap;margin-bottom:52px;}
.rv{opacity:0;transform:translateY(16px);transition:opacity .6s var(--ease),transform .6s var(--ease);}
.rv.on{opacity:1;transform:none;}
.d1{transition-delay:.07s}.d2{transition-delay:.14s}.d3{transition-delay:.21s}.d4{transition-delay:.28s}

/* ══ CHARTS — same pattern as #products ══ */
#charts{background:var(--rh-gray-10);}
.charts-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--border-light);border:1px solid var(--border-light);}
.ccard{background:var(--rh-white);padding:clamp(24px,3vw,40px);position:relative;overflow:hidden;display:flex;flex-direction:column;transition:background .2s;}
.ccard:hover{background:var(--rh-gray-10);}
.ccard::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--rh-red);transform:scaleX(0);transform-origin:left;transition:transform .3s var(--ease);}
.ccard:hover::before{transform:scaleX(1);}
.ccard-icon{width:44px;height:44px;background:var(--rh-red-light);border-radius:4px;display:flex;align-items:center;justify-content:center;margin-bottom:18px;flex-shrink:0;}
.ccard-icon svg{width:22px;height:22px;}
.ccard-tag{font-family:var(--f-mono);font-size:.66rem;font-weight:500;letter-spacing:.08em;text-transform:uppercase;color:var(--rh-red);margin-bottom:8px;}
.ccard-name{font-family:var(--f-display);font-weight:700;font-size:1.1rem;letter-spacing:-.01em;color:var(--rh-dark);margin-bottom:10px;}
.ccard-desc{font-family:var(--f-text);font-size:.88rem;color:var(--rh-gray-70);line-height:1.7;margin-bottom:16px;flex:1;}
.ccard-badges{display:flex;flex-wrap:wrap;gap:5px;margin-bottom:18px;}
.ccard-badge{font-family:var(--f-mono);font-size:.6rem;letter-spacing:.07em;text-transform:uppercase;color:var(--rh-gray-70);background:var(--rh-gray-10);border:1px solid var(--border-light);padding:3px 8px;border-radius:2px;}
.ccard-install{background:var(--rh-gray-90);border-radius:4px;overflow:hidden;margin-bottom:20px;}
.ccard-install-bar{display:flex;align-items:center;justify-content:space-between;padding:8px 12px;background:rgba(255,255,255,.03);border-bottom:1px solid rgba(255,255,255,.07);}
.ccard-install-label{font-family:var(--f-mono);font-size:.62rem;color:rgba(255,255,255,.28);letter-spacing:.05em;}
.ccard-copy{font-family:var(--f-mono);font-size:.6rem;letter-spacing:.08em;text-transform:uppercase;color:rgba(255,255,255,.25);border:1px solid rgba(255,255,255,.1);border-radius:2px;padding:2px 8px;background:none;transition:color .15s,border-color .15s;}
.ccard-copy:hover{color:rgba(255,255,255,.65);border-color:rgba(255,255,255,.3);}
.ccard-copy.ok{color:#5cba47;border-color:#5cba47;}
.ccard-install pre{padding:14px;overflow-x:auto;background:transparent;}
.ccard-install code{font-family:var(--f-mono);font-size:.73rem;line-height:1.95;color:rgba(255,255,255,.55);}
.ccard-install code .kw{color:#ff6b6b;font-weight:600;}
.ccard-install code .val{color:#79c0ff;}
.ccard-install code .cm{color:rgba(255,255,255,.25);font-style:italic;}
.ccard-install code .str{color:#7ee787;}
.ccard-link{display:inline-flex;align-items:center;gap:6px;font-family:var(--f-text);font-size:.88rem;font-weight:500;color:var(--rh-blue);margin-top:auto;transition:gap .2s;}
.ccard-link:hover{gap:10px;}
.ccard-link svg{width:12px;height:12px;}

/* ══ QUICKSTART — dark like #solutions ══ */
#quickstart{background:var(--rh-dark2);}
.steps-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.08);margin-bottom:48px;}
.step-card{background:var(--rh-dark3);padding:clamp(24px,3vw,38px);position:relative;overflow:hidden;transition:background .2s;}
.step-card:hover{background:#2a2a2a;}
.step-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--rh-red);transform:scaleX(0);transform-origin:left;transition:transform .3s var(--ease);}
.step-card:hover::before{transform:scaleX(1);}
.step-num{font-family:var(--f-mono);font-size:.7rem;font-weight:600;letter-spacing:.1em;color:var(--rh-red);margin-bottom:16px;display:block;}
.step-name{font-family:var(--f-display);font-weight:700;font-size:1rem;color:var(--rh-white);margin-bottom:10px;letter-spacing:-.01em;}
.step-text{font-family:var(--f-text);font-size:.85rem;color:rgba(255,255,255,.5);line-height:1.72;}
.step-text code{font-family:var(--f-mono);font-size:.8rem;color:rgba(255,80,60,.9);background:rgba(238,0,0,.08);padding:1px 5px;border-radius:2px;}
.install-full{background:var(--rh-gray-90);border:1px solid rgba(255,255,255,.08);border-radius:4px;overflow:hidden;}
.install-full-head{display:flex;align-items:center;justify-content:space-between;padding:12px 18px;background:rgba(255,255,255,.03);border-bottom:1px solid rgba(255,255,255,.07);}
.install-full-title{display:flex;align-items:center;gap:8px;}
.install-full-dot{width:7px;height:7px;border-radius:50%;background:#5cba47;box-shadow:0 0 6px rgba(92,186,71,.5);}
.install-full-label{font-family:var(--f-mono);font-size:.68rem;color:rgba(255,255,255,.3);letter-spacing:.05em;}
.install-full-copy{font-family:var(--f-mono);font-size:.6rem;letter-spacing:.08em;text-transform:uppercase;color:rgba(255,255,255,.25);border:1px solid rgba(255,255,255,.1);border-radius:2px;padding:3px 10px;background:none;transition:color .15s,border-color .15s;}
.install-full-copy:hover{color:rgba(255,255,255,.65);border-color:rgba(255,255,255,.3);}
.install-full-copy.ok{color:#5cba47;border-color:#5cba47;}
.install-full pre{padding:22px 20px;overflow-x:auto;background:transparent;}
.install-full code{font-family:var(--f-mono);font-size:.75rem;line-height:2;color:rgba(255,255,255,.55);}
.install-full code .kw{color:#ff6b6b;font-weight:600;}
.install-full code .val{color:#79c0ff;}
.install-full code .cm{color:rgba(255,255,255,.22);font-style:italic;}
.install-full code .str{color:#7ee787;}
.install-full code .out{color:rgba(255,255,255,.28);}

/* ══ COMPATIBILITY — white like #technology ══ */
#compatibility{background:var(--rh-white);}
.compat-layout{display:grid;grid-template-columns:1fr 1fr;gap:clamp(40px,6vw,88px);align-items:start;}
.compat-table{border:1px solid var(--border-light);border-radius:4px;overflow:hidden;}
.compat-row{display:grid;grid-template-columns:1fr 1fr 110px;border-bottom:1px solid var(--border-light);}
.compat-row:last-child{border-bottom:none;}
.compat-row.head{background:var(--rh-gray-10);}
.compat-cell{padding:12px 16px;font-family:var(--f-text);font-size:.85rem;color:var(--rh-gray-70);}
.compat-row.head .compat-cell{font-family:var(--f-mono);font-size:.64rem;letter-spacing:.08em;text-transform:uppercase;color:var(--rh-gray-50);}
.compat-cell.mono{font-family:var(--f-mono);font-size:.8rem;color:var(--rh-dark);}
.tag-ok{display:inline-flex;align-items:center;gap:5px;font-family:var(--f-mono);font-size:.7rem;color:var(--rh-green);}
.tag-ok::before{content:'';width:7px;height:7px;border-radius:50%;background:var(--rh-green);flex-shrink:0;}
.tag-beta{display:inline-flex;align-items:center;gap:5px;font-family:var(--f-mono);font-size:.7rem;color:#8a6914;}
.tag-beta::before{content:'';width:7px;height:7px;border-radius:50%;background:#f0ab00;flex-shrink:0;}
.compat-headline{font-family:var(--f-display);font-weight:600;font-size:1.05rem;color:var(--rh-dark);margin-bottom:28px;line-height:1.5;}
.compat-pillars{border-top:1px solid var(--border-light);}
.compat-pillar{display:grid;grid-template-columns:28px 1fr;gap:14px;padding:18px 0;border-bottom:1px solid var(--border-light);}
.compat-pillar:last-child{border-bottom:none;}
.compat-n{font-family:var(--f-mono);font-size:.68rem;font-weight:600;color:var(--rh-red);padding-top:2px;}
.compat-t{font-family:var(--f-display);font-weight:600;font-size:.9rem;color:var(--rh-dark);margin-bottom:4px;}
.compat-d{font-family:var(--f-text);font-size:.84rem;color:var(--rh-gray-70);line-height:1.65;}
.compat-d code{font-family:var(--f-mono);font-size:.8rem;color:var(--rh-red);background:var(--rh-red-light);padding:1px 5px;border-radius:2px;}

/* ══ PORTFOLIO — dark like #solutions ══ */
#portfolio{background:var(--rh-dark2);}
.pf-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.08);}
.pf-card{background:var(--rh-dark3);padding:clamp(24px,3vw,40px);display:flex;flex-direction:column;gap:10px;position:relative;overflow:hidden;transition:background .2s;}
.pf-card:hover{background:#2a2a2a;}
.pf-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--rh-red);transform:scaleX(0);transform-origin:left;transition:transform .3s var(--ease);}
.pf-card:hover::before{transform:scaleX(1);}
.pf-card.dim{opacity:.55;pointer-events:none;}
.pf-num{font-family:var(--f-mono);font-size:.7rem;font-weight:600;letter-spacing:.1em;color:var(--rh-red);}
.pf-name{font-family:var(--f-display);font-weight:700;font-size:1.15rem;color:var(--rh-white);letter-spacing:-.01em;}
.pf-chart{font-family:var(--f-mono);font-size:.75rem;color:rgba(255,255,255,.28);}
.pf-desc{font-family:var(--f-text);font-size:.88rem;color:rgba(255,255,255,.5);line-height:1.7;flex:1;}
.pf-badges{display:flex;flex-wrap:wrap;gap:5px;}
.pf-badge{font-family:var(--f-mono);font-size:.6rem;letter-spacing:.07em;text-transform:uppercase;color:rgba(255,255,255,.3);border:1px solid rgba(255,255,255,.1);padding:2px 8px;border-radius:2px;}
.pf-badge.soon{color:rgba(240,171,0,.5);border-color:rgba(240,171,0,.2);}
.pf-link{display:inline-flex;align-items:center;gap:6px;font-family:var(--f-text);font-size:.85rem;font-weight:500;color:rgba(255,100,80,.8);margin-top:4px;transition:gap .2s,color .15s;}
.pf-link:hover{gap:10px;color:#ff6b6b;}
.pf-link svg{width:11px;height:11px;}

/* ══ FOOTER — identical to index.php ══ */
footer{background:var(--rh-dark);border-top:3px solid var(--rh-red);padding:36px var(--g);position:relative;overflow:hidden;}
#ft-canvas{position:absolute;inset:0;width:100%;height:100%;pointer-events:none;opacity:.08;}
.foot-inner{max-width:var(--max);margin:auto;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;position:relative;z-index:1;}
.foot-brand{display:flex;align-items:center;gap:10px;}
.foot-brand img{height:26px;width:26px;border-radius:50%;opacity:.8;}
.foot-brand-name{font-family:var(--f-display);font-size:.9rem;font-weight:700;color:rgba(255,255,255,.65);}
.foot-links{display:flex;gap:18px;flex-wrap:wrap;}
.foot-links a{font-family:var(--f-text);font-size:.82rem;color:rgba(255,255,255,.45);transition:color .18s;}
.foot-links a:hover{color:var(--rh-white);}
.foot-copy{font-family:var(--f-text);font-size:.78rem;color:rgba(255,255,255,.25);}
#BTT{position:fixed;bottom:24px;right:24px;z-index:9000;width:44px;height:44px;background:var(--rh-red);color:var(--rh-white);border-radius:3px;display:flex;align-items:center;justify-content:center;opacity:0;transform:translateY(10px);pointer-events:none;transition:opacity .3s,transform .3s var(--ease),background .18s;}
#BTT.on{opacity:1;transform:none;pointer-events:auto;}
#BTT:hover{background:var(--rh-red-dark);}

/* ══ RESPONSIVE ══ */
@media(max-width:1040px){.charts-grid{grid-template-columns:repeat(2,1fr)}.steps-grid{grid-template-columns:repeat(2,1fr)}.compat-layout{grid-template-columns:1fr}}
@media(max-width:768px){
  .nav-links,.nav-cta,.nav-div,.nav-product-label{display:none;}
  .nav-links.open{display:flex;flex-direction:column;align-items:stretch;position:fixed;top:var(--nav-h);inset-inline:0;background:var(--rh-dark);border-bottom:1px solid rgba(255,255,255,.1);padding:12px var(--g) 24px;gap:2px;z-index:8999;box-shadow:0 16px 48px rgba(0,0,0,.7);}
  .nav-links.open a{padding:12px 14px;font-size:.9rem;}
  .nav-burger{display:flex;}.hero-w{grid-template-columns:1fr;}.hero-terminal{display:none;}
  h1.hero-h1{font-size:clamp(2rem,7vw,3rem);}
  .hero-stats{flex-wrap:wrap;gap:20px;}.hst{border-right:none;padding-right:0;margin-right:0;}
  .charts-grid{grid-template-columns:1fr;}.pf-grid{grid-template-columns:1fr;}.steps-grid{grid-template-columns:1fr;}
  .compat-row{grid-template-columns:1fr 1fr;}
  .foot-inner{flex-direction:column;text-align:center;}.foot-links{justify-content:center;}
  .sh{flex-direction:column;align-items:flex-start;}
}
@media(max-width:480px){.hero-actions{flex-direction:column;align-items:flex-start;}.btn-primary,.btn-secondary{width:100%;justify-content:center;}}
</style>
</head>
<body>

<!-- NAV -->
<nav id="nav" role="navigation" aria-label="Main">
  <div class="nav-w">
    <a href="https://tainux.io" class="nav-logo">
      <img src="images/logo.png" alt="TAINUX" width="32" height="32">
      <span class="nav-logo-name">TAINUX<em>.</em></span>
    </a>
    <span class="nav-div" aria-hidden="true"></span>
    <span class="nav-product-label">Helm Charts</span>
    <ul class="nav-links" id="NL" role="list">
      <li><a href="#charts">Charts</a></li>
      <li><a href="#quickstart">Quickstart</a></li>
      <li><a href="#compatibility">Compatibility</a></li>
      <li><a href="#portfolio">All Charts</a></li>
      <li><a href="https://tainux.io#docs">Docs</a></li>
    </ul>
    <a href="https://tainux.io#contact" class="nav-cta">Contact us</a>
    <button class="nav-burger" id="BG" aria-label="Menu" aria-expanded="false">
      <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><path d="M3 5.5h16M3 11h16M3 16.5h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
  </div>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-bg-grid" aria-hidden="true"></div>
  <div class="hero-bg-red" aria-hidden="true"></div>
  <canvas id="hero-canvas" aria-hidden="true"></canvas>
  <div class="hero-w">
    <div>
      <div class="hero-eyebrow"><span class="hero-eyebrow-dot"></span> charts.tainux.io · Official Helm Repository</div>
      <h1 class="hero-h1">Deploy <span class="red">TAINUX</span><br>in minutes.</h1>
      <p class="hero-lead">Official Helm charts for the complete TAINUX platform. Guardrails, Cluster Doctor and Security AI — Helm-native, read-only by default, OKD and OpenShift ready from day one.</p>
      <div class="hero-actions">
        <a href="#quickstart" class="btn-primary">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M8 3l4 4-4 4" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Quick Install
        </a>
        <a href="#charts" class="btn-secondary">Browse Charts</a>
      </div>
      <div class="hero-stats">
        <div class="hst"><div class="hst-n">3<em>+</em></div><div class="hst-l">Production Charts</div></div>
        <div class="hst"><div class="hst-n">0<em>-write</em></div><div class="hst-l">Default Posture</div></div>
        <div class="hst"><div class="hst-n">OKD<em>+</em></div><div class="hst-l">OpenShift Ready</div></div>
        <div class="hst"><div class="hst-n">Helm<em> v3</em></div><div class="hst-l">Compatible</div></div>
      </div>
    </div>
    <div class="hero-terminal" aria-label="Helm install preview">
      <div class="t-bar">
        <span class="t-dot td-r"></span><span class="t-dot td-y"></span><span class="t-dot td-g"></span>
        <span class="t-bar-label">helm · tainux-system</span>
      </div>
      <div class="t-body">
        <div class="tl"><span class="tp">$</span><span class="tc"> helm repo add tainux \</span></div>
        <div class="tl"><span class="tc">&nbsp;&nbsp;&nbsp;&nbsp;https://charts.tainux.io</span></div>
        <div class="tl"><span class="to tg">✓  "tainux" has been added to your repositories</span></div>
        <div class="tl"><span class="tp">$</span><span class="tc"> helm repo update</span></div>
        <div class="tl"><span class="to tg">✓  Successfully got an update from "tainux"</span></div>
        <div class="tl"><span class="tp">$</span><span class="tc"> helm install guardrails \</span></div>
        <div class="tl"><span class="tc">&nbsp;&nbsp;&nbsp;&nbsp;tainux/guardrails \</span></div>
        <div class="tl"><span class="tc">&nbsp;&nbsp;&nbsp;&nbsp;-n tainux-system \</span></div>
        <div class="tl"><span class="tc">&nbsp;&nbsp;&nbsp;&nbsp;--create-namespace</span></div>
        <div class="tl"><span class="to tg">✓  Release "guardrails" deployed</span></div>
        <div class="tl"><span class="to tg">✓  RBAC: read-only ClusterRole bound</span></div>
        <div class="tl"><span class="to tg">✓  Pods: 2/2 Running</span></div>
        <div class="tl"><span class="tp">$</span><span class="t-cur"></span></div>
      </div>
    </div>
  </div>
</section>

<div class="band-red"></div>

<!-- CHARTS -->
<section id="charts" class="section">
  <div class="container">
    <div class="sh rv">
      <div>
        <span class="section-eyebrow">Helm Charts</span>
        <h2 class="section-title">The complete TAINUX platform.</h2>
        <p class="section-lead">Three production-grade charts. One Helm repository. All read-only, all OKD-native, deployable in under five minutes.</p>
      </div>
    </div>
    <div class="charts-grid">

      <article class="ccard rv d1">
        <div class="ccard-icon"><svg viewBox="0 0 22 22" fill="none"><path d="M11 2.5L3.5 6.5v5C3.5 16 6.8 20 11 21.5c4.2-1.5 7.5-5.5 7.5-10v-5L11 2.5z" stroke="#EE0000" stroke-width="1.7" stroke-linejoin="round"/><path d="M8 11l2 2.5 4.5-4.5" stroke="#EE0000" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
        <div class="ccard-tag">TAINUX · Security &amp; Governance</div>
        <h3 class="ccard-name">tainux/guardrails</h3>
        <p class="ccard-desc">Kubernetes security and governance platform. Policy enforcement, admission control, OPA/Rego policies, cluster scanning and compliance reporting for OKD 4.21 production environments.</p>
        <div class="ccard-badges"><span class="ccard-badge">chart 1.0.0</span><span class="ccard-badge">app 0.9.1</span><span class="ccard-badge">okd 4.x</span><span class="ccard-badge">ocp 4.12+</span><span class="ccard-badge">stable</span></div>
        <div class="ccard-install">
          <div class="ccard-install-bar"><span class="ccard-install-label">helm-install.sh</span><button class="ccard-copy" onclick="cpCmd(this,'helm install guardrails tainux/guardrails -n tainux-system --create-namespace --set rbac.readOnly=true')">Copy</button></div>
          <pre><code><span class="cm"># Install TAINUX Guardrails</span>
<span class="kw">helm</span> install guardrails \
  tainux/guardrails \
  -n tainux-system \
  --create-namespace \
  <span class="val">--set</span> rbac.readOnly=<span class="str">true</span></code></pre>
        </div>
        <a href="#quickstart" class="ccard-link">Full install guide <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </article>

      <article class="ccard rv d2">
        <div class="ccard-icon"><svg viewBox="0 0 22 22" fill="none"><rect x="3" y="3" width="16" height="16" rx="3" stroke="#EE0000" stroke-width="1.7"/><path d="M6 11h3l1.5-3.5 2 7 1.5-3.5H17" stroke="#EE0000" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
        <div class="ccard-tag">TAINUX · Diagnostics</div>
        <h3 class="ccard-name">tainux/cluster-doctor</h3>
        <p class="ccard-desc">AI-powered cluster health platform. Real-time health scoring, LLM-driven root cause analysis, predictive failure forecasting and upgrade readiness checks — read-only, no agents required.</p>
        <div class="ccard-badges"><span class="ccard-badge">chart 1.2.0</span><span class="ccard-badge">app 0.7.4</span><span class="ccard-badge">okd 4.x</span><span class="ccard-badge">ocp 4.12+</span><span class="ccard-badge">stable</span></div>
        <div class="ccard-install">
          <div class="ccard-install-bar"><span class="ccard-install-label">helm-install.sh</span><button class="ccard-copy" onclick="cpCmd(this,'helm install cluster-doctor tainux/cluster-doctor -n tainux-system --create-namespace')">Copy</button></div>
          <pre><code><span class="cm"># Install Cluster Doctor</span>
<span class="kw">helm</span> install cluster-doctor \
  tainux/cluster-doctor \
  -n tainux-system \
  --create-namespace</code></pre>
        </div>
        <a href="#quickstart" class="ccard-link">Full install guide <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </article>

      <article class="ccard rv d3">
        <div class="ccard-icon"><svg viewBox="0 0 22 22" fill="none"><circle cx="11" cy="11" r="8.5" stroke="#EE0000" stroke-width="1.7"/><path d="M8 11l2 2 4-4" stroke="#EE0000" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
        <div class="ccard-tag">TAINUX · Security AI</div>
        <h3 class="ccard-name">tainux/security-ai</h3>
        <p class="ccard-desc">Enterprise AI security scanning and hardening. CIS/NIST compliance, RBAC privilege escalation detection, network policy analysis and continuous drift monitoring. Zero write access.</p>
        <div class="ccard-badges"><span class="ccard-badge">chart 0.8.0</span><span class="ccard-badge">app 0.5.2</span><span class="ccard-badge">okd 4.x</span><span class="ccard-badge">ocp 4.12+</span><span class="ccard-badge">stable</span></div>
        <div class="ccard-install">
          <div class="ccard-install-bar"><span class="ccard-install-label">helm-install.sh</span><button class="ccard-copy" onclick="cpCmd(this,'helm install security-ai tainux/security-ai -n tainux-system --create-namespace')">Copy</button></div>
          <pre><code><span class="cm"># Install Security AI</span>
<span class="kw">helm</span> install security-ai \
  tainux/security-ai \
  -n tainux-system \
  --create-namespace</code></pre>
        </div>
        <a href="#quickstart" class="ccard-link">Full install guide <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </article>

    </div>
  </div>
</section>

<div class="band-red"></div>

<!-- QUICKSTART -->
<section id="quickstart" class="section">
  <div class="container">
    <div class="sh rv">
      <div>
        <span class="section-eyebrow">Quickstart</span>
        <h2 class="section-title light">Up and running in minutes.</h2>
        <p class="section-lead light">Helm-first, minimal RBAC, zero node access. The way enterprise tooling should deploy.</p>
      </div>
    </div>
    <div class="steps-grid rv">
      <div class="step-card"><span class="step-num">01</span><h3 class="step-name">Add the repository</h3><p class="step-text">Run <code>helm repo add tainux https://charts.tainux.io</code> followed by <code>helm repo update</code> to pull the latest chart index.</p></div>
      <div class="step-card"><span class="step-num">02</span><h3 class="step-name">Pick your charts</h3><p class="step-text">Install any combination of <code>guardrails</code>, <code>cluster-doctor</code> and <code>security-ai</code> into the <code>tainux-system</code> namespace.</p></div>
      <div class="step-card"><span class="step-num">03</span><h3 class="step-name">Verify deployment</h3><p class="step-text">All pods deploy read-only by default. Check with <code>kubectl get pods -n tainux-system</code>. No further configuration required.</p></div>
      <div class="step-card"><span class="step-num">04</span><h3 class="step-name">Expose on OpenShift</h3><p class="step-text">Use <code>oc expose svc</code> or create an OpenShift Route. RBAC and SCC are pre-configured for OKD 4.x and OpenShift 4.12+ environments.</p></div>
    </div>
    <div class="install-full rv d1">
      <div class="install-full-head">
        <div class="install-full-title"><span class="install-full-dot"></span><span class="install-full-label">helm-install-all.sh — full stack deployment</span></div>
        <button class="install-full-copy" onclick="cpFull(this)">Copy all</button>
      </div>
      <pre><code><span class="cm"># ── Add TAINUX Helm repository ─────────────────────────────────</span>
<span class="kw">helm</span> repo add tainux https://charts.tainux.io
<span class="kw">helm</span> repo update

<span class="cm"># ── Install TAINUX Guardrails ───────────────────────────────────</span>
<span class="kw">helm</span> install guardrails tainux/guardrails \
  -n tainux-system --create-namespace \
  <span class="val">--set</span> rbac.readOnly=<span class="str">true</span>

<span class="cm"># ── Install TAINUX Cluster Doctor ──────────────────────────────</span>
<span class="kw">helm</span> install cluster-doctor tainux/cluster-doctor \
  -n tainux-system

<span class="cm"># ── Install TAINUX Security AI ─────────────────────────────────</span>
<span class="kw">helm</span> install security-ai tainux/security-ai \
  -n tainux-system

<span class="cm"># ── Verify all pods are running ────────────────────────────────</span>
<span class="kw">kubectl</span> get pods -n tainux-system
<span class="out">NAME                               READY   STATUS    RESTARTS   AGE</span>
<span class="out">guardrails-7d4f9b6c8-xk2pq         2/2     Running   0          42s</span>
<span class="out">cluster-doctor-6b8c9d7f4-m9nrt     1/1     Running   0          38s</span>
<span class="out">security-ai-5c7d8e9b2-lp4wx        1/1     Running   0          31s</span>

<span class="cm"># ── Expose via OpenShift Route (optional) ──────────────────────</span>
<span class="kw">oc</span> expose svc guardrails -n tainux-system \
  --hostname=guardrails.apps.cluster.io</code></pre>
    </div>
  </div>
</section>

<div class="band-red"></div>

<!-- COMPATIBILITY -->
<section id="compatibility" class="section">
  <div class="container">
    <div class="sh rv">
      <div>
        <span class="section-eyebrow">Compatibility</span>
        <h2 class="section-title">Built for the Red Hat ecosystem.</h2>
        <p class="section-lead">All charts tested and validated on OKD, OpenShift Container Platform and upstream Kubernetes.</p>
      </div>
    </div>
    <div class="compat-layout">
      <div class="rv">
        <div class="compat-table">
          <div class="compat-row head"><div class="compat-cell">Platform</div><div class="compat-cell">Version range</div><div class="compat-cell">Status</div></div>
          <div class="compat-row"><div class="compat-cell mono">OKD</div><div class="compat-cell">4.12 — 4.21</div><div class="compat-cell"><span class="tag-ok">Supported</span></div></div>
          <div class="compat-row"><div class="compat-cell mono">OpenShift</div><div class="compat-cell">4.12 — 4.17</div><div class="compat-cell"><span class="tag-ok">Supported</span></div></div>
          <div class="compat-row"><div class="compat-cell mono">Kubernetes</div><div class="compat-cell">1.26 — 1.31</div><div class="compat-cell"><span class="tag-ok">Supported</span></div></div>
          <div class="compat-row"><div class="compat-cell mono">Helm</div><div class="compat-cell">v3.12+</div><div class="compat-cell"><span class="tag-ok">Required</span></div></div>
          <div class="compat-row"><div class="compat-cell mono">RHCOS</div><div class="compat-cell">Immutable nodes</div><div class="compat-cell"><span class="tag-ok">Compatible</span></div></div>
          <div class="compat-row"><div class="compat-cell mono">Air-gapped</div><div class="compat-cell">Offline install</div><div class="compat-cell"><span class="tag-ok">Supported</span></div></div>
          <div class="compat-row"><div class="compat-cell mono">Multi-cluster</div><div class="compat-cell">ACM / Fleet</div><div class="compat-cell"><span class="tag-ok">Supported</span></div></div>
          <div class="compat-row"><div class="compat-cell mono">ARM64</div><div class="compat-cell">aarch64</div><div class="compat-cell"><span class="tag-beta">Beta</span></div></div>
        </div>
      </div>
      <div class="rv d1">
        <p class="compat-headline">"All TAINUX charts deploy as standard OKD workloads. No privileged daemonsets, no host OS access, no data leaving your environment."</p>
        <div class="compat-pillars">
          <div class="compat-pillar"><div class="compat-n">01</div><div><div class="compat-t">Read-only by default</div><div class="compat-d">Minimal ClusterRole with only <code>get</code>, <code>list</code> and <code>watch</code>. Every chart ships with <code>rbac.readOnly=true</code> as the default value.</div></div></div>
          <div class="compat-pillar"><div class="compat-n">02</div><div><div class="compat-t">OKD SCC pre-configured</div><div class="compat-d">All charts include a ready-to-use SecurityContextConstraints for OKD. No manual SCC binding required after install.</div></div></div>
          <div class="compat-pillar"><div class="compat-n">03</div><div><div class="compat-t">Signed and verified</div><div class="compat-d">All packages are Helm-provenance signed and published to <code>charts.tainux.io</code> with SHA-256 checksum verification.</div></div></div>
          <div class="compat-pillar"><div class="compat-n">04</div><div><div class="compat-t">OLM operator available</div><div class="compat-d">Operator Lifecycle Manager bundles available for enterprise environments. Helm and OLM paths both fully supported.</div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="band-red"></div>

<!-- PORTFOLIO -->
<section id="portfolio" class="section">
  <div class="container">
    <div class="sh rv">
      <div>
        <span class="section-eyebrow">Chart Portfolio</span>
        <h2 class="section-title light">All available charts.</h2>
        <p class="section-lead light">The complete list of TAINUX Helm charts — current releases, previews and upcoming additions.</p>
      </div>
    </div>
    <div class="pf-grid">
      <div class="pf-card rv d1">
        <span class="pf-num">01</span>
        <div class="pf-name">TAINUX Guardrails</div>
        <div class="pf-chart">tainux/guardrails · v1.0.0 · stable</div>
        <p class="pf-desc">Kubernetes security and governance platform. Policy enforcement, admission control, OPA/Rego policies, cluster scanning, compliance reporting. OKD 4.21 native.</p>
        <div class="pf-badges"><span class="pf-badge">okd 4.x</span><span class="pf-badge">ocp 4.12+</span><span class="pf-badge">opa/rego</span><span class="pf-badge">read-only</span></div>
        <a href="#charts" class="pf-link">Install <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="pf-card rv d2">
        <span class="pf-num">02</span>
        <div class="pf-name">TAINUX Cluster Doctor</div>
        <div class="pf-chart">tainux/cluster-doctor · v1.2.0 · stable</div>
        <p class="pf-desc">AI-powered cluster health platform. Health scoring across every control-plane component, LLM root cause analysis, predictive failure forecasting and upgrade readiness.</p>
        <div class="pf-badges"><span class="pf-badge">okd 4.x</span><span class="pf-badge">ocp 4.12+</span><span class="pf-badge">ai-powered</span><span class="pf-badge">read-only</span></div>
        <a href="#charts" class="pf-link">Install <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="pf-card rv d3">
        <span class="pf-num">03</span>
        <div class="pf-name">TAINUX Security AI</div>
        <div class="pf-chart">tainux/security-ai · v0.8.0 · stable</div>
        <p class="pf-desc">Enterprise AI security scanning. CIS and NIST compliance, RBAC privilege escalation detection, network policy analysis and continuous drift monitoring. Zero write access.</p>
        <div class="pf-badges"><span class="pf-badge">okd 4.x</span><span class="pf-badge">cis/nist</span><span class="pf-badge">ai-powered</span><span class="pf-badge">read-only</span></div>
        <a href="#charts" class="pf-link">Install <svg viewBox="0 0 12 12" fill="none"><path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="pf-card rv d4 dim">
        <span class="pf-num">04</span>
        <div class="pf-name">TAINUX Automation AI</div>
        <div class="pf-chart">tainux/automation-ai · upcoming</div>
        <p class="pf-desc">AI-driven Day-2 operations automation for OKD and OpenShift. GitOps-native workflow engine with AI approval gates, policy-as-code remediation and multi-cluster rollout orchestration.</p>
        <div class="pf-badges"><span class="pf-badge soon">coming soon</span><span class="pf-badge">okd 4.x</span><span class="pf-badge">gitops</span></div>
      </div>
    </div>
  </div>
</section>

<div class="band-red"></div>

<!-- FOOTER -->
<footer>
  <canvas id="ft-canvas" aria-hidden="true"></canvas>
  <div class="foot-inner">
    <div class="foot-brand">
      <img src="images/logo.png" alt="TAINUX" width="26" height="26">
      <span class="foot-brand-name">TAINUX</span>
    </div>
    <nav class="foot-links" aria-label="Footer">
      <a href="#charts">Charts</a>
      <a href="#quickstart">Quickstart</a>
      <a href="#compatibility">Compatibility</a>
      <a href="https://tainux.io">tainux.io</a>
      <a href="https://github.com/tainuxsoftware" target="_blank" rel="noopener">GitHub</a>
      <a href="mailto:support@tainux.io">support@tainux.io</a>
    </nav>
    <div class="foot-copy">&copy; <?php echo date('Y'); ?> TAINUX — charts.tainux.io</div>
  </div>
</footer>

<button id="BTT" aria-label="Back to top">
  <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M7.5 11V4M4 7l3.5-3.5L11 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
</button>

<script>
(function(){
'use strict';
var rAF=requestAnimationFrame,cAF=cancelAnimationFrame;
function $i(id){return document.getElementById(id)}

/* ══════════════════════════════════
   PARTICLE FIELD ENGINE — identical to index.php
══════════════════════════════════ */
function Particles(canvas,cfg){
  this.c=canvas;this.ctx=canvas.getContext('2d');
  this.p=[];this.raf=null;this.alive=false;this.mx=-9999;this.my=-9999;
  this.cfg=Object.assign({n:80,spd:.45,r:2.5,dist:130,nc:'238,0,0',lc:'238,0,0',bg:null,attract:false,ar:160,af:.4,pulse:true,pp:.15,ps:.009,grid:false,ga:.04,gs:38},cfg);
}
Particles.prototype.init=function(){
  var c=this.c,o=this.cfg,arr=[];
  c.width=c.offsetWidth||c.width;c.height=parseInt(c.getAttribute('height')||c.offsetHeight||400);
  for(var i=0;i<o.n;i++)arr.push({x:Math.random()*c.width,y:Math.random()*c.height,vx:(Math.random()-.5)*o.spd,vy:(Math.random()-.5)*o.spd,r:o.r*(.5+Math.random()*.85),mass:.5+Math.random()*1.5,p:Math.random()<o.pp?Math.random():-1});
  this.p=arr;
};
Particles.prototype.tick=function(){
  var c=this.c,ctx=this.ctx,o=this.cfg,ps=this.p,W=c.width,H=c.height;
  ctx.clearRect(0,0,W,H);
  if(o.bg){ctx.fillStyle=o.bg;ctx.fillRect(0,0,W,H);}
  if(o.grid){ctx.fillStyle='rgba('+o.nc+','+o.ga+')';for(var gx=0;gx<=W;gx+=o.gs)for(var gy=0;gy<=H;gy+=o.gs){ctx.beginPath();ctx.arc(gx,gy,.8,0,Math.PI*2);ctx.fill();}}
  for(var i=0;i<ps.length;i++){
    var pt=ps[i];
    if(o.attract){var dx=this.mx-pt.x,dy=this.my-pt.y,d=Math.sqrt(dx*dx+dy*dy);if(d<o.ar&&d>1){var f=(o.ar-d)/o.ar*o.af*pt.mass;pt.vx+=dx/d*f;pt.vy+=dy/d*f;pt.vx*=.97;pt.vy*=.97;}}
    pt.x+=pt.vx;pt.y+=pt.vy;
    if(pt.x<0){pt.x=0;pt.vx*=-.85}if(pt.x>W){pt.x=W;pt.vx*=-.85}if(pt.y<0){pt.y=0;pt.vy*=-.85}if(pt.y>H){pt.y=H;pt.vy*=-.85}
    if(pt.p>=0)pt.p=(pt.p+o.ps)%1;
  }
  for(var i=0;i<ps.length;i++)for(var j=i+1;j<ps.length;j++){
    var a=ps[i],b=ps[j],ex=a.x-b.x,ey=a.y-b.y,ed=Math.sqrt(ex*ex+ey*ey);
    if(ed>o.dist)continue;
    var al=(1-ed/o.dist)*.22;
    ctx.beginPath();ctx.strokeStyle='rgba('+o.lc+','+al.toFixed(3)+')';ctx.lineWidth=.7;ctx.moveTo(a.x,a.y);ctx.lineTo(b.x,b.y);ctx.stroke();
    if(o.pulse&&a.p>=0){var px=a.x-ex*a.p,py=a.y-ey*a.p;ctx.beginPath();ctx.arc(px,py,2,0,Math.PI*2);ctx.fillStyle='rgba('+o.lc+','+(Math.min(al*4,.9)).toFixed(2)+')';ctx.fill();}
  }
  for(var i=0;i<ps.length;i++){
    var pt=ps[i],gr=ctx.createRadialGradient(pt.x,pt.y,0,pt.x,pt.y,pt.r*4);
    gr.addColorStop(0,'rgba('+o.nc+',.2)');gr.addColorStop(1,'rgba('+o.nc+',0)');
    ctx.beginPath();ctx.arc(pt.x,pt.y,pt.r*4,0,Math.PI*2);ctx.fillStyle=gr;ctx.fill();
    ctx.beginPath();ctx.arc(pt.x,pt.y,pt.r,0,Math.PI*2);ctx.fillStyle='rgba('+o.nc+',.7)';ctx.fill();
  }
};
Particles.prototype.loop=function(){var self=this;if(!self.alive)return;self.tick();self.raf=rAF(function(){self.loop();});};
Particles.prototype.start=function(){if(this.alive)return;this.alive=true;this.init();this.loop();};
Particles.prototype.stop=function(){this.alive=false;if(this.raf){cAF(this.raf);this.raf=null;}};
Particles.prototype.watch=function(){
  var self=this;
  if(!('IntersectionObserver' in window)){self.start();return;}
  var ob=new IntersectionObserver(function(e){e[0].isIntersecting?self.start():self.stop();},{threshold:.02});
  ob.observe(self.c);window.addEventListener('resize',function(){if(self.alive)self.init();},{passive:true});
};
Particles.prototype.bindMouse=function(el){
  var self=this;
  el.addEventListener('mousemove',function(e){var r=self.c.getBoundingClientRect();self.mx=(e.clientX-r.left)*(self.c.width/r.width);self.my=(e.clientY-r.top)*(self.c.height/r.height);},{passive:true});
  el.addEventListener('mouseleave',function(){self.mx=-9999;self.my=-9999;},{passive:true});
  el.addEventListener('touchmove',function(e){var r=self.c.getBoundingClientRect(),t=e.touches[0];self.mx=(t.clientX-r.left)*(self.c.width/r.width);self.my=(t.clientY-r.top)*(self.c.height/r.height);},{passive:true});
};

window.addEventListener('load',function(){
  var hc=$i('hero-canvas');
  if(hc){hc.style.cssText='position:absolute;inset:0;width:100%;height:100%;pointer-events:none;z-index:0';var hp=new Particles(hc,{n:90,spd:.42,r:2.4,dist:140,nc:'238,0,0',lc:'238,0,0',bg:null,attract:true,ar:180,af:.45,grid:true,ga:.03,gs:44,pulse:true,pp:.16});hp.watch();hp.bindMouse(hc.parentElement);}
  var fc=$i('ft-canvas');
  if(fc){fc.style.cssText='position:absolute;inset:0;width:100%;height:100%;pointer-events:none';var fp=new Particles(fc,{n:40,spd:.32,r:2,dist:105,nc:'255,100,80',lc:'255,80,60',bg:null,attract:false,pulse:false});fp.watch();}
});

/* NAV */
var navEl=$i('nav'),nl=$i('NL'),bg=$i('BG'),mo=false;
window.addEventListener('scroll',function(){navEl.classList.toggle('on',window.scrollY>10);$i('BTT').classList.toggle('on',window.scrollY>500);},{passive:true});
bg.addEventListener('click',function(){mo=!mo;bg.setAttribute('aria-expanded',String(mo));nl.classList.toggle('open',mo);});
nl.querySelectorAll('a').forEach(function(a){a.addEventListener('click',function(){mo=false;nl.classList.remove('open');bg.setAttribute('aria-expanded','false');});});

/* REVEAL */
var rvs=document.querySelectorAll('.rv');
if('IntersectionObserver' in window){var rvo=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('on');rvo.unobserve(e.target);}});},{threshold:.06,rootMargin:'0px 0px -20px 0px'});rvs.forEach(function(el){rvo.observe(el);});}else{rvs.forEach(function(el){el.classList.add('on');});}

/* BTT */
$i('BTT').addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'});});

/* COPY */
function cpCmd(btn,text){
  var ok=function(){btn.textContent='Copied!';btn.classList.add('ok');setTimeout(function(){btn.textContent='Copy';btn.classList.remove('ok');},2000);};
  navigator.clipboard?navigator.clipboard.writeText(text).then(ok).catch(ok):(function(){var t=document.createElement('textarea');t.value=text;document.body.appendChild(t);t.select();document.execCommand('copy');document.body.removeChild(t);ok();})();
}
window.cpCmd=cpCmd;
function cpFull(btn){
  var body=document.querySelector('.install-full pre code');
  var text=body?body.innerText:'';
  var ok=function(){btn.textContent='Copied!';btn.classList.add('ok');setTimeout(function(){btn.textContent='Copy all';btn.classList.remove('ok');},2000);};
  navigator.clipboard?navigator.clipboard.writeText(text).then(ok).catch(ok):ok();
}
window.cpFull=cpFull;

})();
</script>
</body>
</html>
