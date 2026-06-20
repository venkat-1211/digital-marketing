<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Attorney Rankings - Guest Posting</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
:root{
    --dark:#061e29;
    --dark2:#082837;
    --gold:#c79653;
    --gold2:#e0b56d;
    --white:#ffffff;
    
    --muted:#b8cbd4;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:var(--dark);
    color:var(--white);
    font-family:'Inter',sans-serif;
}

.guest-hero{
    padding:30px 0 70px;
    background:
        radial-gradient(circle at top right, rgba(199,150,83,.18), transparent 35%),
        linear-gradient(135deg, #061e29 0%, #082b3a 100%);
    overflow:hidden;
}

.guest-container{
    width:88%;
    max-width:1320px;
    margin:auto;
}

.guest-hero-grid{
    display:grid;
    grid-template-columns:1.05fr .95fr;
    align-items:center;
    gap:60px;
}

.guest-tag{
    display:inline-block;
    color:var(--gold2);
    font-weight:700;
    font-size:14px;
    letter-spacing:.08em;
    text-transform:uppercase;
    margin-bottom:22px;
}

.guest-title{
    font-size:45px;
    color:white;
    line-height:1.05;
    font-weight:800;
    margin-bottom:26px;
}

.guest-title span{
    color:var(--gold2);
}

.guest-subtitle{
    font-size:25px;
    line-height:1.45;
    color:white;
    font-weight:600;
    margin-bottom:18px;
}

.guest-desc{
    max-width:720px;
    color:#e5f0f4;
    font-size:18px;
    line-height:1.9;
}

.guest-desc strong{
    color:#fff;
}

.guest-stats{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:16px;
    margin:30px 0;
    max-width:720px;
}

.stat-box{
    border:1px solid rgba(255,255,255,.12);
    background:rgba(255,255,255,.045);
    padding:22px 18px;
    border-radius:18px;
}

.stat-box h3{
    color:var(--gold2);
    font-size:28px;
    margin-bottom:8px;
}

.stat-box p{
    color:var(--muted);
    font-size:14px;
    line-height:1.4;
}

.guest-buttons{
    display:flex;
    gap:16px;
    flex-wrap:wrap;
}

.guest-btn{
    position:relative;
    overflow:hidden;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    min-height:54px;
    padding:0 28px;
    border-radius:50px;
    text-decoration:none;
    font-weight:800;
    font-size:14px;
    transition:.3s ease;
    z-index:1;
}

.guest-btn.primary{
    background:#c79653;
    color:#061e29;
    box-shadow:0 12px 30px rgba(199,150,83,.35);
}

.guest-btn.secondary{
    border:1px solid rgba(255,255,255,.25);
    color:#fff;
    background:rgba(255,255,255,.05);
}

/* Shining Effect */
.guest-btn::before{
    content:"";
    position:absolute;
    top:0;
    left:-120%;
    width:60%;
    height:100%;
    background:linear-gradient(
        120deg,
        transparent,
        rgba(255,255,255,.65),
        transparent
    );
    transform:skewX(-25deg);
    z-index:-1;
    animation:btnShine 9s infinite;
}

@keyframes btnShine{
    0%{
        left:-120%;
    }
    40%{
        left:130%;
    }
    100%{
        left:130%;
    }
}

.guest-btn:hover{
    transform:translateY(-4px);
}

.guest-btn.primary:hover{
    background:#d4a25d;
}

.guest-btn.secondary:hover{
    border-color:#c79653;
    background:rgba(199,150,83,.12);
}

.guest-visual{
    position:relative;
}

.banner-card{
    background:linear-gradient(145deg,#0b2a3a,#123f55);
    border:1px solid rgba(255,255,255,.12);
    border-radius:26px;
    padding:28px;
    box-shadow:0 30px 90px rgba(0,0,0,.35);
    position:relative;
    overflow:hidden;
}

.banner-card:before{
    content:"";
    position:absolute;
    width:230px;
    height:230px;
    border-radius:50%;
    background:rgba(199,150,83,.22);
    right:-80px;
    top:-90px;
}

.live-label{
    color:var(--muted);
    font-size:12px;
    text-transform:uppercase;
    letter-spacing:.12em;
    font-weight:700;
    margin-bottom:18px;
}

/* .site-card{
    background:rgba(255,255,255,.07);
    border:1px solid rgba(255,255,255,.12);
    border-radius:16px;
    padding:18px;
    margin-bottom:15px;
    position:relative;
    z-index:1;
}

.site-card h4{
    font-size:16px;
    color:white;
    margin-bottom:10px;
} */

/* .site-meta{
    display:flex;
    gap:18px;
    flex-wrap:wrap;
    color:#d7e7ed;
    font-size:13px;
}

.da-badge{
    position:absolute;
    right:16px;
    top:16px;
    background:var(--gold2);
    color:#061e29;
    font-size:12px;
    font-weight:800;
    padding:6px 10px;
    border-radius:30px;
} */
    .site-card{
    background:linear-gradient(
        135deg,
        rgba(255,255,255,.08),
        rgba(255,255,255,.04)
    );
    border:1px solid rgba(255,255,255,.12);
    border-radius:16px;
    padding:18px;
    margin-bottom:15px;
    position:relative;
    z-index:1;
    overflow:hidden;
    backdrop-filter:blur(14px);

    transition:
        transform .35s cubic-bezier(.4,0,.2,1),
        box-shadow .35s cubic-bezier(.4,0,.2,1),
        border-color .35s ease,
        background .35s ease;

    box-shadow:
        0 4px 10px rgba(0,0,0,.08),
        0 10px 30px rgba(0,0,0,.12);
}

/* Animated top glow */
.site-card::before{
    content:"";
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:2px;
    background:linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,.9),
        transparent
    );
    transition:left .8s ease;
}

/* Soft gradient glow */
.site-card::after{
    content:"";
    position:absolute;
    inset:0;
    background:
        radial-gradient(
            circle at top right,
            rgba(255,215,0,.12),
            transparent 45%
        );
    opacity:0;
    transition:opacity .4s ease;
    pointer-events:none;
}

.site-card:hover{
    transform:translateY(-6px);
    border-color:rgba(255,255,255,.22);

    box-shadow:
        0 12px 24px rgba(0,0,0,.15),
        0 20px 50px rgba(0,0,0,.18),
        0 0 0 1px rgba(255,255,255,.06);
}

.site-card:hover::before{
    left:100%;
}

.site-card:hover::after{
    opacity:1;
}

.site-card h4{
    font-size:16px;
    color:#fff;
    margin-bottom:10px;
    font-weight:700;
    letter-spacing:.3px;

    transition:
        transform .3s ease,
        color .3s ease;
}

.site-card:hover h4{
    transform:translateX(4px);
    color:#ffffff;
}

.da-badge{
    position:absolute;
    right:16px;
    top:16px;
    background:linear-gradient(
        135deg,
        #ffd95a,
        #ffb300
    );
    color:#061e29;
    font-size:12px;
    font-weight:800;
    padding:6px 10px;
    border-radius:30px;

    box-shadow:
        0 4px 12px rgba(255,193,7,.35);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}

.site-card:hover .da-badge{
    transform:scale(1.08);
    box-shadow:
        0 8px 20px rgba(255,193,7,.45);
}

.site-meta{
    display:flex;
    gap:18px;
    flex-wrap:wrap;
    color:#d7e7ed;
    font-size:13px;
}

.site-meta span{
    position:relative;
    transition:
        transform .3s ease,
        color .3s ease;
}

.site-meta span:hover{
    color:#fff;
    transform:translateY(-2px);
}

/* Entry animation */
.site-card{
    animation:cardFade .7s cubic-bezier(.22,1,.36,1) both;
}

@keyframes cardFade{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.image-box{
    position:relative;
    overflow:hidden;
    animation:fadeUp .9s ease-out both;
}

.image-box img{
    display:block;
    width:100%;

    transition:
        transform .7s cubic-bezier(.22,1,.36,1),
        filter .4s ease,
        box-shadow .4s ease;

    box-shadow:
        0 10px 35px rgba(0,0,0,.18);
}

/* Shine Effect */
.image-box::before{
    content:"";
    position:absolute;
    top:0;
    left:-150%;
    width:60%;
    height:100%;
    z-index:2;
    background:linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,.25),
        transparent
    );
    transform:skewX(-25deg);
}

.image-box:hover::before{
    animation:shine 1.2s ease;
}

.image-box:hover img{
    transform:scale(1.04);
    filter:brightness(1.05);
    box-shadow:
        0 20px 50px rgba(0,0,0,.25),
        0 0 30px rgba(255,193,7,.15);
}

/* Floating animation */
.image-box{
    animation:
        fadeUp .8s ease-out,
        floating 5s ease-in-out infinite;
}

@keyframes floating{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-8px);
    }
}

@keyframes shine{
    100%{
        left:180%;
    }
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.guest-note{
    margin-top:22px;
    padding:18px 20px;
    border-left:4px solid var(--gold);
    background:rgba(255,255,255,.05);
    color:#eaf6fa;
    line-height:1.7;
    font-size:16px;
}

@media(max-width:991px){
    .guest-hero{
        padding:70px 0 50px;
    }

    .guest-hero-grid{
        grid-template-columns:1fr;
        gap:40px;
    }

    .guest-title{
        font-size:42px;
    }

    .guest-subtitle{
        font-size:21px;
    }
}

@media(max-width:600px){
    .guest-container{
        width:92%;
    }

    .guest-title{
        font-size:34px;
    }

    .guest-stats{
        grid-template-columns:1fr;
    }

    .banner-card{
        padding:20px;
    }
}
/*first section end */

/* second section start */
.gp-package-section{
    background:#fff;
    padding:55px 0;
    color:#061e29;
}

.gp-package-container{
    width:88%;
    max-width:1320px;
    margin:auto;
}

.gp-package-head{
    text-align:center;
    max-width:850px;
    margin:0 auto 70px;
}

.gp-package-head span{
    display:inline-block;
    position:relative;
    color:#c79653;
    font-weight:900;
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:14px;
    padding-bottom:14px;
}

.gp-package-head span:after{
    content:"";
    position:absolute;
    left:50%;
    bottom:0;
    width:90px;
    height:2px;
    background:#c79653;
    transform:translateX(-50%);
}

.gp-package-head h2{
    font-family:'Playfair Display',serif;
    font-size:52px;
    line-height:1.15;
    margin:18px 0 12px;
    color:#061e29;
}

.gp-package-head p{
    color:#415762;
    font-size:18px;
    line-height:1.7;
}

.gp-package-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:34px;
    align-items:stretch;
}

.gp-price-card{
    position:relative;
    background:#f6fafc;
    border:1px solid #dce8ed;
    border-radius:34px;
    overflow:hidden;
    box-shadow:0 25px 70px rgba(6,30,41,.10);
    transition:.3s ease;
}

.gp-price-card:hover{
    transform:translateY(-10px);
    box-shadow:0 35px 90px rgba(6,30,41,.16);
}

.gp-price-card.featured{
    transform:translateY(-20px);
    border:2px solid #c79653;
}

.gp-price-card.featured:hover{
    transform:translateY(-30px);
}

.gp-best-badge{
    position:absolute;
    top:18px;
    right:18px;
    background:#061e29;
    color:#e0b56d;
    padding:9px 16px;
    border-radius:40px;
    font-size:12px;
    font-weight:900;
    text-transform:uppercase;
    letter-spacing:1px;
    z-index:4;
}

.gp-price-top{
    position:relative;
    background:#061e29;
    color:#fff;
    padding:65px 25px 50px;
    text-align:center;
    overflow:hidden;
    border-radius:30px 30px 0 0;
}

.gp-price-card.featured .gp-price-top{
    background:#c79653;
    color:#061e29;
}

.gp-price-top:before{
    content:"";
    position:absolute;
    left:50%;
    bottom:-30px;
    width:120%;
    height:60px;
    background:#f6fafc;
    transform:translateX(-50%) skewY(-4deg);
    z-index:1;
}

.gp-price-top h3{
    position:relative;
    z-index:2;
    font-size:34px;
}
.gp-price-card.featured .gp-price,
.gp-price-card.featured .gp-price h3{
    color:#061e29;
}

.gp-price-top h3{
    color:inherit;
}

.gp-price{
    color:inherit;
}
.gp-price-top h3,
.gp-price{
    position:relative;
    z-index:3;
}

.gp-price{
    position:relative;
    z-index:2;
    font-size:58px;
    font-weight:900;
    font-family:'Playfair Display',serif;
    line-height:1;
}

.gp-price small{
    font-size:22px;
    vertical-align:top;
    margin-right:4px;
}

.gp-price span{
    font-family:'Inter',sans-serif;
    font-size:16px;
    font-weight:600;
}

.gp-price-card ul{
    list-style:none;
    padding:35px 32px 24px;
    margin:0;
}

.gp-price-card ul li{
    position:relative;
    padding:13px 0 13px 34px;
    border-bottom:1px solid #dde7ec;
    color:#1f3b47;
    font-size:16px;
    line-height:1.4;
    font-weight:600;
}

.gp-price-card ul li:before{
    content:"";
    position:absolute;
    left:0;
    top:16px;
    width:18px;
    height:18px;
    background:#061e29;
    border-radius:50%;
}

.gp-price-card ul li:after{
    content:"✓";
    position:absolute;
    left:4px;
    top:12px;
    color:#c79653;
    font-size:14px;
    font-weight:900;
}

.gp-package-btn{
    position:relative;
    overflow:hidden;
    display:flex;
    margin:0;
    align-items:center;
    justify-content:center;
    width:calc(100% - 64px);
    min-height:56px;
    background:#061e29;
    color:#fff;
    text-decoration:none;
    border-radius:50px;
    font-weight:900;
    transition:.3s ease;
}

.gp-package-btn.gold{
    background:#c79653;
    color:#061e29;
}

.gp-package-btn:before{
    content:"";
    position:absolute;
    top:0;
    left:-120%;
    width:60%;
    height:100%;
    background:linear-gradient(
        120deg,
        transparent,
        rgba(255,255,255,.65),
        transparent
    );
    transform:skewX(-25deg);
    animation:packageBtnShine 3s infinite;
}

@keyframes packageBtnShine{
    0%{left:-120%;}
    40%{left:130%;}
    100%{left:130%;}
}

.gp-package-action{
    display:flex;
    align-items:center;
    gap:14px;
    padding:0 32px 34px;
}

.gp-package-action .gp-package-btn{
    flex:1;
    width:auto;
    margin:0;
    min-height:58px;
}

.gp-quantity-box{
    flex:0 0 auto;
    display:flex;
    align-items:center;
    height:58px;
    border:1px solid #cbd8de;
    border-radius:50px;
    overflow:hidden;
    background:#fff;
}

.gp-quantity-box .qty-btn{
    width:44px;
    height:58px;
    border:0;
    background:#061e29;
    color:#fff;
    font-size:18px;
    font-weight:900;
    cursor:pointer;
}

.gp-quantity-box .qty-input{
    width:46px;
    height:58px;
    border:0;
    text-align:center;
    outline:none;
    font-weight:900;
    color:#061e29;
}

.gp-package-btn:hover{
    transform:translateY(-4px);
    background:#c79653;
    color:#061e29;
}

@media(max-width:1100px){
    .gp-package-grid{
        grid-template-columns:1fr;
        max-width:620px;
        margin:auto;
    }

    .gp-price-card.featured{
        transform:none;
    }

    .gp-price-card.featured:hover{
        transform:translateY(-10px);
    }
}

@media(max-width:600px){
    .gp-package-section{
        padding:70px 0;
    }

    .gp-package-container{
        width:92%;
    }

    .gp-package-head h2{
        font-size:34px;
    }

    .gp-price-card ul{
        padding:30px 22px 20px;
    }

    .gp-package-btn{
        width:calc(100% - 44px);
        margin:10px 22px 30px;
    }
}
/* second section end */

/* third section start */
.gp-offer-section{
    background:
        radial-gradient(circle at top left, rgba(199,150,83,.18), transparent 30%),
        linear-gradient(135deg,#061e29,#082c3d);
    padding:55px 0;
    color:#fff;
}

.gp-offer-container{
    width:88%;
    max-width:1220px;
    margin:auto;
}

.gp-offer-head{
    text-align:center;
    max-width:850px;
    margin:0 auto 70px;
}

.gp-offer-head span{
    display:inline-block;
    position:relative;
    color:#e0b56d;
    font-weight:900;
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:14px;
    padding-bottom:14px;
}

.gp-offer-head span:after{
    content:"";
    position:absolute;
    left:50%;
    bottom:0;
    width:90px;
    height:2px;
    background:#e0b56d;
    transform:translateX(-50%);
}

.gp-offer-head h2{
    font-family:'Playfair Display',serif;
    font-size:54px;
    margin:18px 0 12px;
    color:#fff;
}

.gp-offer-head p{
    color:#dce8ed;
    font-size:18px;
}

.gp-offer-grid{
    display:grid;
    grid-template-columns:repeat(6,1fr);
    gap:28px;
}

.gp-offer-card{
    grid-column:span 2;
    position:relative;
    min-height:170px;
    background:rgba(255,255,255,.07);
    border:1px solid rgba(255,255,255,.13);
    border-radius:30px;
    padding:34px 25px;
    text-align:center;
    overflow:hidden;
    box-shadow:0 25px 70px rgba(0,0,0,.22);
}

.gp-offer-card:nth-child(4){
    grid-column:2 / span 2;
}

.gp-offer-card:nth-child(5){
    grid-column:4 / span 2;
}

.gp-offer-card:before{
    content:"";
    position:absolute;
    width:130px;
    height:130px;
    border-radius:50%;
    background:#c79653;
    opacity:.13;
    right:-45px;
    top:-45px;
}

.gp-offer-card strong{
    display:block;
    color:#e0b56d;
    font-family:'Playfair Display',serif;
    font-size:38px;
    margin-bottom:16px;
}

.gp-offer-card p{
    color:#fff;
    font-size:18px;
    font-weight:900;
    margin:0;
}

.gp-custom-offer{
    max-width:650px;
    margin:45px auto 0;
    background:linear-gradient(135deg,#c79653,#b18448);
    color:#061e29;
    padding:36px 40px;
    border-radius:30px;
    text-align:center;
    box-shadow:0 25px 70px rgba(199,150,83,.25);
}

.gp-custom-offer h3{
    font-family:'Playfair Display',serif;
    font-size:34px;
    margin-bottom:12px;
}

.gp-custom-offer p{
    font-size:18px;
    font-weight:900;
}

@media(max-width:900px){
    .gp-offer-grid{
        grid-template-columns:1fr;
    }

    .gp-offer-card,
    .gp-offer-card:nth-child(4),
    .gp-offer-card:nth-child(5){
        grid-column:auto;
    }

    .gp-offer-head h2{
        font-size:38px;
    }
}
/* third section end */

/*fourth section start */
.gp-know-section{
    background:#fff;
    color:#061e29;
    padding:90px 0;
    position:relative;
    overflow:hidden;
}

.gp-know-left{
    animation:leftReveal .9s cubic-bezier(.22,1,.36,1) forwards;
}

.gp-know-right{
    animation:rightReveal 1s cubic-bezier(.22,1,.36,1) forwards;
}

@keyframes leftReveal{
    from{
        opacity:0;
        transform:translateX(-50px);
    }
    to{
        opacity:1;
        transform:translateX(0);
    }
}

@keyframes rightReveal{
    from{
        opacity:0;
        transform:translateX(50px);
    }
    to{
        opacity:1;
        transform:translateX(0);
    }
}

.gp-know-container{
    width:88%;
    max-width:1320px;
    margin:auto;
    display:grid;
    grid-template-columns:.9fr 1.1fr;
    gap:70px;
    align-items:start;
}

.gp-small-title{
    display:inline-block;
    color:#c79653;
    font-weight:800;
    font-size:14px;
    letter-spacing:.08em;
    text-transform:uppercase;
    margin-bottom:22px;
    position:relative;
}

.gp-small-title:after{
    content:"";
    width:70px;
    height:2px;
    background:#c79653;
    position:absolute;
    left:0;
    bottom:-8px;
}

.gp-know-left h2{
    font-family:'Playfair Display',serif;
    font-size:44px;
    line-height:1.25;
    font-weight:800;
    color:#061e29;
}

.gp-know-left h2 span{
    color:#c79653;
}

.gp-know-left h2{
    position:relative;
}

.gp-know-left h2 span{
    position:relative;
}

.gp-know-left h2 span::after{
    content:"";
    position:absolute;
    left:0;
    bottom:4px;
    width:100%;
    height:10px;
    background:rgba(199,150,83,.15);
    z-index:-1;
    transform:scaleX(0);
    transform-origin:left;
    animation:underlineGrow 1.4s ease forwards .6s;
}

@keyframes underlineGrow{
    to{
        transform:scaleX(1);
    }
}

.gp-know-right{
    position:relative;
    padding:38px;
    border-radius:28px;
    background:#f7fafb;
    border:1px solid #dce8ed;
    box-shadow:0 24px 70px rgba(6,30,41,.10);
}

.gp-know-right{
    position:relative;
    padding:38px;
    border-radius:28px;
    background:rgba(247,250,251,.9);
    backdrop-filter:blur(14px);

    border:1px solid rgba(220,232,237,.9);

    box-shadow:
        0 24px 70px rgba(6,30,41,.10);

    transition:
        transform .45s cubic-bezier(.22,1,.36,1),
        box-shadow .45s ease,
        border-color .45s ease;
}

.gp-know-right:hover{
    transform:translateY(-8px);

    border-color:rgba(199,150,83,.45);

    box-shadow:
        0 35px 90px rgba(6,30,41,.15);
}

.gp-know-right:before{
    content:"";
    position:absolute;
    width:90px;
    height:90px;
    right:-18px;
    top:-18px;
    background:#c79653;
    opacity:.16;
    border-radius:50%;
}

.gp-know-right:before{
    content:"";
    position:absolute;
    width:90px;
    height:90px;
    right:-18px;
    top:-18px;
    background:#c79653;
    opacity:.15;
    border-radius:50%;

    animation:floatCircle 6s ease-in-out infinite;
}

@keyframes floatCircle{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-12px);
    }
}

.gp-know-right:before{
    content:"";
    position:absolute;
    width:90px;
    height:90px;
    right:-18px;
    top:-18px;
    background:#c79653;
    opacity:.15;
    border-radius:50%;

    animation:floatCircle 6s ease-in-out infinite;
}

@keyframes floatCircle{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-12px);
    }
}

.gp-know-right p{
    font-size:18px;
    line-height:1.9;
    color:#1b3440;
    margin-bottom:22px;
}

.gp-highlight-box{
    margin-top:30px;
    background:#061e29;
    color:#fff;
    border-radius:24px;
    padding:30px;
    display:grid;
    grid-template-columns:120px 1fr;
    gap:24px;
    align-items:center;
    border-left:6px solid #c79653;
}

.gp-know-right p{
    opacity:0;
    animation:textFade .8s ease forwards;
}

.gp-know-right p:nth-child(1){
    animation-delay:.2s;
}

.gp-know-right p:nth-child(2){
    animation-delay:.4s;
}

.gp-know-right p:nth-child(3){
    animation-delay:.6s;
}

@keyframes textFade{
    from{
        opacity:0;
        transform:translateY(15px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.gp-highlight-box{
    position:relative;
    overflow:hidden;

    transition:
        transform .4s ease,
        box-shadow .4s ease;
}

.gp-highlight-box:hover{
    transform:translateY(-6px);

    box-shadow:
        0 20px 50px rgba(0,0,0,.25);
}

.gp-highlight-box::before{
    content:"";
    position:absolute;
    top:0;
    left:-120%;
    width:50%;
    height:100%;

    background:linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,.15),
        transparent
    );

    transform:skewX(-25deg);
}

.gp-highlight-box:hover::before{
    animation:shineEffect 1.2s ease;
}

@keyframes shineEffect{
    100%{
        left:180%;
    }
}

.gp-percent{
    font-size:52px;
    font-weight:900;
    color:#e0b56d;
    font-family:'Playfair Display',serif;
}

.gp-highlight-box p{
    color:#fff;
    margin:0;
    font-size:18px;
    line-height:1.8;
}

.gp-highlight-box strong{
    color:#e0b56d;
}

@media(max-width:991px){
    .gp-know-container{
        grid-template-columns:1fr;
        gap:35px;
    }

    .gp-know-left h2{
        font-size:36px;
    }
}

@media(max-width:600px){
    .gp-know-section{
        padding:60px 0;
    }

    .gp-know-container{
        width:92%;
    }

    .gp-know-left h2{
        font-size:30px;
    }

    .gp-know-right{
        padding:25px;
    }

    .gp-highlight-box{
        grid-template-columns:1fr;
        gap:10px;
    }

    .gp-percent{
        font-size:44px;
    }
}
/*fourth section end */

/* fifth section start */
/* =========================
   BENEFITS SECTION
========================= */

.gp-benefits-section{
    position:relative;
    overflow:hidden;
    padding:120px 0;
    background:
    radial-gradient(circle at top right,
    rgba(199,150,83,.08),
    transparent 30%),
    linear-gradient(180deg,#041722,#061e29);
}

.gp-container{
    width:90%;
    max-width:1400px;
    margin:auto;
    position:relative;
    z-index:2;
}

/* =========================
   HEADING
========================= */

.gp-benefits-heading{
    text-align:center;
    margin-bottom:80px;
    animation:fadeUp .8s ease;
}

.gp-section-label{
    display:inline-block;
    color:#c79653;
    font-size:14px;
    font-weight:800;
    letter-spacing:3px;
    text-transform:uppercase;
    margin-bottom:24px;
    position:relative;
}

.gp-section-label:after{
    content:"";
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    bottom:-10px;
    width:90px;
    height:2px;
    background:#c79653;
}

.gp-benefits-heading h2{
    color:#fff;
    font-size:48px;
    line-height:1.2;
    font-weight:800;
}

.gp-benefits-heading h2 span{
    color:#e0b56d;
}

/* =========================
   BENEFITS GRID
========================= */

.gp-benefits-row{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:28px;
    margin-bottom:90px;
}

.benefit-item{
    position:relative;
    text-align:center;

    padding:40px 28px;

    background:rgba(255,255,255,.04);

    backdrop-filter:blur(16px);

    border:1px solid rgba(255,255,255,.08);

    border-radius:24px;

    transition:
    transform .45s cubic-bezier(.22,1,.36,1),
    box-shadow .45s ease,
    border-color .45s ease;

    animation:cardReveal .8s ease both;
}

.benefit-item:hover{
    transform:translateY(-10px);

    border-color:rgba(199,150,83,.4);

    box-shadow:
    0 25px 60px rgba(0,0,0,.25),
    0 0 0 1px rgba(199,150,83,.15);
}

/* glow */

.benefit-item::before{
    content:"";
    position:absolute;
    inset:0;

    background:
    radial-gradient(circle at top right,
    rgba(199,150,83,.12),
    transparent 45%);

    opacity:0;
    transition:.4s;
    border-radius:24px;
}

.benefit-item:hover::before{
    opacity:1;
}

/* =========================
   ICON CIRCLE
========================= */

.benefit-circle{
    width:110px;
    height:110px;
    margin:auto  auto 30px;

    border-radius:50%;

    background:
    linear-gradient(
    135deg,
    #ffffff,
    #f5f5f5
    );

    display:flex;
    align-items:center;
    justify-content:center;

    position:relative;

    transition:.4s;
}

.benefit-item:hover .benefit-circle{
    transform:scale(1.08) rotate(5deg);
}

.benefit-circle i{
    font-size:42px;
    color:#061e29;
}

.benefit-no{
    position:absolute;

    width:34px;
    height:34px;

    top:-5px;
    right:-5px;

    border-radius:50%;

    background:#c79653;

    color:#fff;

    font-size:13px;
    font-weight:700;

    display:flex;
    align-items:center;
    justify-content:center;

    box-shadow:
    0 10px 20px rgba(199,150,83,.4);
}

/* =========================
   TEXT
========================= */

.benefit-item h3{
    color:#fff;
    font-size:22px;
    margin-bottom:15px;
}

.benefit-item p{
    color:#c8d8df;
    line-height:1.9;
    font-size:15px;
}

/* =========================
   STATS CARD
========================= */

.gp-stats-banner{

    background:
    linear-gradient(
    135deg,
    rgba(255,255,255,.06),
    rgba(255,255,255,.02)
    );

    backdrop-filter:blur(16px);

    border:1px solid rgba(255,255,255,.08);

    border-radius:30px;

    padding:55px;

    display:grid;
    grid-template-columns:220px 1fr 220px;
    gap:40px;

    align-items:center;

    box-shadow:
    0 30px 80px rgba(0,0,0,.18);
}

/* left */

.stats-left{
    text-align:center;
}

.stats-left span{
    color:#c79653;
    letter-spacing:2px;
    font-size:13px;
    font-weight:700;
}

.stats-left h3{
    font-size:92px;
    color:#fff;
    line-height:1;
}

/* center */

.stats-center h4{
    color:#fff;
    font-size:34px;
    line-height:1.45;
}

.stats-center h4 span{
    color:#e0b56d;
}

.stats-center p{
    margin-top:18px;
    color:#c8d8df;
    line-height:1.8;
}

.stats-center small{
    color:#c79653;
}

/* right chart */

.stats-right{
    display:flex;
    justify-content:center;
    align-items:flex-end;
    gap:15px;
}

.bar{
    width:58px;
    background:
    linear-gradient(
    180deg,
    #e0b56d,
    #c79653
    );

    border-radius:12px 12px 0 0;

    display:flex;
    align-items:flex-start;
    justify-content:center;

    color:#fff;
    font-weight:700;

    padding-top:12px;

    animation:growBars 1.4s ease;
}

.b1{
    height:200px;
}

.b2{
    height:145px;
}

.b3{
    height:95px;
}

/* =========================
   ANIMATIONS
========================= */

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes cardReveal{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes growBars{
    from{
        height:0;
    }
}

/* stagger */

.benefit-item:nth-child(1){animation-delay:.05s;}
.benefit-item:nth-child(2){animation-delay:.15s;}
.benefit-item:nth-child(3){animation-delay:.25s;}
.benefit-item:nth-child(4){animation-delay:.35s;}
.benefit-item:nth-child(5){animation-delay:.45s;}
.benefit-item:nth-child(6){animation-delay:.55s;}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:1200px){

    .gp-benefits-row{
        grid-template-columns:repeat(2,1fr);
    }

    .gp-stats-banner{
        grid-template-columns:1fr;
        text-align:center;
    }
}

@media(max-width:768px){

    .gp-benefits-section{
        padding:80px 0;
    }

    .gp-benefits-heading h2{
        font-size:34px;
    }

    .gp-benefits-row{
        grid-template-columns:1fr;
    }

    .gp-stats-banner{
        padding:30px;
    }

    .stats-left h3{
        font-size:70px;
    }

    .stats-center h4{
        font-size:24px;
    }
}
/* fifth section end */

/* sixth section start */
.gp-workflow-section{
    background:
        radial-gradient(circle at top, rgba(199,150,83,.08), transparent 18%),
        linear-gradient(180deg, #f7fbfc 0%, #eef6f8 100%);
    padding:110px 0;
    color:#061e29;
    position:relative;
    overflow:hidden;
}

.gp-workflow-section::before{
    content:"";
    position:absolute;
    width:360px;
    height:360px;
    right:-120px;
    top:-80px;
    background:radial-gradient(circle, rgba(199,150,83,.12), transparent 70%);
    pointer-events:none;
}

.gp-workflow-container{
    width:88%;
    max-width:1320px;
    margin:auto;
    display:grid;
    grid-template-columns:440px 1fr;
    gap:56px;
    align-items:start;
}

.gp-workflow-left{
    position:sticky;
    top:110px;
    align-self:flex-start;
    padding:38px 32px;
    background:
        linear-gradient(180deg, #0a2a3a 0%, #061e29 100%);
    border-radius:32px;
    color:#fff;
    box-shadow:0 30px 80px rgba(6,30,41,.18);
    z-index:5;
    overflow:hidden;
}

.gp-workflow-left::after{
    content:"";
    position:absolute;
    inset:auto -50px -70px auto;
    width:140px;
    height:140px;
    background:radial-gradient(circle, rgba(224,181,109,.22), transparent 70%);
}

.gp-workflow-left span{
    display:inline-flex;
    align-items:center;
    gap:8px;
    color:#e0b56d;
    font-size:13px;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:2px;
    line-height:1.6;
}

.gp-workflow-left span::before{
    content:"";
    width:38px;
    height:2px;
    background:#e0b56d;
}

.gp-workflow-left h2{
    color:white;
    font-size:42px;
    line-height:1.12;
    margin:18px 0 16px;
}

.gp-workflow-left p{
    color:#dce8ed;
    line-height:1.8;
    font-size:17px;
    margin-bottom:24px;
}

.gp-workflow-metrics{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:12px;
}

.gp-workflow-metric{
    background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.08);
    border-radius:18px;
    padding:14px 10px;
    text-align:center;
}

.gp-workflow-metric strong{
    display:block;
    color:#fff;
    font-size:22px;
    line-height:1;
    margin-bottom:6px;
}

.gp-workflow-metric span{
    color:#cbdfe5;
    font-size:12px;
    text-transform:uppercase;
    letter-spacing:.08em;
}

.gp-workflow-right{
    position:relative;
    display:grid;
    gap:18px;
}

.gp-flow-block{
    position:relative;
    display:grid;
    grid-template-columns:90px 1fr;
    gap:24px;
    background:#fff;
    border-radius:26px;
    padding:26px 28px;
    box-shadow:0 18px 55px rgba(6,30,41,.08);
    border:1px solid #e4eef2;
    transition:transform .25s ease, box-shadow .25s ease;
}

.gp-flow-block:hover{
    transform:translateY(-4px);
    box-shadow:0 24px 65px rgba(6,30,41,.12);
}

.gp-flow-icon{
    width:72px;
    height:72px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg, #f7e6c4, #c79653);
    color:#061e29;
    font-size:28px;
    font-weight:900;
    box-shadow:inset 0 -8px 18px rgba(6,30,41,.08);
}

.gp-flow-block h3{
    font-size:24px;
    color:#061e29;
    margin-bottom:10px;
}

.gp-flow-block p{
    color:#415762;
    line-height:1.75;
    margin-bottom:14px;
    font-size:15px;
}

.gp-flow-block ul{
    display:grid;
    grid-template-columns:1fr;
    gap:8px;
    list-style:none;
    margin:0;
    padding:0;
}

.gp-flow-block li{
    position:relative;
    padding-left:24px;
    color:#1f3b47;
    line-height:1.5;
    font-size:14px;
}

.gp-flow-block li::before{
    content:"";
    position:absolute;
    left:0;
    top:9px;
    width:8px;
    height:8px;
    border-radius:50%;
    background:#c79653;
    box-shadow:0 0 0 4px rgba(199,150,83,.15);
}

.gp-featured-premium{
    width:88%;
    max-width:1320px;
    margin:70px auto 0;
    background:#061e29;
    padding:18px 36px;
    border-radius:24px;
    box-shadow:0 25px 70px rgba(6,30,41,.18);
}

.gp-featured-inner{
    display:flex;
    align-items:center;
    gap:32px;
}

.gp-featured-inner span{
    color:#fff;
    font-weight:800;
    white-space:nowrap;
    letter-spacing:.06em;
    text-transform:uppercase;
}

.gp-logo-track{
    display:flex;
    align-items:center;
    gap:72px;
    width:max-content;
    animation:logoScroll 22s linear infinite;
}

.gp-logo-track img{
    max-height:120px;
    max-width:220px;
    object-fit:contain;
    flex:0 0 auto;
    filter:grayscale(1) brightness(1.1);
}

.gp-logo-marquee{
    width:100%;
    overflow:hidden;
    position:relative;
}

.gp-logo-marquee::before,
.gp-logo-marquee::after{
    content:"";
    position:absolute;
    top:0;
    width:70px;
    height:100%;
    z-index:2;
    pointer-events:none;
}

.gp-logo-marquee::before{
    left:0;
    background:linear-gradient(90deg,#061e29,transparent);
}

.gp-logo-marquee::after{
    right:0;
    background:linear-gradient(270deg,#061e29,transparent);
}

@keyframes logoScroll{
    0%{
        transform:translateX(0);
    }
    100%{
        transform:translateX(-33.333%);
    }
}

.gp-logo-marquee:hover .gp-logo-track{
    animation-play-state:paused;
}

@media(max-width:991px){
    .gp-workflow-section{
        background:#fff;
        padding:70px 0;
    }

    .gp-workflow-container{
        grid-template-columns:1fr;
        gap:40px;
    }

    .gp-workflow-left{
        position:relative;
        top:auto;
    }

    .gp-featured-inner{
        flex-direction:column;
        text-align:center;
    }

    .gp-logo-track{
        flex-wrap:wrap;
        justify-content:center;
        gap:40px;
    }
}

@media(max-width:600px){
    .gp-workflow-container,
    .gp-featured-premium{
        width:92%;
    }

    .gp-workflow-left{
        padding:30px 22px;
    }

    .gp-workflow-left h2{
        font-size:30px;
    }

    .gp-workflow-metrics{
        grid-template-columns:1fr;
    }

    .gp-flow-block{
        grid-template-columns:1fr;
        gap:16px;
        padding:22px;
    }

    .gp-flow-icon{
        width:58px;
        height:58px;
        font-size:22px;
        border-radius:14px;
    }

    .gp-featured-premium{
        padding:24px 18px;
    }
}
/* sixth section end */

/* seventh section start */
.gp-steps-orbit-section{
    background:
        radial-gradient(circle at 20% 15%, rgba(199,150,83,.18), transparent 18%),
        radial-gradient(circle at 82% 28%, rgba(224,181,109,.1), transparent 16%),
        linear-gradient(135deg,#061e29 0%,#0a3042 100%);
    padding:110px 0 130px;
    color:#fff;
    overflow:hidden;
}

.gp-steps-container{
    width:88%;
    max-width:1320px;
    margin:auto;
}

.gp-steps-head{
    text-align:center;
    max-width:920px;
    margin:0 auto 72px;
}

.gp-steps-head span{
    display:inline-block;
    position:relative;
    color:#e0b56d;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:14px;
    padding-bottom:14px;
}

.gp-steps-head span::after{
    content:"";
    position:absolute;
    left:50%;
    bottom:0;
    transform:translateX(-50%);
    width:90px;
    height:2px;
    background:#e0b56d;
}

.gp-steps-head h2{
    color:white;
    font-size:46px;
    line-height:1.12;
    margin:18px 0;
}

.gp-steps-head p{
    color:#dce8ed;
    font-size:18px;
    line-height:1.8;
}

.gp-orbit-wrap{
    position:relative;
    min-height:980px;
    max-width:1180px;
    margin:0 auto;
}

.gp-orbit-wrap::before{
    content:"";
    position:absolute;
    left:50%;
    top:50%;
    width:640px;
    height:640px;
    border:1px dashed rgba(224,181,109,.4);
    border-radius:50%;
    transform:translate(-50%,-50%);
}

.gp-orbit-wrap::after{
    content:"";
    position:absolute;
    left:50%;
    top:50%;
    width:420px;
    height:420px;
    border:1px solid rgba(255,255,255,.08);
    border-radius:50%;
    transform:translate(-50%,-50%);
}

.gp-orbit-center{
    position:absolute;
    left:50%;
    top:50%;
    width:260px;
    height:260px;
    transform:translate(-50%,-50%);
    border-radius:50%;
    background:linear-gradient(180deg, #e0b56d 0%, #c79653 100%);
    color:#061e29;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:32px;
    box-shadow:0 32px 90px rgba(0,0,0,.30);
    z-index:5;
}

.gp-orbit-center h3{
    font-family:'Playfair Display',serif;
    font-size:54px;
    margin-bottom:6px;
    line-height:1;
}

.gp-orbit-center p{
    font-weight:800;
    line-height:1.35;
    font-size:15px;
    max-width:155px;
}

.gp-orbit-step{
    position:absolute;
    width:320px;
    background:linear-gradient(180deg, rgba(255,255,255,.08), rgba(255,255,255,.04));
    border:1px solid rgba(255,255,255,.1);
    backdrop-filter:blur(14px);
    border-radius:26px;
    padding:24px 22px;
    box-shadow:0 22px 60px rgba(0,0,0,.18);
    z-index:3;
}

.step-one{
    left:0;
    top:180px;
}

.step-two{
    right:0;
    top:180px;
}

.step-three{
    left:50%;
    top:0;
    transform:translateX(-50%);
}

.step-four{
    left:80px;
    bottom:70px;
}

.step-five{
    right:80px;
    bottom:70px;
}

.gp-step-num{
    width:58px;
    height:58px;
    border-radius:18px;
    background:linear-gradient(180deg, #f0c986, #c79653);
    color:#061e29;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:900;
    margin-bottom:18px;
    box-shadow:inset 0 -6px 0 rgba(6,30,41,.08);
}

.gp-orbit-step h4{
    font-size:22px;
    color:#fff;
    margin-bottom:10px;
}

.gp-orbit-step p{
    color:#dce8ed;
    line-height:1.7;
    font-size:15px;
    margin:0;
}

@media(max-width:1100px){
    .gp-orbit-wrap{
        min-height:auto;
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:24px;
    }

    .gp-orbit-wrap::before,
    .gp-orbit-wrap::after,
    .gp-orbit-center{
        display:none;
    }

    .gp-orbit-step{
        position:relative;
        width:auto;
        inset:auto;
        transform:none;
    }
}

@media(max-width:700px){
    .gp-steps-orbit-section{
        padding:70px 0;
    }

    .gp-steps-container{
        width:92%;
    }

    .gp-steps-head h2{
        font-size:34px;
    }

    .gp-orbit-wrap{
        grid-template-columns:1fr;
    }
}
/* seventh section end */

/* eigth section start */
/* .gp-why-section{
    background:#fff;
    padding:110px 0;
    color:#061e29;
}

.gp-why-container{
    width:88%;
    max-width:1180px;
    margin:auto;
}

.gp-why-head{
    text-align:center;
    margin-bottom:55px;
}

.gp-why-head span{
    display:inline-block;
    position:relative;
    color:#c79653;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:14px;
    padding-bottom:14px;
}

.gp-why-head span::after{
    content:"";
    position:absolute;
    left:20%;
    bottom:0;
    transform:translateX(-50%);
    width:90px;
    height:2px;
    background:#c79653;
}

.gp-why-head h2{
    font-size:40px;
    margin:16px 0;
    color:#061e29;
}

.gp-why-head h3{
    font-size:30px;
    color:#c79653;
}

.gp-why-board{
    background:#061e29;
    border-radius:30px;
    padding:18px;
    box-shadow:0 30px 80px rgba(6,30,41,.18);
    position:relative;
    overflow:hidden;
}

.gp-why-board:before{
    content:"";
    position:absolute;
    width:260px;
    height:260px;
    border-radius:50%;
    background:#c79653;
    opacity:.12;
    right:-90px;
    top:-90px;
}

.gp-why-row{
    position:relative;
    z-index:1;
    display:grid;
    grid-template-columns:1.2fr 1.9fr;
    align-items:center;
    background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.09);
    border-radius:18px;
    margin-bottom:12px;
    overflow:hidden;
}

.gp-why-row:last-child{
    margin-bottom:0;
}

.gp-why-row > div{
    padding:22px 26px;
    color:#fff;
    font-weight:700;
}

.gp-why-row > div:first-child{
    color:#dce8ed;
}

.gp-why-row > div:nth-child(2){
    background:rgba(199,150,83,.14);
    border-left:1px solid rgba(199,150,83,.35);
    font-size:18px;
}

.gp-why-row span{
    color:#e0b56d;
    font-weight:900;
    margin-right:8px;
}

.gp-why-row small{
    color:#dce8ed;
    font-size:14px;
    font-weight:600;
}

.gp-why-title{
    background:#c79653;
}

.gp-why-title > div{
    color:#061e29 !important;
    text-transform:uppercase;
    letter-spacing:1px;
    font-size:14px;
}

.gp-why-title > div:nth-child(2){
    background:#e0b56d;
    border-left:1px solid rgba(6,30,41,.18);
}

@media(max-width:768px){
    .gp-why-section{
        padding:70px 0;
    }

    .gp-why-container{
        width:92%;
    }

    .gp-why-head h2{
        font-size:34px;
    }

    .gp-why-head h3{
        font-size:24px;
    }

    .gp-why-row{
        grid-template-columns:1fr;
    }

    .gp-why-row > div:nth-child(2){
        border-left:none;
        border-top:1px solid rgba(199,150,83,.35);
    }
} */
    .gp-why-section {
    background: #fff;
    padding: 110px 0;
    color: #061e29;
    position: relative;
    overflow: hidden;
}

/* Animated background particles */
.gp-why-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 80%, rgba(199,150,83,0.03) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(199,150,83,0.03) 0%, transparent 50%);
    pointer-events: none;
}

.gp-why-container {
    width: 88%;
    max-width: 1180px;
    margin: auto;
    position: relative;
    z-index: 1;
}

/* ===== HEADER ===== */
.gp-why-head {
    text-align: center;
    margin-bottom: 55px;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 0.8s ease forwards;
}

.gp-why-head span {
    display: inline-block;
    position: relative;
    color: #c79653;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 14px;
    padding-bottom: 14px;
}

.gp-why-head span::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%) scaleX(0);
    width: 90px;
    height: 2px;
    background: #c79653;
    animation: lineGrow 0.6s ease 0.4s forwards;
}

.gp-why-head h2 {
    font-size: 40px;
    margin: 16px 0 8px;
    color: #061e29;
    font-weight: 700;
    line-height: 1.2;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.2s forwards;
}

.gp-why-head h3 {
    font-size: 30px;
    color: #c79653;
    font-weight: 400;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.35s forwards;
}

/* ===== MAIN LAYOUT ===== */
.gp-why-main {
    display: grid;
    grid-template-columns: 1fr 1.1fr;
    gap: 40px;
    align-items: start;
}

/* ===== LEFT: CARDS ===== */
.gp-why-cards {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.gp-why-card {
    background: #fff;
    border: 1px solid rgba(199,150,83,0.15);
    border-radius: 16px;
    padding: 28px 28px 28px 80px;
    position: relative;
    box-shadow: 0 4px 20px rgba(6,30,41,0.04);
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    cursor: default;
    opacity: 0;
    transform: translateX(-30px);
    animation: slideInLeft 0.7s ease forwards;
}

.gp-why-card:nth-child(1) { animation-delay: 0.1s; }
.gp-why-card:nth-child(2) { animation-delay: 0.2s; }
.gp-why-card:nth-child(3) { animation-delay: 0.3s; }
.gp-why-card:nth-child(4) { animation-delay: 0.4s; }

.gp-why-card:hover {
    transform: translateX(8px) translateY(-4px);
    box-shadow: 0 12px 40px rgba(6,30,41,0.1);
    border-color: rgba(199,150,83,0.35);
}

.gp-why-card-num {
    position: absolute;
    left: 24px;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #c79653;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 14px;
    transition: all 0.3s ease;
}

.gp-why-card:hover .gp-why-card-num {
    transform: translateY(-50%) scale(1.1);
    background: #e0b56d;
    box-shadow: 0 4px 15px rgba(199,150,83,0.4);
}

.gp-why-card h4 {
    font-size: 16px;
    font-weight: 700;
    color: #061e29;
    margin-bottom: 6px;
    letter-spacing: 0.3px;
}

.gp-why-card p {
    font-size: 14px;
    color: #5a6b75;
    line-height: 1.6;
    font-weight: 400;
}

/* ===== RIGHT: TABLE ===== */
.gp-why-board {
    background: #061e29;
    border-radius: 24px;
    padding: 20px;
    box-shadow: 0 30px 80px rgba(6,30,41,0.18);
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateX(30px);
    animation: slideInRight 0.8s ease 0.3s forwards;
}

.gp-why-board::before {
    content: '';
    position: absolute;
    width: 260px;
    height: 260px;
    border-radius: 50%;
    background: #c79653;
    opacity: 0.12;
    right: -90px;
    top: -90px;
    animation: float 6s ease-in-out infinite;
}

.gp-why-board::after {
    content: '';
    position: absolute;
    width: 180px;
    height: 180px;
    border-radius: 50%;
    background: #c79653;
    opacity: 0.06;
    left: -60px;
    bottom: -60px;
    animation: float 8s ease-in-out infinite reverse;
}

.gp-why-table-label {
    text-align: center;
    color: #c79653;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 16px;
    opacity: 0.8;
}

.gp-why-row {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr;
    align-items: center;
    border-radius: 14px;
    margin-bottom: 8px;
    overflow: hidden;
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(15px);
    animation: fadeUp 0.5s ease forwards;
}

.gp-why-row:nth-child(2) { animation-delay: 0.4s; }
.gp-why-row:nth-child(3) { animation-delay: 0.5s; }
.gp-why-row:nth-child(4) { animation-delay: 0.6s; }
.gp-why-row:nth-child(5) { animation-delay: 0.7s; }
.gp-why-row:nth-child(6) { animation-delay: 0.8s; }
.gp-why-row:nth-child(7) { animation-delay: 0.9s; }
.gp-why-row:nth-child(8) { animation-delay: 1.0s; }
.gp-why-row:nth-child(9) { animation-delay: 1.1s; }
.gp-why-row:nth-child(10) { animation-delay: 1.2s; }

.gp-why-row:hover {
    background: rgba(255,255,255,0.08) !important;
    transform: translateX(4px);
}

.gp-why-row:last-child {
    margin-bottom: 0;
}

.gp-why-row > div {
    padding: 16px 20px;
    color: #fff;
    font-weight: 600;
    font-size: 14px;
}

.gp-why-row > div:first-child {
    color: #dce8ed;
    font-weight: 500;
}

.gp-why-row > div:nth-child(2) {
    text-align: center;
    color: #e0b56d;
    font-weight: 700;
}

.gp-why-row > div:nth-child(3) {
    text-align: center;
    color: #ff6b6b;
    font-weight: 600;
    font-size: 13px;
}

.gp-why-row span {
    color: #e0b56d;
    font-weight: 900;
    margin-right: 6px;
    display: inline-block;
    animation: checkPop 0.4s ease forwards;
}

.gp-why-row small {
    color: #8a9ba5;
    font-size: 12px;
    font-weight: 400;
    display: block;
    margin-top: 2px;
}

.gp-why-title {
    background: rgba(199,150,83,0.2);
    border: 1px solid rgba(199,150,83,0.3);
    margin-bottom: 12px;
}

.gp-why-title:hover {
    background: rgba(199,150,83,0.25) !important;
    transform: none !important;
}

.gp-why-title > div {
    color: #e0b56d !important;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-size: 12px;
    font-weight: 800;
}

.gp-why-title > div:first-child {
    color: #c79653 !important;
}

.gp-why-title > div:nth-child(2) {
    color: #e0b56d !important;
}

.gp-why-title > div:nth-child(3) {
    color: #ff8a8a !important;
}

/* ===== ANIMATIONS ===== */
@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes lineGrow {
    to {
        transform: translateX(-50%) scaleX(1);
    }
}

@keyframes float {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-15px, 15px); }
}

@keyframes checkPop {
    0% { transform: scale(0); }
    60% { transform: scale(1.3); }
    100% { transform: scale(1); }
}

@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
    .gp-why-main {
        grid-template-columns: 1fr;
        gap: 50px;
    }
    
    .gp-why-cards {
        max-width: 600px;
        margin: 0 auto;
    }
    
    .gp-why-board {
        max-width: 700px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .gp-why-section {
        padding: 70px 0;
    }
    
    .gp-why-container {
        width: 92%;
    }
    
    .gp-why-head h2 {
        font-size: 28px;
    }
    
    .gp-why-head h3 {
        font-size: 22px;
    }
    
    .gp-why-row {
        grid-template-columns: 1fr;
    }
    
    .gp-why-row > div {
        padding: 12px 16px;
    }
    
    .gp-why-row > div:nth-child(2),
    .gp-why-row > div:nth-child(3) {
        text-align: left;
        border-top: 1px solid rgba(255,255,255,0.06);
    }
    
    .gp-why-title > div:nth-child(2),
    .gp-why-title > div:nth-child(3) {
        text-align: left;
    }
    
    .gp-why-card {
        padding: 20px 20px 20px 70px;
    }
    
    .gp-why-card-num {
        left: 18px;
        width: 36px;
        height: 36px;
        font-size: 13px;
    }
}

@media (max-width: 480px) {
    .gp-why-head h2 {
        font-size: 24px;
    }
    
    .gp-why-head h3 {
        font-size: 18px;
    }
    
    .gp-why-card {
        padding: 18px 18px 18px 60px;
    }
    
    .gp-why-card-num {
        left: 14px;
        width: 32px;
        height: 32px;
        font-size: 12px;
    }
    
    .gp-why-card h4 {
        font-size: 15px;
    }
    
    .gp-why-card p {
        font-size: 13px;
    }
}
/* eigth section end */

/* nineth section start */
/* .gp-practice-command-section{
    background:#061e29;
    padding:100px 0;
    color:#fff;
    overflow:hidden;
}

.gp-practice-command-container{
    width:88%;
    max-width:1320px;
    margin:auto;
    display:grid;
    grid-template-columns:36% 64%;
    gap:45px;
    align-items:center;
}

.gp-practice-command-left span{
    display:inline-block;
    position:relative;
    color:#e0b56d;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:3px;
    font-size:14px;
    padding-bottom:14px;
}

.gp-practice-command-left span::after{
    content:"";
    position:absolute;
    left:0;
    bottom:0;
    width:90px;
    height:2px;
    background:#e0b56d;
}

.gp-practice-command-left h2{
    font-size:45px;
    line-height:1.18;
    margin:22px 0;
    color:#fff !important;
}

.gp-practice-command-left p{
    color:#dce8ed;
    font-size:18px;
    line-height:1.8;
    max-width:520px;
}

.gp-practice-command-right{
    min-height:560px;
    position:relative;
    border-radius:36px;
    background:linear-gradient(135deg,#0b3144,#123f55);
    border:1px solid rgba(255,255,255,.12);
    box-shadow:0 30px 80px rgba(0,0,0,.25);
    padding:40px;
}

.gp-practice-command-right:before{
    content:"";
    position:absolute;
    inset:35px;
    border:1px dashed rgba(224,181,109,.35);
    border-radius:26px;
}

.gp-main-practice{
    position:absolute;
    left:50%;
    top:40%;
    width:230px;
    height:200px;
    border-radius:30px;
    background:#c79653;
    color:#061e29;
    transform:translate(-50%,-50%) rotate(0deg);
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:28px;
    z-index:3;
    box-shadow:0 30px 80px rgba(0,0,0,.28);
}

.gp-main-practice small{
    font-weight:900;
    text-transform:uppercase;
    letter-spacing:2px;
    margin-bottom:8px;
}

.gp-main-practice strong{
    font-size:85px;
    font-family:'Playfair Display',serif;
    margin-top:-15px;
    margin-bottom:15px;
    line-height:1;
}

.gp-main-practice span{
    font-size:20px;
    font-weight:900;
    line-height:1.2;
}

.gp-mini-practice{
    position:absolute;
    width:190px;
    min-height:118px;
    background:#fff;
    color:#061e29;
    border-radius:22px;
    padding:22px;
    z-index:4;
    box-shadow:0 20px 50px rgba(0,0,0,.20);
}

.gp-mini-practice b{
    display:block;
    color:#c79653;
    font-size:38px;
    font-family:'Playfair Display',serif;
    line-height:1;
    margin-bottom:8px;
}

.gp-mini-practice span{
    display:block;
    font-weight:900;
    font-size:14px;
    line-height:1.35;
}

.p1{
    left:50px;
    top:50px;
}

.p2{
    right:50px;
    top:50px;
}

.p3s{
    right:45px;
    top:245px;
}

.p4{
    left:70px;
    bottom:225px;
}

.p5{
    left:30%;
    bottom:45px;
    transform:translateX(-50%);
}

.p6{
    right:200px;
    bottom:45px;
}

@media(max-width:991px){
    .gp-practice-command-container{
        grid-template-columns:1fr;
    }

    .gp-practice-command-right{
        min-height:auto;
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:20px;
        padding:25px;
    }

    .gp-practice-command-right:before{
        display:none;
    }

    .gp-main-practice,
    .gp-mini-practice{
        position:relative;
        inset:auto;
        transform:none;
        width:auto;
        height:auto;
    }
}

@media(max-width:650px){
    .gp-practice-command-container{
        width:92%;
    }

    .gp-practice-command-left h2{
        font-size:32px;
    }

    .gp-practice-command-right{
        grid-template-columns:1fr;
    }
} */
    .gp-practice-command-section {
    background: #061e29;
    padding: 120px 0;
    color: #fff;
    overflow: hidden;
    position: relative;
}

/* Animated background particles */
.gp-practice-command-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 10% 20%, rgba(199,150,83,0.04) 0%, transparent 40%),
        radial-gradient(circle at 90% 80%, rgba(199,150,83,0.03) 0%, transparent 40%);
    pointer-events: none;
}

.gp-practice-command-container {
    width: 88%;
    max-width: 1320px;
    margin: auto;
    display: grid;
    grid-template-columns: 36% 64%;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 1;
}

/* ===== LEFT COLUMN ===== */
.gp-practice-command-left {
    opacity: 0;
    transform: translateX(-40px);
    animation: slideInLeft 0.9s cubic-bezier(0.22, 1, 0.36, 1) forwards;
}

.gp-practice-command-left span {
    display: inline-block;
    position: relative;
    color: #e0b56d;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 13px;
    padding-bottom: 16px;
    opacity: 0;
    animation: fadeIn 0.6s ease 0.2s forwards;
}

.gp-practice-command-left span::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background: #e0b56d;
    animation: lineExpand 0.7s ease 0.5s forwards;
}

.gp-practice-command-left h2 {
    font-size: 42px;
    line-height: 1.15;
    margin: 28px 0 20px;
    color: #fff;
    font-weight: 700;
    letter-spacing: -0.5px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.4s forwards;
}

.gp-practice-command-left p {
    color: #8a9ba5;
    font-size: 17px;
    line-height: 1.75;
    max-width: 480px;
    font-weight: 400;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.55s forwards;
}

/* ===== RIGHT COLUMN ===== */
.gp-practice-command-right {
    min-height: 600px;
    position: relative;
    border-radius: 40px;
    background: linear-gradient(145deg, #0b3144, #123f55);
    border: 1px solid rgba(255,255,255,0.08);
    box-shadow: 
        0 30px 80px rgba(0,0,0,0.3),
        inset 0 1px 0 rgba(255,255,255,0.05);
    padding: 45px;
    opacity: 0;
    transform: translateX(40px);
    animation: slideInRight 1s cubic-bezier(0.22, 1, 0.36, 1) 0.2s forwards;
}

/* Inner dashed border with animation */
.gp-practice-command-right::before {
    content: '';
    position: absolute;
    inset: 40px;
    border: 1px dashed rgba(224,181,109,0.25);
    border-radius: 30px;
    animation: borderPulse 4s ease-in-out infinite;
}

/* Floating ambient circles */
.gp-practice-command-right::after {
    content: '';
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(199,150,83,0.08) 0%, transparent 70%);
    top: -80px;
    right: -80px;
    animation: floatSlow 8s ease-in-out infinite;
    pointer-events: none;
}

/* ===== MAIN CARD (Center) ===== */
.gp-main-practice {
    position: absolute;
    left: 50%;
    top: 42%;
    width: 240px;
    height: 210px;
    border-radius: 28px;
    background: linear-gradient(145deg, #c79653, #e0b56d);
    color: #061e29;
    transform: translate(-50%, -50%) scale(0.8);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 30px;
    z-index: 10;
    box-shadow: 
        0 30px 80px rgba(0,0,0,0.35),
        0 0 0 4px rgba(199,150,83,0.15);
    opacity: 0;
    animation: mainCardPop 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.6s forwards;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s ease;
}

.gp-main-practice:hover {
    transform: translate(-50%, -50%) scale(1.05) !important;
    box-shadow: 
        0 40px 100px rgba(0,0,0,0.4),
        0 0 0 6px rgba(199,150,83,0.25);
}

.gp-main-practice small {
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-size: 11px;
    margin-bottom: 6px;
    opacity: 0.9;
}

.gp-main-practice strong {
    font-size: 90px;
    font-family: 'Playfair Display', serif;
    margin-top: -10px;
    margin-bottom: 10px;
    line-height: 1;
    font-weight: 800;
    background: linear-gradient(180deg, #061e29 0%, #0b3144 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.gp-main-practice span {
    font-size: 16px;
    font-weight: 800;
    line-height: 1.3;
    max-width: 180px;
}

/* ===== MINI CARDS ===== */
.gp-mini-practice {
    position: absolute;
    width: 195px;
    min-height: 120px;
    background: #fff;
    color: #061e29;
    border-radius: 20px;
    padding: 24px;
    z-index: 5;
    box-shadow: 0 20px 50px rgba(0,0,0,0.18);
    opacity: 0;
    transform: scale(0.6) translateY(20px);
    animation: miniCardPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    cursor: default;
}

.gp-mini-practice::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #c79653, #e0b56d);
    border-radius: 20px 20px 0 0;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gp-mini-practice:hover {
    transform: scale(1.08) translateY(-8px) !important;
    box-shadow: 0 30px 70px rgba(0,0,0,0.25);
    z-index: 20;
}

.gp-mini-practice:hover::before {
    opacity: 1;
}

.gp-mini-practice b {
    display: block;
    color: #c79653;
    font-size: 42px;
    font-family: 'Playfair Display', serif;
    line-height: 1;
    margin-bottom: 8px;
    font-weight: 700;
    transition: transform 0.3s ease;
}

.gp-mini-practice:hover b {
    transform: scale(1.1);
}

.gp-mini-practice span {
    display: block;
    font-weight: 800;
    font-size: 13px;
    line-height: 1.4;
    color: #061e29;
}

/* Card positions with staggered delays */
.p1 {
    left: 55px;
    top: 55px;
    animation-delay: 0.7s;
}

.p2 {
    right: 55px;
    top: 55px;
    animation-delay: 0.8s;
}

.p3s {
    right: 50px;
    top: 255px;
    animation-delay: 0.9s;
}

.p4 {
    left: 75px;
    bottom: 235px;
    animation-delay: 1.0s;
}

.p5 {
    left: 32%;
    bottom: 50px;
    transform: translateX(-50%) scale(0.6) translateY(20px);
    animation-name: miniCardPopCenter;
    animation-delay: 1.1s;
}

.p6 {
    right: 210px;
    bottom: 50px;
    animation-delay: 1.2s;
}

/* Connection lines between cards */
.gp-practice-command-right .connector {
    position: absolute;
    background: linear-gradient(90deg, rgba(199,150,83,0.15), rgba(199,150,83,0.05));
    z-index: 2;
    opacity: 0;
    animation: fadeIn 0.5s ease 1.3s forwards;
}

.connector-1 {
    width: 80px;
    height: 2px;
    left: 250px;
    top: 115px;
    transform: rotate(-25deg);
    transform-origin: left center;
}

.connector-2 {
    width: 80px;
    height: 2px;
    right: 250px;
    top: 115px;
    transform: rotate(25deg);
    transform-origin: right center;
}

.connector-3 {
    width: 60px;
    height: 2px;
    right: 245px;
    top: 315px;
    transform: rotate(35deg);
    transform-origin: right center;
}

.connector-4 {
    width: 70px;
    height: 2px;
    left: 270px;
    bottom: 295px;
    transform: rotate(25deg);
    transform-origin: left center;
}

/* ===== ANIMATIONS ===== */
@keyframes slideInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeIn {
    to { opacity: 1; }
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes lineExpand {
    to { width: 90px; }
}

@keyframes mainCardPop {
    0% {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.6);
    }
    60% {
        transform: translate(-50%, -50%) scale(1.08);
    }
    100% {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }
}

@keyframes miniCardPop {
    0% {
        opacity: 0;
        transform: scale(0.6) translateY(20px);
    }
    70% {
        transform: scale(1.05) translateY(-4px);
    }
    100% {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

@keyframes miniCardPopCenter {
    0% {
        opacity: 0;
        transform: translateX(-50%) scale(0.6) translateY(20px);
    }
    70% {
        transform: translateX(-50%) scale(1.05) translateY(-4px);
    }
    100% {
        opacity: 1;
        transform: translateX(-50%) scale(1) translateY(0);
    }
}

@keyframes floatSlow {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-20px, 20px); }
}

@keyframes borderPulse {
    0%, 100% { border-color: rgba(224,181,109,0.25); }
    50% { border-color: rgba(224,181,109,0.45); }
}

@keyframes countUp {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1200px) {
    .gp-practice-command-container {
        grid-template-columns: 1fr;
        gap: 60px;
    }
    
    .gp-practice-command-left {
        text-align: center;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .gp-practice-command-left span::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .gp-practice-command-left p {
        max-width: 100%;
    }
    
    .gp-practice-command-right {
        min-height: 600px;
        max-width: 800px;
        margin: 0 auto;
    }
}

@media (max-width: 991px) {
    .gp-practice-command-section {
        padding: 80px 0;
    }
    
    .gp-practice-command-right {
        min-height: auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        padding: 30px;
    }
    
    .gp-practice-command-right::before,
    .gp-practice-command-right::after,
    .connector {
        display: none;
    }
    
    .gp-main-practice,
    .gp-mini-practice {
        position: relative;
        inset: auto;
        transform: none;
        width: auto;
        height: auto;
        animation: miniCardPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }
    
    .gp-main-practice {
        grid-column: 1 / -1;
        max-width: 300px;
        margin: 0 auto;
        animation: mainCardPop 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.3s forwards;
    }
    
    .gp-main-practice:hover {
        transform: scale(1.05) !important;
    }
    
    .p5 {
        transform: none;
        animation: miniCardPop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }
    
    .p5:hover {
        transform: scale(1.08) translateY(-8px) !important;
    }
}

@media (max-width: 650px) {
    .gp-practice-command-section {
        padding: 60px 0;
    }
    
    .gp-practice-command-container {
        width: 92%;
    }
    
    .gp-practice-command-left h2 {
        font-size: 28px;
    }
    
    .gp-practice-command-left p {
        font-size: 15px;
    }
    
    .gp-practice-command-right {
        grid-template-columns: 1fr;
        padding: 25px;
        border-radius: 24px;
    }
    
    .gp-main-practice {
        height: auto;
        padding: 25px;
    }
    
    .gp-main-practice strong {
        font-size: 64px;
    }
    
    .gp-mini-practice {
        padding: 20px;
    }
    
    .gp-mini-practice b {
        font-size: 36px;
    }
}
/* nigth section end */

/* ten section start */
/* .gp-agency-review-section{
    background:#fff;
    padding:110px 0;
    color:#061e29;
    overflow:hidden;
}

.gp-agency-review-container{
    width:88%;
    max-width:1250px;
    margin:auto;
}

.gp-agency-review-head{
    max-width:900px;
    margin:0 auto 70px;
    text-align:center;
}

.gp-agency-review-head span{
    display:inline-block;
    position:relative;
    color:#c79653;
    font-weight:900;
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:14px;
    padding-bottom:14px;
}

.gp-agency-review-head span::after{
    content:"";
    position:absolute;
    left:11%;
    bottom:0;
    transform:translateX(-50%);
    width:90px;
    height:2px;
    background:#c79653;
}

.gp-agency-review-head h2{
    font-size:38px;
    line-height:1.2;
    margin-top:18px;
    color:#061e29;
}

.gp-agency-review-head h2 em{
    color:#c79653;
    font-style:normal;
}

.gp-agency-review-layout{
    position:relative;
    min-height:620px;
    background:
        linear-gradient(135deg,#f7fafb,#ffffff);
    border:1px solid #dce8ed;
    border-radius:40px;
    box-shadow:0 30px 85px rgba(6,30,41,.10);
    padding:55px;
}

.gp-agency-review-layout:before{
    content:"";
    position:absolute;
    left:50%;
    top:50%;
    width:78%;
    height:2px;
    background:linear-gradient(90deg,transparent,#c79653,transparent);
    transform:translate(-50%,-50%);
}

.gp-agency-review-layout:after{
    content:"";
    position:absolute;
    left:50%;
    top:50%;
    width:2px;
    height:78%;
    background:linear-gradient(180deg,transparent,#c79653,transparent);
    transform:translate(-50%,-50%);
}

.gp-review-center{
    position:absolute;
    left:50%;
    top:20%;
    width:330px;
    height:330px;
    border-radius:50%;
    background:#061e29;
    color:#fff;
    transform:translate(-50%,-50%);
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:38px;
    z-index:4;
    border:8px solid #c79653;
    box-shadow:0 28px 70px rgba(6,30,41,.22);
}

.gp-review-center small{
    color:#e0b56d;
    text-transform:uppercase;
    letter-spacing:2px;
    font-weight:900;
    margin-bottom:12px;
}

.gp-review-center h3{
    color:white;
    font-size:34px;
    line-height:1.15;
}

.gp-review-center h3 span{
    color:#e0b56d;
}

.gp-review-side,
.gp-review-bottom{
    position:absolute;
    background:#fff;
    border:1px solid #dce8ed;
    border-radius:28px;
    padding:32px;
    box-shadow:0 20px 55px rgba(6,30,41,.10);
    z-index:3;
}

.left-review{
    left:55px;
    top:70px;
    width:330px;
}

.right-review{
    right:55px;
    top:70px;
    width:330px;
}

.gp-review-bottom{
    left:50%;
    bottom:9px;
    width:520px;
    transform:translateX(-50%);
    background:#061e29;
    color:#fff;
}

.gp-review-quote{
    width:52px;
    height:52px;
    background:#c79653;
    color:#fff;
    border-radius:50%;
    font-family:'Playfair Display',serif;
    font-size:50px;
    line-height:62px;
    text-align:center;
    margin-bottom:18px;
}

.gp-review-side p,
.gp-review-bottom p{
    color:#39525d;
    font-size:15.5px;
    line-height:1.8;
    margin-bottom:22px;
}

.gp-review-bottom p{
    color:#dce8ed;
}

.gp-review-person strong{
    display:block;
    color:#061e29;
    font-size:17px;
    margin-bottom:4px;
}

.gp-review-person span{
    color:#c79653;
    font-weight:800;
    font-size:14px;
}

.gp-review-bottom .gp-review-person strong{
    color:#fff;
}

@media(max-width:1050px){
    .gp-agency-review-layout{
        min-height:auto;
        display:grid;
        grid-template-columns:1fr;
        gap:22px;
        padding:30px;
    }

    .gp-agency-review-layout:before,
    .gp-agency-review-layout:after{
        display:none;
    }

    .gp-review-center,
    .gp-review-side,
    .gp-review-bottom{
        position:relative;
        inset:auto;
        width:auto;
        height:auto;
        transform:none;
        border-radius:28px;
    }

    .gp-review-center{
        order:-1;
    }
}

@media(max-width:600px){
    .gp-agency-review-section{
        padding:70px 0;
    }

    .gp-agency-review-container{
        width:92%;
    }

    .gp-agency-review-head h2{
        font-size:32px;
    }

    .gp-review-center h3{
        font-size:28px;
    }
} */
    .gp-agency-review-section {
    background: #fff;
    padding: 120px 0;
    color: #061e29;
    overflow: hidden;
    position: relative;
}

/* Subtle world map watermark background */
.gp-agency-review-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(199,150,83,0.02) 0%, transparent 50%),
        radial-gradient(circle at 80% 50%, rgba(199,150,83,0.02) 0%, transparent 50%);
    pointer-events: none;
}

.gp-agency-review-container {
    width: 88%;
    max-width: 1250px;
    margin: auto;
    position: relative;
    z-index: 1;
}

/* =========================================
   HEADER
========================================= */

.gp-agency-review-head {
    max-width: 900px;
    margin: 0 auto 70px;
    text-align: center;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 0.8s ease forwards;
}

.gp-agency-review-head span {
    display: inline-block;
    position: relative;
    color: #c79653;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 13px;
    padding-bottom: 14px;
    opacity: 0;
    animation: fadeIn 0.6s ease 0.2s forwards;
}

.gp-agency-review-head span::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%) scaleX(0);
    width: 90px;
    height: 2px;
    background: #c79653;
    animation: lineGrow 0.6s ease 0.5s forwards;
}

.gp-agency-review-head h2 {
    font-size: 40px;
    line-height: 1.2;
    margin-top: 20px;
    color: #061e29;
    font-weight: 700;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.3s forwards;
}

.gp-agency-review-head h2 em {
    color: #c79653;
    font-style: normal;
    font-weight: 700;
}

/* =========================================
   TESTIMONIAL GRID
========================================= */

.gp-agency-review-layout {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    position: relative;
}

/* =========================================
   TESTIMONIAL CARD
========================================= */

.gp-review-card {
    background: #fff;
    border: 1px solid #e8eef1;
    border-radius: 24px;
    padding: 40px 32px 32px;
    position: relative;
    box-shadow: 0 8px 30px rgba(6,30,41,0.06);
    transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s ease forwards;
    overflow: hidden;
}

.gp-review-card:nth-child(1) { animation-delay: 0.15s; }
.gp-review-card:nth-child(2) { animation-delay: 0.3s; }
.gp-review-card:nth-child(3) { animation-delay: 0.45s; }

.gp-review-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #c79653, #e0b56d);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
}

.gp-review-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(6,30,41,0.12);
    border-color: rgba(199,150,83,0.25);
}

.gp-review-card:hover::before {
    transform: scaleX(1);
}

/* Quote icon */
.gp-review-quote {
    position: absolute;
    top: 20px;
    left: 28px;
    font-family: 'Playfair Display', serif;
    font-size: 72px;
    color: #c79653;
    line-height: 1;
    opacity: 0.15;
    transition: all 0.4s ease;
}

.gp-review-card:hover .gp-review-quote {
    opacity: 0.3;
    transform: scale(1.1) translateY(-4px);
}

/* Avatar */
.gp-review-avatar {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #c79653;
    box-shadow: 0 4px 15px rgba(199,150,83,0.3);
    margin-bottom: 20px;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    position: relative;
    z-index: 2;
}

.gp-review-card:hover .gp-review-avatar {
    transform: scale(1.1) translateY(-5px);
    box-shadow: 0 8px 25px rgba(199,150,83,0.4);
}

/* Avatar ring animation */
.gp-review-avatar-wrap {
    position: relative;
    display: inline-block;
    margin-bottom: 20px;
}

.gp-review-avatar-wrap::after {
    content: '';
    position: absolute;
    inset: -6px;
    border-radius: 50%;
    border: 2px dashed rgba(199,150,83,0.3);
    animation: rotateRing 12s linear infinite;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.gp-review-card:hover .gp-review-avatar-wrap::after {
    opacity: 1;
}

/* Quote text */
.gp-review-card p {
    color: #4a5c65;
    font-size: 15.5px;
    line-height: 1.8;
    margin-bottom: 24px;
    position: relative;
    z-index: 1;
    transition: color 0.3s ease;
}

.gp-review-card:hover p {
    color: #2a3a42;
}

/* Person info */
.gp-review-person {
    position: relative;
    z-index: 1;
}

.gp-review-person strong {
    display: block;
    color: #061e29;
    font-size: 17px;
    font-weight: 700;
    margin-bottom: 4px;
    transition: color 0.3s ease;
}

.gp-review-card:hover .gp-review-person strong {
    color: #c79653;
}

.gp-review-person span {
    color: #8a9ba5;
    font-weight: 600;
    font-size: 14px;
    transition: color 0.3s ease;
}

.gp-review-card:hover .gp-review-person span {
    color: #c79653;
}

/* Decorative corner accent */
.gp-review-card::after {
    content: '';
    position: absolute;
    bottom: -30px;
    right: -30px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(199,150,83,0.06), transparent 70%);
    transition: all 0.5s ease;
}

.gp-review-card:hover::after {
    bottom: -20px;
    right: -20px;
    width: 100px;
    height: 100px;
    background: radial-gradient(circle, rgba(199,150,83,0.12), transparent 70%);
}

/* =========================================
   NAVIGATION DOTS
========================================= */

.gp-review-nav {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 12px;
    margin-top: 50px;
    opacity: 0;
    animation: fadeIn 0.6s ease 0.8s forwards;
}

.gp-review-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #dce8ed;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    border: none;
}

.gp-review-dot.active {
    background: #c79653;
    width: 32px;
    border-radius: 5px;
}

.gp-review-dot:hover {
    background: #e0b56d;
    transform: scale(1.3);
}

.gp-review-arrow {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #fff;
    border: 1px solid #e8eef1;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: #c79653;
    font-size: 18px;
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    box-shadow: 0 4px 15px rgba(6,30,41,0.08);
}

.gp-review-arrow:hover {
    background: #c79653;
    color: #fff;
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(199,150,83,0.3);
}

/* =========================================
   ANIMATIONS
========================================= */

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes lineGrow {
    from { transform: translateX(-50%) scaleX(0); }
    to { transform: translateX(-50%) scaleX(1); }
}

@keyframes rotateRing {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes floatAvatar {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 991px) {
    .gp-agency-review-section {
        padding: 80px 0;
    }
    
    .gp-agency-review-head h2 {
        font-size: 34px;
    }
    
    .gp-agency-review-layout {
        grid-template-columns: 1fr;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .gp-review-card {
        padding: 36px 28px 28px;
    }
}

@media (max-width: 600px) {
    .gp-agency-review-section {
        padding: 60px 0;
    }
    
    .gp-agency-review-container {
        width: 92%;
    }
    
    .gp-agency-review-head h2 {
        font-size: 28px;
    }
    
    .gp-review-card {
        padding: 32px 24px 24px;
    }
    
    .gp-review-avatar {
        width: 56px;
        height: 56px;
    }
    
    .gp-review-card p {
        font-size: 14.5px;
    }
    
    .gp-review-person strong {
        font-size: 16px;
    }
}
/* ten section end */

/* eleven section start */
/* .gp-faq-section{
    background:
        radial-gradient(circle at top left, rgba(199,150,83,.16), transparent 28%),
        linear-gradient(135deg,#061e29,#082c3d);
    padding:110px 0;
    color:#fff;
}

.gp-faq-container{
    width:88%;
    max-width:1320px;
    margin:auto;
    display:grid;
    grid-template-columns:360px 1fr;
    gap:70px;
    align-items:start;
}

.gp-faq-left{
    position:sticky;
    top:120px;
}

.gp-faq-left span{
    display:inline-flex;
    position:relative;
    color:#c79653;
    font-weight:900;
    padding:0px 10px;
    border-radius:40px;
    margin-bottom:30px;
}

.gp-faq-left span::after{
    content:"";
    position:absolute;
    left:80%;
    bottom:-14px;
    transform:translateX(-50%);
    width:90px;
    height:2px;
    background:#c79653;
}

.gp-faq-left h2{
    color:white;
    font-size:45px;
    line-height:1.15;
    margin-bottom:20px;
}

.gp-faq-left p{
    color:#dce8ed;
    font-size:17px;
    line-height:1.8;
}

.gp-faq-right{
    display:grid;
    gap:22px;
}

.gp-faq-item{
    display:grid;
    grid-template-columns:90px 1fr;
    gap:24px;
    align-items:flex-start;
    background:rgba(255,255,255,.07);
    border:1px solid rgba(255,255,255,.12);
    border-radius:28px;
    padding:30px;
    backdrop-filter:blur(10px);
    box-shadow:0 20px 55px rgba(0,0,0,.18);
}

.gp-faq-number{
    width:70px;
    height:70px;
    border-radius:22px;
    background:#c79653;
    color:#061e29;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:900;
    font-size:22px;
    font-family:'Playfair Display',serif;
}

.gp-faq-content h3{
    color:#fff;
    font-size:24px;
    margin-bottom:12px;
}

.gp-faq-content p{
    color:#dce8ed;
    font-size:16px;
    line-height:1.85;
    margin:0;
}

@media(max-width:991px){
    .gp-faq-container{
        grid-template-columns:1fr;
        gap:40px;
    }

    .gp-faq-left{
        position:relative;
        top:auto;
    }
}

@media(max-width:600px){
    .gp-faq-section{
        padding:70px 0;
    }

    .gp-faq-container{
        width:92%;
    }

    .gp-faq-left h2{
        font-size:34px;
    }

    .gp-faq-item{
        grid-template-columns:1fr;
        padding:24px;
    }
} */
    .gp-faq-section {
    background:
        radial-gradient(circle at top left, rgba(199,150,83,.16), transparent 28%),
        radial-gradient(circle at bottom right, rgba(199,150,83,.06), transparent 35%),
        linear-gradient(135deg, #061e29, #082c3d);
    padding: 120px 0;
    color: #fff;
    position: relative;
    overflow: hidden;
}

/* Animated ambient glow */
.gp-faq-section::before {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(199,150,83,.08), transparent 70%);
    top: -200px;
    right: -150px;
    animation: floatGlow 10s ease-in-out infinite;
    pointer-events: none;
}

.gp-faq-section::after {
    content: '';
    position: absolute;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(199,150,83,.05), transparent 70%);
    bottom: -100px;
    left: -100px;
    animation: floatGlow 14s ease-in-out infinite reverse;
    pointer-events: none;
}

/* =========================================
   CONTAINER
========================================= */

.gp-faq-container {
    width: 88%;
    max-width: 1320px;
    margin: auto;
    display: grid;
    grid-template-columns: 380px 1fr;
    gap: 80px;
    align-items: start;
    position: relative;
    z-index: 1;
}

/* =========================================
   LEFT COLUMN
========================================= */

.gp-faq-left {
    position: sticky;
    top: 120px;
    opacity: 0;
    transform: translateX(-30px);
    animation: slideInLeft 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards;
}

.gp-faq-left span {
    display: inline-flex;
    position: relative;
    color: #c79653;
    font-weight: 900;
    padding: 8px 18px;
    border-radius: 40px;
    margin-bottom: 30px;
    font-size: 13px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    background: rgba(199,150,83,0.1);
    border: 1px solid rgba(199,150,83,0.2);
    transition: all 0.4s ease;
}

.gp-faq-left span:hover {
    background: rgba(199,150,83,0.2);
    border-color: rgba(199,150,83,0.4);
    transform: scale(1.05);
}

.gp-faq-left span::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: -16px;
    transform: translateX(-50%) scaleX(0);
    width: 60px;
    height: 2px;
    background: #c79653;
    animation: lineGrow 0.6s ease 0.5s forwards;
}

.gp-faq-left h2 {
    color: #fff;
    font-size: 42px;
    line-height: 1.15;
    margin-bottom: 24px;
    font-weight: 700;
    letter-spacing: -0.5px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.2s forwards;
}

.gp-faq-left p {
    color: #8a9ba5;
    font-size: 17px;
    line-height: 1.8;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.35s forwards;
}

/* Decorative element */
.gp-faq-left::after {
    content: '';
    display: block;
    width: 80px;
    height: 80px;
    border: 2px dashed rgba(199,150,83,0.2);
    border-radius: 50%;
    margin-top: 40px;
    animation: rotateRing 20s linear infinite;
    opacity: 0;
    animation: rotateRing 20s linear infinite, fadeIn 0.6s ease 0.8s forwards;
}

/* =========================================
   RIGHT COLUMN - ACCORDION
========================================= */

.gp-faq-right {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.gp-faq-item {
    display: grid;
    grid-template-columns: 80px 1fr;
    gap: 24px;
    align-items: flex-start;
    background: rgba(255,255,255,.05);
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 24px;
    padding: 28px 32px;
    backdrop-filter: blur(12px);
    box-shadow: 0 20px 55px rgba(0,0,0,.15);
    cursor: pointer;
    transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 0.7s ease forwards;
    position: relative;
    overflow: hidden;
}

.gp-faq-item:nth-child(1) { animation-delay: 0.15s; }
.gp-faq-item:nth-child(2) { animation-delay: 0.3s; }
.gp-faq-item:nth-child(3) { animation-delay: 0.45s; }
.gp-faq-item:nth-child(4) { animation-delay: 0.6s; }

.gp-faq-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(to bottom, #c79653, #e0b56d);
    border-radius: 24px 0 0 24px;
    transform: scaleY(0);
    transform-origin: top;
    transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
}

.gp-faq-item:hover::before,
.gp-faq-item.active::before {
    transform: scaleY(1);
}

.gp-faq-item:hover {
    background: rgba(255,255,255,.08);
    border-color: rgba(199,150,83,.25);
    transform: translateX(8px);
    box-shadow: 0 25px 65px rgba(0,0,0,.2), 0 0 0 1px rgba(199,150,83,.1);
}

.gp-faq-item.active {
    background: rgba(255,255,255,.1);
    border-color: rgba(199,150,83,.3);
    box-shadow: 0 30px 70px rgba(0,0,0,.25), 0 0 0 1px rgba(199,150,83,.15);
}

/* Number */
.gp-faq-number {
    width: 64px;
    height: 64px;
    border-radius: 20px;
    background: linear-gradient(135deg, #c79653, #e0b56d);
    color: #061e29;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    font-size: 20px;
    font-family: 'Playfair Display', serif;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    flex-shrink: 0;
    box-shadow: 0 8px 25px rgba(199,150,83,.25);
}

.gp-faq-item:hover .gp-faq-number,
.gp-faq-item.active .gp-faq-number {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 12px 35px rgba(199,150,83,.4);
}

/* Content */
.gp-faq-content {
    padding-top: 4px;
    transition: all 0.4s ease;
}

.gp-faq-content h3 {
    color: #fff;
    font-size: 20px;
    margin-bottom: 12px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    transition: color 0.3s ease;
}

.gp-faq-item:hover .gp-faq-content h3 {
    color: #e0b56d;
}

/* Toggle icon */
.gp-faq-toggle {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.15);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    color: #fff;
    font-size: 18px;
    font-weight: 300;
}

.gp-faq-item:hover .gp-faq-toggle {
    background: rgba(199,150,83,.15);
    border-color: rgba(199,150,83,.3);
    transform: rotate(90deg);
}

.gp-faq-item.active .gp-faq-toggle {
    background: #c79653;
    border-color: #c79653;
    transform: rotate(45deg);
    color: #061e29;
}

/* Answer */
.gp-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s cubic-bezier(0.22, 1, 0.36, 1), opacity 0.4s ease;
    opacity: 0;
}

.gp-faq-item.active .gp-faq-answer {
    max-height: 300px;
    opacity: 1;
}

.gp-faq-content p {
    color: #8a9ba5;
    font-size: 15.5px;
    line-height: 1.85;
    margin: 0;
    padding-top: 4px;
    transition: color 0.3s ease;
}

.gp-faq-item:hover .gp-faq-content p,
.gp-faq-item.active .gp-faq-content p {
    color: #dce8ed;
}

/* Shimmer effect on hover */
.gp-faq-item::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,.03), transparent);
    transform: skewX(-20deg);
    transition: none;
}

.gp-faq-item:hover::after {
    animation: shimmer 1.2s ease;
}

/* =========================================
   ANIMATIONS
========================================= */

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes lineGrow {
    from { transform: translateX(-50%) scaleX(0); }
    to { transform: translateX(-50%) scaleX(1); }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes floatGlow {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-20px, 20px); }
}

@keyframes rotateRing {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes shimmer {
    100% { left: 200%; }
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 991px) {
    .gp-faq-container {
        grid-template-columns: 1fr;
        gap: 50px;
    }

    .gp-faq-left {
        position: relative;
        top: auto;
        text-align: center;
        max-width: 600px;
        margin: 0 auto;
    }

    .gp-faq-left::after {
        margin: 30px auto 0;
    }

    .gp-faq-left h2 {
        font-size: 36px;
    }
}

@media (max-width: 600px) {
    .gp-faq-section {
        padding: 80px 0;
    }

    .gp-faq-container {
        width: 92%;
    }

    .gp-faq-left h2 {
        font-size: 30px;
    }

    .gp-faq-item {
        grid-template-columns: 1fr;
        padding: 24px;
        gap: 16px;
    }

    .gp-faq-number {
        width: 52px;
        height: 52px;
        font-size: 18px;
    }

    .gp-faq-content h3 {
        font-size: 18px;
    }

    .gp-faq-content p {
        font-size: 14.5px;
    }
}
/* eleven section end */

/* twelve section start */
/* .gp-final-cta-section{
    background:#ffffff;
    padding:110px 0;
    color:#fff;
    overflow:hidden;
}

.gp-final-cta-container{
    width:88%;
    max-width:1320px;
    margin:auto;
}

.gp-final-cta-box{
    position:relative;
    display:grid;
    grid-template-columns:1.05fr .95fr;
    gap:60px;
    align-items:center;
    background:
        radial-gradient(circle at top right, rgba(224,181,109,.22), transparent 32%),
        linear-gradient(135deg,#0a2d3d,#123f55);
    border:1px solid rgba(255,255,255,.12);
    border-radius:42px;
    padding:70px;
    box-shadow:0 35px 90px rgba(0,0,0,.28);
}

.gp-final-cta-content span{
    display:inline-block;
    position:relative;
    color:#e0b56d;
    font-weight:900;
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:14px;
    padding-bottom:14px;
}

.gp-final-cta-content span::after{
    content:"";
    position:absolute;
    left:0;
    bottom:0;
    width:90px;
    height:2px;
    background:#e0b56d;
}

.gp-final-cta-content h2{
    color:white;
    font-size:45px;
    line-height:1.12;
    margin:18px 0 22px;
}

.gp-final-cta-content p{
    color:#dce8ed;
    font-size:19px;
    line-height:1.8;
    max-width:720px;
    margin-bottom:34px;
}

.gp-final-cta-btn{
    position:relative;
    overflow:hidden;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    min-height:58px;
    padding:0 34px;
    background:#c79653;
    color:#061e29;
    text-decoration:none;
    font-weight:900;
    border-radius:50px;
    transition:.3s ease;
    box-shadow:0 12px 35px rgba(199,150,83,.35);
}

.gp-final-cta-btn::before{
    content:"";
    position:absolute;
    top:0;
    left:-120%;
    width:60%;
    height:100%;
    background:linear-gradient(
        120deg,
        transparent,
        rgba(255,255,255,.75),
        transparent
    );
    transform:skewX(-25deg);
    animation:ctaShine 9s infinite;
}

@keyframes ctaShine{
    0%{
        left:-120%;
    }
    35%{
        left:130%;
    }
    100%{
        left:130%;
    }
}

.gp-final-cta-btn:hover{
    transform:translateY(-4px);
    background:#e0b56d;
    box-shadow:0 18px 45px rgba(224,181,109,.45);
}

.gp-final-cta-content h4{
    margin-top:28px;
    color:#fff;
    font-size:20px;
    line-height:1.6;
}

.gp-final-cta-visual{
    position:relative;
    min-height:420px;
}

.cta-ring{
    position:absolute;
    left:50%;
    top:50%;
    width:310px;
    height:310px;
    border-radius:50%;
    border:2px dashed rgba(224,181,109,.55);
    transform:translate(-50%,-50%);
    display:flex;
    align-items:center;
    justify-content:center;
}

.cta-ring:before{
    content:"";
    position:absolute;
    inset:35px;
    border-radius:50%;
    border:1px solid rgba(255,255,255,.18);
}

.cta-center{
    width:210px;
    height:210px;
    background:#c79653;
    color:#061e29;
    border-radius:50%;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    text-align:center;
    box-shadow:0 25px 70px rgba(0,0,0,.30);
}

.cta-center strong{
    font-size:62px;
    font-family:'Playfair Display',serif;
    line-height:1;
}

.cta-center span{
    font-weight:900;
    margin-top:8px;
}

.cta-mini{
    position:absolute;
    background:#fff;
    color:#061e29;
    font-weight:900;
    border-radius:20px;
    padding:18px 24px;
    box-shadow:0 20px 50px rgba(0,0,0,.22);
}

.cta-mini-1{
    left:0;
    top:55px;
}

.cta-mini-2{
    right:10px;
    top:65px;
}

.cta-mini-3{
    left:50%;
    bottom:-10px;
    transform:translateX(-50%);
}

@media(max-width:991px){
    .gp-final-cta-box{
        grid-template-columns:1fr;
        padding:45px 30px;
    }

    .gp-final-cta-content h2{
        font-size:40px;
    }
}

@media(max-width:600px){
    .gp-final-cta-section{
        padding:70px 0;
    }

    .gp-final-cta-container{
        width:92%;
    }

    .gp-final-cta-content h2{
        font-size:32px;
    }

    .gp-final-cta-visual{
        min-height:360px;
    }

    .cta-ring{
        width:260px;
        height:260px;
    }

    .cta-center{
        width:180px;
        height:180px;
    }

    .cta-mini{
        position:relative;
        left:auto;
        right:auto;
        top:auto;
        bottom:auto;
        transform:none;
        margin:12px auto;
        text-align:center;
        width:max-content;
    }
} */
    .gp-final-cta-section {
    background: #ffffff;
    padding: 120px 0;
    color: #fff;
    overflow: hidden;
    position: relative;
}

.gp-final-cta-container {
    width: 88%;
    max-width: 1320px;
    margin: auto;
    position: relative;
    z-index: 1;
}

/* =========================================
   CTA BOX - GOLD BACKGROUND
========================================= */

.gp-final-cta-box {
    position: relative;
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 60px;
    align-items: center;
    background: linear-gradient(135deg, #c79653, #d4a85e, #c79653);
    background-size: 200% 200%;
    border-radius: 32px;
    padding: 70px 65px;
    box-shadow: 0 40px 100px rgba(199,150,83,0.25);
    overflow: hidden;
    animation: gradientShift 8s ease infinite;
    opacity: 0;
    transform: translateY(40px);
    animation: gradientShift 8s ease infinite, fadeUp 0.9s ease forwards;
}

/* Animated glow orbs */
.gp-final-cta-box::before {
    content: '';
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,255,255,0.12), transparent 70%);
    top: -150px;
    right: -100px;
    animation: floatGlow 10s ease-in-out infinite;
    pointer-events: none;
}

.gp-final-cta-box::after {
    content: '';
    position: absolute;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255,255,255,0.08), transparent 70%);
    bottom: -100px;
    left: -80px;
    animation: floatGlow 14s ease-in-out infinite reverse;
    pointer-events: none;
}

/* =========================================
   LEFT CONTENT
========================================= */

.gp-final-cta-content {
    position: relative;
    z-index: 2;
}

.gp-final-cta-content span {
    display: inline-block;
    position: relative;
    color: rgba(6,30,41,0.7);
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 12px;
    padding-bottom: 14px;
    margin-bottom: 8px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.6s ease 0.2s forwards;
}

.gp-final-cta-content span::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background: rgba(6,30,41,0.4);
    animation: lineExpand 0.5s ease 0.6s forwards;
}

.gp-final-cta-content h2 {
    color: #061e29;
    font-size: 42px;
    line-height: 1.15;
    margin: 18px 0 22px;
    font-weight: 800;
    letter-spacing: -0.5px;
    opacity: 0;
    transform: translateY(25px);
    animation: fadeUp 0.8s ease 0.35s forwards;
}

.gp-final-cta-content p {
    color: rgba(6,30,41,0.75);
    font-size: 17px;
    line-height: 1.8;
    max-width: 520px;
    margin-bottom: 32px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.5s forwards;
}

/* Buttons */
.gp-final-cta-buttons {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 28px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.65s forwards;
}

.gp-final-cta-btn {
    position: relative;
    overflow: hidden;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 54px;
    padding: 0 28px;
    background: #061e29;
    color: #fff;
    text-decoration: none;
    font-weight: 800;
    font-size: 14px;
    border-radius: 50px;
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    box-shadow: 0 8px 25px rgba(6,30,41,0.25);
    border: none;
    cursor: pointer;
    letter-spacing: 0.3px;
}

.gp-final-cta-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -120%;
    width: 60%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(255,255,255,0.2), transparent);
    transform: skewX(-25deg);
    transition: none;
}

.gp-final-cta-btn:hover::before {
    animation: shine 0.8s ease;
}

.gp-final-cta-btn:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 15px 40px rgba(6,30,41,0.35);
    background: #0b3144;
}

.gp-final-cta-btn-outline {
    background: transparent;
    color: #061e29;
    border: 2px solid rgba(6,30,41,0.3);
    box-shadow: none;
    font-weight: 700;
}

.gp-final-cta-btn-outline:hover {
    background: rgba(6,30,41,0.08);
    border-color: rgba(6,30,41,0.5);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(6,30,41,0.1);
}

/* Trust badges */
.gp-final-cta-badges {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.8s forwards;
}

.gp-final-cta-badges span {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: rgba(6,30,41,0.6);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: color 0.3s ease;
}

.gp-final-cta-badges span::before {
    content: '✓';
    color: #061e29;
    font-weight: 900;
    font-size: 11px;
    transition: transform 0.3s ease;
}

.gp-final-cta-badges span:hover {
    color: rgba(6,30,41,0.9);
}

.gp-final-cta-badges span:hover::before {
    transform: scale(1.3);
}

/* =========================================
   RIGHT - STATS CARDS
========================================= */

.gp-final-cta-stats {
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: relative;
    z-index: 2;
}

.gp-stat-card {
    background: rgba(255,255,255,0.92);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 24px 28px;
    box-shadow: 0 10px 40px rgba(6,30,41,0.08);
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    opacity: 0;
    transform: translateX(30px);
    animation: slideInRight 0.7s ease forwards;
    position: relative;
    overflow: hidden;
}

.gp-stat-card:nth-child(1) { animation-delay: 0.4s; }
.gp-stat-card:nth-child(2) { animation-delay: 0.6s; }

.gp-stat-card:hover {
    transform: translateX(-6px) translateY(-4px);
    box-shadow: 0 20px 50px rgba(6,30,41,0.15);
    background: rgba(255,255,255,1);
}

.gp-stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #c79653, #e0b56d);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
}

.gp-stat-card:hover::before {
    transform: scaleX(1);
}

.gp-stat-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
}

.gp-stat-card-header span {
    font-size: 12px;
    font-weight: 700;
    color: #8a9ba5;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.gp-stat-card-header .gp-stat-badge {
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 800;
    background: #e8f5e9;
    color: #2e7d32;
    letter-spacing: 0.5px;
}

.gp-stat-card-header .gp-stat-badge.dark {
    background: #061e29;
    color: #fff;
}

.gp-stat-row {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    gap: 20px;
}

.gp-stat-item {
    text-align: center;
    flex: 1;
}

.gp-stat-item strong {
    display: block;
    font-size: 28px;
    font-weight: 800;
    color: #061e29;
    line-height: 1;
    margin-bottom: 6px;
    font-family: 'Playfair Display', serif;
    transition: transform 0.3s ease;
}

.gp-stat-card:hover .gp-stat-item strong {
    transform: scale(1.1);
}

.gp-stat-item small {
    display: block;
    font-size: 11px;
    color: #8a9ba5;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.gp-stat-arrow {
    color: #c79653;
    font-size: 20px;
    font-weight: 700;
    opacity: 0.6;
    transition: all 0.3s ease;
}

.gp-stat-card:hover .gp-stat-arrow {
    opacity: 1;
    transform: translateX(4px);
}

/* =========================================
   ANIMATIONS
========================================= */

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes lineExpand {
    from { width: 0; }
    to { width: 60px; }
}

@keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes floatGlow {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-20px, 15px); }
}

@keyframes shine {
    100% { left: 180%; }
}

@keyframes pulseBadge {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 991px) {
    .gp-final-cta-box {
        grid-template-columns: 1fr;
        padding: 50px 40px;
        gap: 50px;
    }
    
    .gp-final-cta-content h2 {
        font-size: 36px;
    }
    
    .gp-final-cta-stats {
        max-width: 500px;
        margin: 0 auto;
        width: 100%;
    }
}

@media (max-width: 600px) {
    .gp-final-cta-section {
        padding: 80px 0;
    }
    
    .gp-final-cta-container {
        width: 92%;
    }
    
    .gp-final-cta-box {
        padding: 40px 28px;
        border-radius: 24px;
    }
    
    .gp-final-cta-content h2 {
        font-size: 28px;
    }
    
    .gp-final-cta-content p {
        font-size: 15px;
    }
    
    .gp-final-cta-buttons {
        flex-direction: column;
    }
    
    .gp-final-cta-btn {
        width: 100%;
        justify-content: center;
    }
    
    .gp-final-cta-badges {
        gap: 12px;
    }
    
    .gp-stat-card {
        padding: 20px 22px;
    }
    
    .gp-stat-item strong {
        font-size: 24px;
    }
}
/* twelve section end */
</style>

</head>
<body>



<!DOCTYPE html>
<html lang="en-US">

<head>
        <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" CONTENT="FOLLOW,INDEX"/>
    <meta name="ROBOTS" content="ALL"/>
    <meta name="author" content="Attorney Rankings">
    <meta name="msvalidate.01" content="50D34C18A095262EAAB5CE50F55146FB" />

<meta name="description" content="">
<meta name="keywords" content="">
<title></title>
    
        <link rel="canonical" href="https://attorney-rankings.com/guest-post.php" />


    <link rel="icon" href="https://attorney-rankings.com/images/favicon.png" sizes="32x32" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">


<style>
    body{
    
    overflow-x:hidden;
    font-family: "Poppins", sans-serif !important;
}

body p {
    font-family: "Poppins", sans-serif !important;
    font-size: 16px !important;
    line-height: 35px;
    color: #000;
} 


body h1, body h2, body h3, body h4, body h5, body h6 {
    font-family: 'Merriweather', serif !important;
}

body ul li {
    font-family: "Poppins", sans-serif !important;
    font-size: 16px !important;
    margin: 10px 0px !important;
}

body ul li a{
    font-family: "Poppins", sans-serif !important;
    font-size: 16px !important;
}

body ul li a i{
    
    font-size: 16px !important;
}
body a.btn-drk , body button.btn-drk {
    position: relative;
    background-color: #a57d4b;
    border: 0;
    outline: 0;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: .25s ease;
    text-transform: uppercase;
    color: #ffffff;
    font-weight: bold;
    font-family: "Poppins", sans-serif !important;
    z-index:0;
}

.about-sec {
    padding: 50px 0px;
}

.about-sec .txt-img-txt p{
    line-height:35px;
}
</style>

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/hero.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/home-sec1.css">
    <link rel="stylesheet" href="./css/home-icon-sec.css">
    <link rel="stylesheet" href="./css/home-subscribtion.css">
    <link rel="stylesheet" href="./css/res.css">
    <link rel="stylesheet" href="./css/faq.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/pricing.css">
    <link rel="stylesheet" href="./css/gurantee.css">
    <link rel="stylesheet" href="./css/ranking-assurance.css">
    <link rel="stylesheet" href="./css/link-building.css">
    <link rel="stylesheet" href="./css/gurantee.css">
    <link rel="stylesheet" href="./css/cta.css">
    <link rel="stylesheet" href="./css/traffic-dr-packs.css">
    <link rel="stylesheet" href="./css/combo-pack.css">
    <link rel="stylesheet" href="./css/terms-privacy.css">
    <link rel="stylesheet" href="./css/tabs-home.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/enterprise.css">
    <link rel="stylesheet" href="./css/local-seo.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/blog-cards.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/gurantee.css">
    <link rel="stylesheet" href="./css/home-tabs.css">
    <link rel="stylesheet" href="./css/faq2.css">
    <link rel="stylesheet" href="./css/lnd-cross.css">
    <link rel="stylesheet" href="./css/blog-cards.css">
    <link rel="stylesheet" href="./css/head.css">
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/post.css">
    <link rel="stylesheet" href="./dashboard/css/nav.css">
<!--    <link rel="stylesheet" href="./dashboard/cart/style.css">-->
    <link rel="stylesheet" href="./dashboard/css/login.css">
    <link rel="stylesheet" href="./dashboard/css/products.css">
    <link rel="stylesheet" href="./dashboard/css/cart.css">
    <link rel="stylesheet" href="./dashboard/css/admin-layout.css">
    <link rel="stylesheet" href="./dashboard/css/admin-nav.css">
    <link rel="stylesheet" href="./dashboard/css/dash-layout.css">
    <link rel="stylesheet" href="./dashboard/css/dashboard.css">
    <link rel="stylesheet" href="./res/min-1200.css">
    <link rel="stylesheet" href="./res/min-1536.css">
    <link rel="stylesheet" href="./res/max-600.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <script src="./js/faq.js"></script>
    <script src="./js/menu.js"></script>
<!--hot jar    -->
<script>
(function(h,o,t,j,a,r){
h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
h._hjSettings={hjid:6464422,hjsv:6};
a=o.getElementsByTagName('head')[0];
r=o.createElement('script');r.async=1;
r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> 

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1N157S25Y8"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-1N157S25Y8');
</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-532XW4VN');</script>
<!-- End Google Tag Manager -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-532XW4VN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



    


<div class="header-bg">
    <header>
        <div id="brand"><a href="https://attorney-rankings.com/"> <img src="https://attorney-rankings.com/images/law.png" alt="">
            </a></div>
        <nav class="mainmenu">
           <ul>

   <li class="mega-parent">

    <a href="#">Services</a>

    <div class="mega-menu">

        <div class="mega-column">
            <a href="https://attorney-rankings.com/link-building.php" class="menu-label">
        LINK BUILDING
    </a>

            <a href="#">Guest Posting</a>
            <a href="#">Link Insertions</a>
            <a href="#">Managed Campaigns</a>
        </div>

        <div class="mega-column">
             <a href="https://attorney-rankings.com/law-firm-seo-agency.php" class="menu-label">
        SEO
    </a>

            <a href="#">Local SEO</a>
            <a href="#">State Domination SEO</a>
            <a href="#">National Authority SEO</a>
        </div>

        <div class="mega-column">
            <a href="https://attorney-rankings.com/#" class="menu-label">
        AI VISIBILITY
    </a>

            <a href="#">Digital PR</a>
            <a href="#">Brand Mentions</a>
            <a href="geo-aeo-landing.php">AEO / GEO Links</a>
        </div>

        <div class="mega-cta">

            <h3>Need a White Label Partner?</h3>

            <p>
                Scale your law firm SEO and link building
                without hiring additional staff.
            </p>

            <a href="#" class="mega-btn">
                Get Quote
            </a>

        </div>

    </div>
<div class="mega-overlay"></div>
</li>

<li class="trial-pack-menu">
    <a href="https://attorney-rankings.com/trial-pack.php">
        Trial Pack
    </a>
</li>

</ul>
        </nav>

        <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-menu">
                <li><a href="https://attorney-rankings.com/aeo-geo-off-page-optimization-for-law-firms">AEO/GEO Link Placements
                    </a></li>
                <li><a href="https://attorney-rankings.com/law-firm-seo-agency.php">SEO
                    </a></li>
                <li><a href="https://attorney-rankings.com/link-building.php">Link Building</a> </li>
                
    
                

                
                <li><a href="https://attorney-rankings.com/about.php">About
                    </a></li>
                <li><a href="https://attorney-rankings.com/blog.php">Blog
                    </a></li>
                <li><a href="https://attorney-rankings.com/contact.php">Contact
                    </a></li>
                    
                    
    <li>
        <a href="https://attorney-rankings.com/admin/login">
            Login
        </a>
    </li>

    <li>
        <a href="https://attorney-rankings.com/admin/register">
            Register
        </a>
    </li>

                
            </ul>
        </div>

<div class="mega-overlay"></div>



    </header>


</div>

 <style>
body{
    overflow-x:hidden;
}

/* Trial Pack Button */
.trial-pack-menu a{
    background:linear-gradient(135deg,#a57d4b,#c89b5c,#a57d4b);
    color:#fff !important;
    padding:12px 22px;
    border-radius:12px;
    font-weight:700;
    position:relative;
    overflow:hidden;
    display:inline-block;
    transition:0.3s ease;
    box-shadow:0 0 20px rgba(165,125,75,0.35);
}

.trial-pack-menu a:hover{
    transform:translateY(-2px);
    box-shadow:0 0 30px rgba(165,125,75,0.6);
}

.trial-pack-menu a::before{
    content:'';
    position:absolute;
    top:0;
    left:-120%;
    width:80%;
    height:100%;
    background:linear-gradient(90deg,transparent,rgba(255,255,255,0.5),transparent);
    animation:trialShine 3s infinite;
}

@keyframes trialShine{
    0%{ left:-120%; }
    100%{ left:150%; }
}

/* Header Layer Fix */
.header-bg{
    position:relative;
    z-index:99999999 !important;
}

.header-bg header,
header{
    position:relative;
    z-index:99999999 !important;
}

.mainmenu{
    position:static;
}

.mega-parent{
    position:relative;
}

/* Invisible hover bridge - prevents menu closing */
.mega-parent::after{
    content:'';
    position:fixed;
    top:70px;
    left:0;
    width:100vw;
    height:70px;
    background:transparent;
    opacity:0;
    visibility:hidden;
    pointer-events:none;
    z-index:999999998;
}

.mega-parent:hover::after{
    opacity:1;
    visibility:visible;
    pointer-events:auto;
}

/* Mega Menu */
.mega-menu{
    position:fixed !important;
    top:95px !important;
    left:50% !important;
    transform:translateX(-50%) !important;

    width:1300px;
    max-width:95vw;

    background:#fff;

    display:grid;
    grid-template-columns:1fr 1fr 1fr 320px;

    border-radius:24px;
    box-shadow:0 30px 80px rgba(0,0,0,.18);

    opacity:0;
    visibility:hidden;
    pointer-events:none;

    transition:.25s ease;
    z-index:999999999 !important;
    overflow:hidden;
}

.mega-parent:hover .mega-menu,
.mega-menu:hover{
    opacity:1;
    visibility:visible;
    pointer-events:auto;
}

/* Columns */
.mega-column{
    padding:40px;
}

.menu-label{
    display:block;
    color:#b68c5a !important;
    font-size:13px;
    letter-spacing:2px;
    font-weight:700;
    margin-bottom:20px;
    padding-bottom:12px;
    text-transform:uppercase;
    position:relative;
}

.menu-label::after{
    content:'';
    position:absolute;
    left:0;
    bottom:0;
    width:60px;
    height:2px;
    background:#b68c5a;
}

.menu-label:hover{
    color:#b68c5a !important;
    transform:none !important;
}

.mega-column a{
    display:block;
    color:#011c29 !important;
    font-size:18px;
    font-weight:600;
    padding:12px 0;
    transition:.25s;
}

.mega-column a:hover{
    color:#a57d4b !important;
    transform:translateX(8px);
}

/* CTA */
.mega-cta{
    background:linear-gradient(135deg,#011c29,#062d42);
    padding:40px;
    color:#fff;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.mega-cta h3{
    color:#fff;
    font-size:28px;
    margin-bottom:15px;
}

.mega-cta p{
    color:rgba(255,255,255,.85) !important;
    line-height:1.8;
    margin-bottom:25px;
}

.mega-btn{
    display:inline-block;
    background:#a57d4b;
    color:#fff !important;
    padding:14px 24px;
    border-radius:12px;
    font-weight:700;
}

.mega-btn:hover{
    background:#c89b5c;
}

/* Overlay */
.mega-overlay{
    position:fixed;
    top:0;
    left:0;
    width:100vw;
    height:100vh;
    background:rgba(0,0,0,0.5);

    opacity:0;
    visibility:hidden;
    pointer-events:none;

    z-index:999999997 !important;
    transition:.25s;
}

.mega-parent:hover .mega-overlay{
    opacity:1;
    visibility:visible;
}

/* Hero z-index fix */
.link-hero,
.link-building-hero,
.hero-section,
.hero,
.hero-cntr,
.hero-img,
.hero-txt,
.btn-cntr{
    position:relative;
    z-index:1 !important;
}

/* Common */
.btn-drk:hover{
    color:#fff;
}

.txt-img-img1{
    text-align:center;
}
</style>
<section class="guest-hero">
    <div class="guest-container">
        <div class="guest-hero-grid">

            <div class="guest-content">
                <span class="guest-tag">White Label Guest Posting for Legal Agencies</span>

                <h1 class="guest-title">
                    High-Authority Links for Law Firms
                </h1>

                <h2 class="guest-subtitle">
                    Placed on Sites That Actually Move Rankings
                </h2>

                <p class="guest-desc">
                    We secure guest posts on <strong>DA 50+ legal publications</strong>, real sites, real traffic, real editorial standards, the kind Google trusts and competitors struggle to replicate.
                </p>

                <p class="guest-desc">
                    All white-labeled. All yours.
                </p>

                <div class="guest-stats">
                    <div class="stat-box">
                        <h3>1000+</h3>
                        <p>Clients Served</p>
                    </div>

                    <div class="stat-box">
                        <h3>1500+</h3>
                        <p>National & Regional Publishers</p>
                    </div>

                    <div class="stat-box">
                        <h3>50</h3>
                        <p>States Covered</p>
                    </div>
                </div>

                <div class="guest-buttons">
                    <a href="#contact" class="guest-btn primary">Order Guest Posts Now</a>
                    <a href="#inventory" class="guest-btn secondary">View Site Inventory</a>
                </div>
            </div>

            <div class="guest-visual">
                <div class="banner-card">
                    <div class="live-label">Live Placement Tracker</div>

                    <div class="site-card">
                        <span class="da-badge">DAY 72</span>
                        <h4>LegalNewsToday.com</h4>
                        <div class="site-meta">
                            <span>20,000 Monthly Traffic</span>
                            <span>Dofollow</span>
                            <span>Legal / News</span>
                        </div>
                    </div>

                    <div class="site-card">
                        <span class="da-badge">DAY 58</span>
                        <h4>JusticeWatch.org</h4>
                        <div class="site-meta">
                            <span>54,200 Monthly Traffic</span>
                            <span>Dofollow</span>
                            <span>Law / Policy</span>
                        </div>
                    </div>

                    <div class="site-card">
                        <span class="da-badge">DAY 45</span>
                        <h4>InjuryLawInsider.com</h4>
                        <div class="site-meta">
                            <span>9,800 Monthly Traffic</span>
                            <span>Dofollow</span>
                            <span>PI / Legal</span>
                        </div>
                    </div>

                    <!-- <div class="guest-note">
                        Guest posting is one of the fastest ways to move rankings when it's done right.
                    </div> -->
                    <div class="image-box">
                        <img
                            class="img-fluid rounded"
                            src="./images/guest_posting_banner.png"
                            alt="Guest Posting Banner">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="gp-package-section">
    <div class="gp-package-container">

        <div class="gp-package-head">
            <span>Choose Your Link Building Plan</span>
            <h2>Link Building Packages</h2>
            <p>Pick the right authority level for your client’s law firm SEO campaign.</p>
        </div>

        <div class="gp-package-grid">

            <div class="gp-price-card">
                <div class="gp-price-top">
                    <h3>Basic</h3>
                    <div class="gp-price"><small>$</small>100<span>/ Post</span></div>
                </div>

                <ul>
                    <li>DR 20+</li>
                    <li>Traffic 300+</li>
                    <li>TAT 15 Days</li>
                    <li>General Sites</li>
                    <li>12 Months Guarantee</li>
                    <li>500+ Words Local Law Focused Content</li>
                    <li>One Do-Follow Link to Client Site</li>
                    <li>Other Links</li>
                    <li>Blog Suggestions Provided</li>
                    <li>White Label Reporting</li>
                </ul>

                <div class="gp-package-action">
                    <a href="#" class="gp-package-btn add-to-cart-btn"
                       data-product="Basic-Link-Building-pack"
                       data-price="100">Add to Cart</a>
                
                    <div class="gp-quantity-box">
                        <button type="button" class="qty-btn minus">-</button>
                        <input type="text" class="qty-input" value="1" readonly>
                        <button type="button" class="qty-btn plus">+</button>
                    </div>
                </div>
            </div>

            <div class="gp-price-card featured">
                <div class="gp-best-badge">Most Popular</div>

                <div class="gp-price-top">
                    <h3>Standard</h3>
                    <div class="gp-price"><small>$</small>150<span>/ Post</span></div>
                </div>

                <ul>
                    <li>DR 40+</li>
                    <li>Traffic 1500+</li>
                    <li>TAT 15 Days</li>
                    <li>Niche Blogs & Magazines</li>
                    <li>18 Months Guarantee</li>
                    <li>600+ Words Local Law Focused Content</li>
                    <li>One Do-Follow Link to Client Site</li>
                    <li>Other Links</li>
                    <li>Blog Suggestions Provided</li>
                    <li>White Label Reporting</li>
                </ul>

               <div class="gp-package-action">
                     <a href="#" class="gp-package-btn gold add-to-cart-btn"
                   data-product="Standard-Link-Building-Pack"
                   data-price="150">Add to Cart</a>
                
                    <div class="gp-quantity-box">
                        <button type="button" class="qty-btn minus">-</button>
                        <input type="text" class="qty-input" value="1" readonly>
                        <button type="button" class="qty-btn plus">+</button>
                    </div>
                </div>
            </div>

            <div class="gp-price-card">
                <div class="gp-price-top">
                    <h3>Premium</h3>
                    <div class="gp-price"><small>$</small>225<span>/ Post</span></div>
                </div>

                <ul>
                    <li>DR 50+</li>
                    <li>Traffic 2000+</li>
                    <li>TAT 15 Days</li>
                    <li>Premium Niche Blogs & Magazines</li>
                    <li>25 Months Guarantee</li>
                    <li>800+ Words Local Law Focused Content</li>
                    <li>One Do-Follow Link to Client Site</li>
                    <li>Other Links</li>
                    <li>Blog Suggestions Provided</li>
                    <li>White Label Reporting</li>
                </ul>

               <div class="gp-package-action">
                <a href="#" class="gp-package-btn add-to-cart-btn"
                       data-product="Premium-Link-Building-Pack"
                       data-price="225">Add to Cart</a>
            
                <div class="gp-quantity-box">
                    <button type="button" class="qty-btn minus">-</button>
                    <input type="text" class="qty-input" value="1" readonly>
                    <button type="button" class="qty-btn plus">+</button>
                </div>
            </div>
            </div>

        </div>

    </div>
</section>

<section class="gp-offer-section">
    <div class="gp-offer-container">

        <div class="gp-offer-head">
            <span>Partner Bonus</span>
            <h2>Exclusive Offers</h2>
            <p>A token of appreciation for partnering with us!</p>
        </div>

        <div class="gp-offer-grid">

            <div class="gp-offer-card">
                <strong>$5,000</strong>
                <p>1 PR Post Free</p>
            </div>

            <div class="gp-offer-card">
                <strong>$10,000</strong>
                <p>2 PR Posts Free</p>
            </div>

            <div class="gp-offer-card">
                <strong>$15,000</strong>
                <p>3 PR Posts Free</p>
            </div>

            <div class="gp-offer-card">
                <strong>$20,000</strong>
                <p>4 PR Posts Free</p>
            </div>

            <div class="gp-offer-card">
                <strong>$25,000</strong>
                <p>5 PR Posts Free</p>
            </div>

        </div>

        <div class="gp-custom-offer">
            <h3>More than $25,000</h3>
            <p>We work on customized offers tailored just for you!</p>
        </div>

    </div>
</section>

<section class="gp-know-section">
    <div class="gp-know-container">

        <div class="gp-know-left">
            <span class="gp-small-title">Know What You're Buying</span>

            <h2>
                Guest Posting for Law Firms:<br>
                <span>What It Is, Why It Works,</span><br>
                and Why Most Agencies Get It Wrong
            </h2>
        </div>

        <div class="gp-know-right">
            <p>
                Guest posting also called guest blogging is the practice of publishing articles on third-party, high-authority websites with a backlink pointing back to your law firm's website. Google counts quality backlinks from quality content and relevant sites as a vote of confidence.
            </p>

            <p>
                The problem most agencies run into is finding quality legal sites that accept it, writers who can clear editorial review, and a process that delivers on time.
            </p>

            <p>
                That's the gap we, Attorney Rankings, fill in.
            </p>

            <div class="gp-highlight-box">
                <div class="gp-percent">68%</div>
                <p>
                    of SEO professionals say link building, including guest posting, is the most impactful off-page ranking factor for competitive search terms. <strong>(Ahrefs, 2024)</strong>
                </p>
            </div>
        </div>

    </div>
</section>

<section class="gp-benefits-section">

    <div class="gp-container">

        <div class="gp-benefits-heading">
            <div class="gp-section-label">
        The Real Return on a Guest Post
    </div>

            <h2>
                Six Proven Reasons Guest Posts
                <span>Work Harder</span>
                Than Most Off-Page SEO
            </h2>
        </div>

        <div class="gp-benefits-row">

            <div class="benefit-item">
                <div class="benefit-circle">
                    <div class="benefit-no">1</div>
                    <i class="fas fa-shield-alt"></i>
                </div>

                <h3>Boosts Domain Authority</h3>

                <p>
                    Every dofollow link from a high-authority site raises your domain rating. Over time, that rising authority lifts every page they publish.
                </p>
            </div>

            <div class="benefit-item">
                <div class="benefit-circle">
                    <div class="benefit-no">2</div>
                     <i class="fas fa-bullseye"></i>
                </div>

                <h3>Drives Targeted Leads</h3>

                <p>
                    A well-placed relevant guest post puts you in front of readers who are already in search and connecting mode.
                </p>
            </div>

            <div class="benefit-item">
                <div class="benefit-circle">
                    <div class="benefit-no">3</div>
                    <i class="fas fa-chart-line"></i>
                </div>

                <h3>Accelerates Keyword Rankings</h3>

                <p>
                    When anchor text and keywords are chosen strategically, guest posts directly support rankings.
                </p>
            </div>

            <div class="benefit-item">
                <div class="benefit-circle">
                    <div class="benefit-no">4</div>
                    <i class="fas fa-link"></i>
                </div>

                <h3>Builds Quality Backlinks</h3>

                <p>
                    A backlink profile built on legitimate guest posts looks organic and protects rankings long-term.
                </p>
            </div>

            <div class="benefit-item">
                <div class="benefit-circle">
                    <div class="benefit-no">5</div>
                      <i class="fas fa-scale-balanced"></i>
                </div>

                <h3>Strengthens Legal Authority</h3>

                <p>
                    Builds strong E-E-A-T signals that move law firms into top search positions.
                </p>
            </div>

            <div class="benefit-item">
                <div class="benefit-circle">
                    <div class="benefit-no">6</div>
                 <i class="fas fa-eye"></i>️
                </div>

                <h3>Expands Visibility</h3>

                <p>
                    Reach new audiences and turn strangers into qualified leads.
                </p>
            </div>

        </div>

        <div class="gp-stats-banner">

            <div class="stats-left">
                <span>THE DATA</span>
                <h3>Top 3</h3>
            </div>

            <div class="stats-center">
                <h4>
                    Google results for any keyword have,
                    on average,
                    <span>3.8x more backlinks</span>
                    than positions 4–10.
                </h4>

                <p>
                    Backlinks remain one of the clearest separators between firms that rank and those that don't.
                </p>

                <small>(Backlinko, 2023)</small>
            </div>

            <div class="stats-right">
                <div class="bar b3">3</div>
                <div class="bar b2">2</div>
                <div class="bar b1">1</div>
            </div>

        </div>

    </div>

</section>

<section class="gp-workflow-section gp-section-reveal gp-reveal-delay-1">
    <div class="gp-workflow-container">

        <div class="gp-workflow-left">
            <span>What You Actually Get</span>
            <h2>From the First Word Written to the Live Link Delivered</h2>
            <p>There's nothing for you to chase, coordinate, or follow up on. You submit the brief. We take it from there.</p>
            <div class="gp-workflow-metrics">
                <div class="gp-workflow-metric">
                    <strong>15–30</strong>
                    <span>Days</span>
                </div>
                <div class="gp-workflow-metric">
                    <strong>100%</strong>
                    <span>White Label</span>
                </div>
                <div class="gp-workflow-metric">
                    <strong>500+</strong>
                    <span>Words</span>
                </div>
            </div>
        </div>

        <div class="gp-workflow-right">

            <div class="gp-flow-block">
                <div class="gp-flow-icon">01</div>
                <div>
                    <h3>Expert Content Pieces Written by U.S. Legal Writers</h3>
                    <p>We write content pieces that add genuine value to the publication's readership, which is exactly why they get approved.</p>
                    <ul>
                        <li>500–800+ words per article, written by legal specialists</li>
                        <li>E-E-A-T compliant structured for Google's quality evaluators</li>
                        <li>Practice area expertise is built into every article with AEO & GEO guidelines</li>
                    </ul>
                </div>
            </div>

            <div class="gp-flow-block">
                <div class="gp-flow-icon">02</div>
                <div>
                    <h3>Customized High-DA Site Selection</h3>
                    <p>We don't offer you a list and let you guess. We hand-pick the right site for each order based on DA, traffic, topical relevance, and geographic alignment with your client's market.</p>
                    <ul>
                        <li>Every site is verified for traffic authenticity before it goes into our inventory</li>
                        <li>Option for site preview and approval before submission</li>
                        <li>DA verified independently, no self-reported metrics</li>
                    </ul>
                </div>
            </div>

            <div class="gp-flow-block">
                <div class="gp-flow-icon">03</div>
                <div>
                    <h3>Placement Managed Entirely on Our End</h3>
                    <p>We submit, we follow up, we handle any editorial notes, and we confirm the go-live date. You hear from us when the link is live, not before, not in between.</p>
                    <ul>
                        <li>Guaranteed placement or we reorder at no cost</li>
                        <li>15–30 day standard turnaround on all orders</li>
                        <li>Live link confirmation sent the day it goes up</li>
                    </ul>
                </div>
            </div>

            <div class="gp-flow-block">
                <div class="gp-flow-icon">04</div>
                <div>
                    <h3>Reports That Carry Your Brand and Your Credibility</h3>
                    <p>We send a fully branded report showing the live URL, site DA, monthly traffic, anchor text used, and link verification. Forward it straight to your client.</p>
                    <ul>
                        <li>Fully white-labeled, your branding on every report</li>
                        <li>Live URL with screenshot confirmation</li>
                        <li>Full placement data that your client can verify</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="gp-featured-premium">
        <div class="gp-featured-inner">
            <span>We’ve featured in:</span>

            <div class="gp-logo-marquee">
                <div class="gp-logo-track">
                    <img src="assets/images/legal-reader.png" alt="Legal Reader">
                    <img src="assets/images/the-signal.png" alt="The Signal">
                    <img src="assets/images/us-attorneys.png" alt="US Attorneys">
                    <img src="assets/images/lawyer-monthly.png" alt="Lawyer Monthly">
            
                    <img src="assets/images/legal-reader.png" alt="Legal Reader">
                    <img src="assets/images/the-signal.png" alt="The Signal">
                    <img src="assets/images/us-attorneys.png" alt="US Attorneys">
                    <img src="assets/images/lawyer-monthly.png" alt="Lawyer Monthly">
            
                    <img src="assets/images/legal-reader.png" alt="Legal Reader">
                    <img src="assets/images/the-signal.png" alt="The Signal">
                    <img src="assets/images/us-attorneys.png" alt="US Attorneys">
                    <img src="assets/images/lawyer-monthly.png" alt="Lawyer Monthly">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="gp-steps-orbit-section gp-section-reveal gp-reveal-delay-2">
    <div class="gp-steps-container">

        <div class="gp-steps-head">
            <span>Our Simple 5-Step Process</span>
            <h2>How Our White Label Guest Posting Works</h2>
            <p>
                We know "we handle everything" sounds good, but it means nothing without specifics. So here are our specifics.
            </p>
        </div>

        <div class="gp-orbit-wrap">

            <div class="gp-orbit-center">
                <h3>5-Step</h3>
                <p>Done-For-You Guest Posting System</p>
            </div>

            <div class="gp-orbit-step step-one">
                <div class="gp-step-num">01</div>
                <h4>You Submit the Order</h4>
                <p>
                    Tell us the target URL, desired anchor text, DA range, and practice area. You get a confirmation and an estimated delivery window.
                </p>
            </div>

            <div class="gp-orbit-step step-two">
                <div class="gp-step-num">02</div>
                <h4>We Find the Right Site</h4>
                <p>
                    Our team hand-picks the suitable site that matches the practice area, geographic relevance, and DA target. You get a chance to approve the needed from your side and choose.
                </p>
            </div>

            <div class="gp-orbit-step step-three">
                <div class="gp-step-num">03</div>
                <h4>Content Written and Reviewed Internally</h4>
                <p>
                    A legal content specialist writes a 500–800+ word editorial piece with your anchor text placed naturally and contextually.
                </p>
            </div>

            <div class="gp-orbit-step step-four">
                <div class="gp-step-num">04</div>
                <h4>We Handle Editorial Outreach</h4>
                <p>
                    Our team manages submission, communication, and revisions until the post is accepted and scheduled for publication. We only contact you if something genuinely requires your input, which it rarely does.
                </p>
            </div>

            <div class="gp-orbit-step step-five">
                <div class="gp-step-num">05</div>
                <h4>Live URL + Branded Report Delivered</h4>
                <p>
                    The post goes live. We send you a white-labeled report with the URL, site data, and link confirmation all ready to forward to your client.
                </p>
            </div>

        </div>

    </div>
</section> -->
<style>

/* =========================================
   SECTION
========================================= */

.gp-process-section {
    position: relative;
    overflow: hidden;
    padding: 120px 0;
    background:
        radial-gradient(circle at top right, rgba(199,150,83,.08), transparent 35%),
        radial-gradient(circle at bottom left, rgba(6,30,41,.05), transparent 40%),
        linear-gradient(180deg, #ffffff, #f7fafc);
}

.gp-process-section::before {
    content: '';
    position: absolute;
    width: 700px;
    height: 700px;
    right: -300px;
    top: -250px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(199,150,83,.14), transparent 70%);
    animation: floatGlow 12s ease-in-out infinite;
}

.gp-process-section::after {
    content: '';
    position: absolute;
    width: 500px;
    height: 500px;
    left: -200px;
    bottom: -200px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(6,30,41,.06), transparent 70%);
    animation: floatGlow 15s ease-in-out infinite reverse;
    pointer-events: none;
}

/* =========================================
   CONTAINER
========================================= */

.gp-process-container {
    width: 90%;
    max-width: 1400px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 450px;
    gap: 70px;
    align-items: start;
    position: relative;
    z-index: 1;
}

/* =========================================
   HEADER
========================================= */

.gp-process-tag {
    display: inline-block;
    color: #7c88ff;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 15px;
    text-transform: uppercase;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.6s ease forwards;
}

.gp-process-left h2 {
    font-size: 52px;
    line-height: 1.12;
    color: #061e29;
    margin-bottom: 20px;
    font-weight: 800;
    letter-spacing: -1px;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 0.8s ease 0.15s forwards;
}

.gp-process-left > p {
    color: #647580;
    line-height: 1.9;
    max-width: 650px;
    font-size: 17px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 0.8s ease 0.3s forwards;
}

/* =========================================
   PROCESS LIST
========================================= */

.gp-process-list {
    margin-top: 60px;
    position: relative;
}

/* animated line */

.gp-process-list::before {
    content: '';
    position: absolute;
    left: 19px;
    top: 10px;
    bottom: 20px;
    width: 2px;
    background: linear-gradient(to bottom, #061e29, #c79653, #061e29);
    animation: lineGlow 4s linear infinite;
    border-radius: 1px;
}

/* =========================================
   ITEM
========================================= */

.gp-process-item {
    display: flex;
    gap: 24px;
    position: relative;
    margin-bottom: 45px;
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s ease forwards;
    transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
}

.gp-process-item:nth-child(1) { animation-delay: 0.1s; }
.gp-process-item:nth-child(2) { animation-delay: 0.25s; }
.gp-process-item:nth-child(3) { animation-delay: 0.4s; }
.gp-process-item:nth-child(4) { animation-delay: 0.55s; }
.gp-process-item:nth-child(5) { animation-delay: 0.7s; }

.gp-process-item:hover {
    transform: translateX(8px);
}

/* =========================================
   STEP CIRCLE
========================================= */

.gp-step-circle {
    flex: 0 0 40px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #061e29, #12374a);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 700;
    position: relative;
    z-index: 2;
    box-shadow: 0 0 0 10px rgba(255,255,255,.8);
    animation: pulseRing 4s infinite;
    transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.gp-process-item:hover .gp-step-circle {
    transform: scale(1.15);
    box-shadow: 0 0 0 14px rgba(199,150,83,.12), 0 0 0 10px rgba(255,255,255,.8);
    background: linear-gradient(135deg, #c79653, #e0b56d);
}

/* =========================================
   CONTENT
========================================= */

.gp-process-content {
    transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    padding-top: 2px;
}

.gp-process-item:hover .gp-process-content {
    transform: translateX(6px);
}

.gp-process-content h4 {
    color: #061e29;
    font-size: 20px;
    margin-bottom: 10px;
    font-weight: 700;
    transition: color 0.3s ease;
}

.gp-process-item:hover .gp-process-content h4 {
    color: #c79653;
}

.gp-process-content p {
    color: #647580;
    font-size: 15px;
    line-height: 1.8;
    margin-bottom: 12px;
}

.gp-process-content span {
    color: #c79653;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 10px;
    background: rgba(199,150,83,0.08);
    border-radius: 20px;
    transition: all 0.3s ease;
}

.gp-process-item:hover .gp-process-content span {
    background: rgba(199,150,83,0.15);
    transform: scale(1.05);
}

/* =========================================
   TRACKER PANEL
========================================= */

.gp-process-right {
    position: sticky;
    top: 100px;
    opacity: 0;
    transform: translateX(40px);
    animation: slideInRight 0.9s ease 0.4s forwards;
}

/* label */

.tracker-label {
    font-size: 11px;
    letter-spacing: 2px;
    font-weight: 800;
    color: #98a6af;
    margin-bottom: 18px;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 8px;
}

.tracker-label::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #c79653;
    animation: pulseDot 2s ease-in-out infinite;
}

/* =========================================
   CARD
========================================= */

.tracker-card {
    position: relative;
    background: rgba(255,255,255,.85);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255,255,255,.9);
    border-radius: 20px;
    padding: 24px;
    margin-bottom: 22px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(6,30,41,.08);
    transition: transform 0.45s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.45s ease;
    animation: cardReveal 0.9s ease both;
    cursor: default;
}

.tracker-card:nth-child(2) { animation-delay: 0.3s; }
.tracker-card:nth-child(3) { animation-delay: 0.5s; }

.tracker-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 35px 80px rgba(6,30,41,.15);
}

/* glow */

.tracker-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(199,150,83,.12), transparent 40%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.tracker-card:hover::before {
    opacity: 1;
}

/* shimmer */

.tracker-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: -120%;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,.45), transparent);
    transform: skewX(-20deg);
}

.tracker-card:hover::after {
    animation: shine 1.3s ease;
}

/* =========================================
   TOP
========================================= */

.tracker-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 18px;
}

.tracker-top strong {
    color: #061e29;
    font-weight: 800;
    font-size: 15px;
}

/* badges */

.live, .progress {
    padding: 6px 12px;
    border-radius: 30px;
    font-size: 11px;
    font-weight: 700;
    transition: all 0.3s ease;
}

.live {
    background: #e8fff0;
    color: #25a857;
    display: flex;
    align-items: center;
    gap: 4px;
}

.live::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #25a857;
    animation: pulseDot 2s ease-in-out infinite;
}

.progress {
    background: #edf1ff;
    color: #6b7cff;
}

.tracker-card:hover .live {
    background: #d4f5e0;
    transform: scale(1.05);
}

.tracker-card:hover .progress {
    background: #dce2ff;
    transform: scale(1.05);
}

/* =========================================
   ROWS
========================================= */

.tracker-row {
    display: flex;
    justify-content: space-between;
    padding: 11px 0;
    border-top: 1px solid rgba(6,30,41,.06);
    transition: all 0.3s ease;
}

.tracker-row:hover {
    background: rgba(199,150,83,0.03);
    margin: 0 -12px;
    padding: 11px 12px;
    border-radius: 8px;
    border-top-color: transparent;
}

.tracker-row:hover + .tracker-row {
    border-top-color: transparent;
}

.tracker-row span {
    color: #87959e;
    font-size: 13px;
    font-weight: 500;
}

.tracker-row strong {
    color: #061e29;
    font-size: 13px;
    font-weight: 600;
    transition: color 0.3s ease;
}

.tracker-row:hover strong {
    color: #c79653;
}

/* =========================================
   ANIMATIONS
========================================= */

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes cardReveal {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(40px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes pulseRing {
    0%, 100% {
        box-shadow: 0 0 0 10px rgba(255,255,255,.8);
    }
    50% {
        box-shadow: 0 0 0 16px rgba(199,150,83,.12);
    }
}

@keyframes pulseDot {
    0%, 100% {
        opacity: 1;
        transform: scale(1);
    }
    50% {
        opacity: 0.5;
        transform: scale(1.3);
    }
}

@keyframes shine {
    100% {
        left: 180%;
    }
}

@keyframes floatGlow {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(40px);
    }
}

@keyframes lineGlow {
    0% {
        filter: brightness(1);
    }
    50% {
        filter: brightness(1.4);
    }
    100% {
        filter: brightness(1);
    }
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 991px) {
    .gp-process-container {
        grid-template-columns: 1fr;
        gap: 50px;
    }

    .gp-process-right {
        position: relative;
        top: auto;
    }

    .gp-process-left h2 {
        font-size: 40px;
    }
}

@media (max-width: 600px) {
    .gp-process-section {
        padding: 80px 0;
    }

    .gp-process-container {
        width: 92%;
    }

    .gp-process-left h2 {
        font-size: 30px;
    }

    .tracker-card {
        padding: 20px;
    }

    .tracker-row {
        gap: 10px;
        flex-wrap: wrap;
    }
}
</style>
<section class="gp-process-section">

    <div class="gp-process-container">

        <div class="gp-process-left">

            <span class="gp-process-tag">
                SIMPLE 5-STEP PROCESS
            </span>

            <h2>
                How Our White Label Guest Posting Works
            </h2>

            <p>
                We know "we handle everything" sounds good, but it means nothing without specifics. So here are our specifics.
            </p>

            <div class="gp-process-list">

                <div class="gp-process-item">
                    <div class="gp-step-circle">1</div>

                    <div class="gp-process-content">
                        <h4>You submit the order</h4>
                        <p>
                            Tell us the target URL, desired anchor text, DA range, and practice area. You get a confirmation and an estimated delivery window.
                        </p>

                        <span>DAY 1</span>
                    </div>
                </div>

                <div class="gp-process-item">
                    <div class="gp-step-circle">2</div>

                    <div class="gp-process-content">
                        <h4>We find the right site</h4>
                        <p>
                            Our team hand-picks the suitable site that matches the practice area, geographic relevance, and DA target. You get a chance to approve the needed from your side and choose
                        </p>

                        <span>DAYS 1–2</span>
                    </div>
                </div>

                <div class="gp-process-item">
                    <div class="gp-step-circle">3</div>

                    <div class="gp-process-content">
                        <h4>The content gets written and reviewed internally</h4>
                        <p>
                            A legal content specialist writes a 500-800+ word editorial piece with your anchor text placed naturally and contextually.
                        </p>

                        <span>DAYS 2–5</span>
                    </div>
                </div>

                <div class="gp-process-item">
                    <div class="gp-step-circle">4</div>

                    <div class="gp-process-content">
                        <h4>We handle the editorial outreach back-and-forth </h4>
                        <p>
                            Our team manages submission, communication, and revisions until the post is accepted and scheduled for publication. We only contact you if something genuinely requires your input, which it rarely does.
                        </p>

                        <span>DAYS 5–10</span>
                    </div>
                </div>

                <div class="gp-process-item">
                    <div class="gp-step-circle">5</div>

                    <div class="gp-process-content">
                        <h4>Live URL + branded report delivered</h4>
                        <p>
                            The post goes live. We send you a white-labeled report with the URL, site data, and link confirmation all ready to forward to your client.
                        </p>

                        <span>DAYS 10–15</span>
                    </div>
                </div>

            </div>

        </div>

        <!-- RIGHT -->

        <div class="gp-process-right">

            <div class="tracker-label">
                SAMPLE ORDER TRACKER
            </div>

            <div class="tracker-card">

                <div class="tracker-top">
                    <strong>Order #GP-2041</strong>

                    <span class="live">
                        ✓ Live
                    </span>
                </div>

                <div class="tracker-row">
                    <span>Client</span>
                    <strong>Smith & Associates Law</strong>
                </div>

                <div class="tracker-row">
                    <span>Target URL</span>
                    <strong>/personal-injury-chicago/</strong>
                </div>

                <div class="tracker-row">
                    <span>Anchor Text</span>
                    <strong>car accident lawyer chicago</strong>
                </div>

                <div class="tracker-row">
                    <span>Placed On</span>
                    <strong>LegalNewsToday.com</strong>
                </div>

                <div class="tracker-row">
                    <span>Site DA</span>
                    <strong>DA 72</strong>
                </div>

                <div class="tracker-row">
                    <span>Turnaround</span>
                    <strong>11 Days</strong>
                </div>

            </div>

            <div class="tracker-card progress-card">

                <div class="tracker-top">
                    <strong>Order #GP-2042</strong>

                    <span class="progress">
                        In Progress
                    </span>
                </div>

                <div class="tracker-row">
                    <span>Client</span>
                    <strong>Defense Law Group</strong>
                </div>

                <div class="tracker-row">
                    <span>Anchor Text</span>
                    <strong>DUI attorney Miami</strong>
                </div>

                <div class="tracker-row">
                    <span>Target DA</span>
                    <strong>DA 50+</strong>
                </div>

                <div class="tracker-row">
                    <span>Stage</span>
                    <strong>Content Writing</strong>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- <section class="gp-why-section">
    <div class="gp-why-container">

        <div class="gp-why-head">
            <span>Why Attorney Rankings</span>
            <h2>There Are Dozens of Guest Post Services.</h2>
            <h3>Here’s What Separates Ours</h3>
        </div>

        <div class="gp-why-board">

            <div class="gp-why-row gp-why-title">
                <div>Feature</div>
                <div>Attorney Rankings</div>
            </div>

            <div class="gp-why-row">
                <div>Relevant-niche sites and magazines only</div>
                <div><span>✓</span> Always</div>
            </div>

            <div class="gp-why-row">
                <div>White label delivery</div>
                <div><span>✓</span> 100%</div>
            </div>

            <div class="gp-why-row">
                <div>JD-trained writers</div>
                <div><span>✓</span> On staff</div>
            </div>

            <div class="gp-why-row">
                <div>Guaranteed placement</div>
                <div><span>✓</span> Free redo</div>
            </div>

            <div class="gp-why-row">
                <div>Real traffic verified</div>
                <div><span>✓</span> Always</div>
            </div>

            <div class="gp-why-row">
                <div>Turnaround time</div>
                <div>20–30 days <small>(depending upon the order)</small></div>
            </div>

            <div class="gp-why-row">
                <div>Branded report included</div>
                <div><span>✓</span> Yes</div>
            </div>

        </div>

    </div>
</section> -->
<section class="gp-why-section">
    <div class="gp-why-container">

        <div class="gp-why-head">
            <span>Why Attorney Rankings</span>
            <h2>Why Agencies Choose Us Over Generic Guest Post Services</h2>
            <h3>Head-to-Head Comparison</h3>
        </div>

        <div class="gp-why-main">
            
            <!-- Left: Feature Cards -->
            <div class="gp-why-cards">
                <div class="gp-why-card">
                    <div class="gp-why-card-num">01</div>
                    <h4>Legal-Only Site Inventory</h4>
                    <p>Every site in our inventory is legal, news, policy, or justice-adjacent — meaning your links are naturally relevant and carry more SEO weight than generic placements.</p>
                </div>
                
                <div class="gp-why-card">
                    <div class="gp-why-card-num">02</div>
                    <h4>JD-Trained Writers on Every Order</h4>
                    <p>Our content team includes law school graduates who write naturally authoritative legal content. That's what gets editorial approval — and what Google's E-E-A-T rewards.</p>
                </div>
                
                <div class="gp-why-card">
                    <div class="gp-why-card-num">03</div>
                    <h4>Guaranteed Placement or We Redo It</h4>
                    <p>If a post gets rejected and can't be placed within the agreed timeframe, we find a replacement site at no additional cost. No questions asked.</p>
                </div>
                
                <div class="gp-why-card">
                    <div class="gp-why-card-num">04</div>
                    <h4>Zero Footprint — Fully Invisible</h4>
                    <p>No mention of Attorney Rankings anywhere in the process. All confirmations, reports, and communications are white-labeled with your agency's branding.</p>
                </div>
            </div>

            <!-- Right: Comparison Table -->
            <div class="gp-why-board">
                <div class="gp-why-table-label">Head-to-Head Comparison</div>
                
                <div class="gp-why-row gp-why-title">
                    <div>Feature</div>
                    <div>Attorney Rankings</div>
                    <div>Generic Services</div>
                </div>

                <div class="gp-why-row">
                    <div>Legal-niche sites only</div>
                    <div><span>✓</span> Always</div>
                    <div><span style="color:#ff6b6b">✕</span> Mixed</div>
                </div>

                <div class="gp-why-row">
                    <div>White label delivery</div>
                    <div><span>✓</span> 100%</div>
                    <div><span style="color:#ff6b6b">✕</span> No</div>
                </div>

                <div class="gp-why-row">
                    <div>JD-trained writers</div>
                    <div><span>✓</span> On staff</div>
                    <div><span style="color:#ff6b6b">✕</span> Freelancers</div>
                </div>

                <div class="gp-why-row">
                    <div>Guaranteed placement</div>
                    <div><span>✓</span> Free redo</div>
                    <div><span style="color:#ff6b6b">✕</span> Case-by-case</div>
                </div>

                <div class="gp-why-row">
                    <div>Real traffic verified</div>
                    <div><span>✓</span> Always</div>
                    <div><span style="color:#ff6b6b">✕</span> Not always</div>
                </div>

                <div class="gp-why-row">
                    <div>Turnaround time</div>
                    <div>25-30 days</div>
                    <div>3–8 weeks</div>
                </div>

                <div class="gp-why-row">
                    <div>Dofollow links only</div>
                    <div><span>✓</span> Always</div>
                    <div><span style="color:#ff6b6b">✕</span> Mixed</div>
                </div>

                <div class="gp-why-row">
                    <div>Branded report included</div>
                    <div><span>✓</span> Your logo</div>
                    <div><span style="color:#ff6b6b">✕</span> Generic PDF</div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- <section class="gp-practice-command-section">
    <div class="gp-practice-command-container">

        <div class="gp-practice-command-left">
            <span>Practice Area Expertise</span>

            <h2>
                We've Built Guest Posting Campaigns Across Every Major Practice Area and We Know What Works in Each One
            </h2>

            <p>
                We've Built Guest Posting Campaigns Across Every Major Practice Area and We Know What Works in Each One
            </p>
        </div>

        <div class="gp-practice-command-right">

            <div class="gp-main-practice">
                <small>We Have Helped</small>
                <strong>346</strong>
                <span>Personal Injury Law Firms</span>
            </div>

            <div class="gp-mini-practice p1">
                <b>40</b>
                <span>Family Law Firms</span>
            </div>

            <div class="gp-mini-practice p2">
                <b>30</b>
                <span>Criminal Law Firms</span>
            </div>

            <div class="gp-mini-practice p3s">
                <b>20</b>
                <span>Full Service Law Firms</span>
            </div>

            <div class="gp-mini-practice p4">
                <b>10</b>
                <span>Corporate Law Firms</span>
            </div>

            <div class="gp-mini-practice p5">
                <b>5</b>
                <span>Estate Planning Law Firms</span>
            </div>

            <div class="gp-mini-practice p6">
                <b>3</b>
                <span>Immigration Law Firms</span>
            </div>

        </div>

    </div>
</section> -->
<section class="gp-practice-command-section">
    <div class="gp-practice-command-container">

        <div class="gp-practice-command-left">
            <span>Practice Area Expertise</span>

            <h2>
                We've Built Guest Posting Campaigns Across Every Major Practice Area and We Know What Works in Each One
            </h2>

            <p>
                From Personal Injury to Corporate Law, our specialized approach ensures your content reaches the right legal publications with maximum impact and authority.
            </p>
        </div>

        <div class="gp-practice-command-right">

            <div class="connector connector-1"></div>
            <div class="connector connector-2"></div>
            <div class="connector connector-3"></div>
            <div class="connector connector-4"></div>

            <div class="gp-main-practice">
                <small>We Have Helped</small>
                <strong>346</strong>
                <span>Personal Injury Law Firms</span>
            </div>

            <div class="gp-mini-practice p1">
                <b>40</b>
                <span>Family Law Firms</span>
            </div>

            <div class="gp-mini-practice p2">
                <b>30</b>
                <span>Criminal Law Firms</span>
            </div>

            <div class="gp-mini-practice p3s">
                <b>20</b>
                <span>Full Service Law Firms</span>
            </div>

            <div class="gp-mini-practice p4">
                <b>10</b>
                <span>Corporate Law Firms</span>
            </div>

            <div class="gp-mini-practice p5">
                <b>5</b>
                <span>Estate Planning Law Firms</span>
            </div>

            <div class="gp-mini-practice p6">
                <b>3</b>
                <span>Immigration Law Firms</span>
            </div>

        </div>

    </div>
</section>

<!-- <section class="gp-agency-review-section">
    <div class="gp-agency-review-container">

        <div class="gp-agency-review-head">
            <span>From the Agencies That Placed the Orders</span>
            <h2>
                What It Feels Like to Work with a Guest Posting Partner That Actually
                <em>Knows Legal SEO</em>
            </h2>
        </div>

        <div class="gp-agency-review-layout">

            <div class="gp-review-side left-review">
                <div class="gp-review-quote">“</div>
                <p>
                    They took the SEO stress off our plate. With their legal link building and strategic guidance, our agency has been able to deliver stronger, more consistent wins for clients.
                </p>
                <div class="gp-review-person">
                    <strong>James Harrison</strong>
                    <span>Jomeseo</span>
                </div>
            </div>

            <div class="gp-review-center">
                <small>Testimonials</small>
                <h3>What Our Client’s Says About Our <span>Best Work.</span></h3>
            </div>

            <div class="gp-review-side right-review">
                <div class="gp-review-quote">“</div>
                <p>
                    Bringing them in was one of the best decisions we made. Our clients' local rankings improved fast and they started seeing high-quality leads weekly.
                </p>
                <div class="gp-review-person">
                    <strong>Susanne Ybarra</strong>
                    <span>Neon Goldfish</span>
                </div>
            </div>

            <div class="gp-review-bottom">
                <div class="gp-review-quote">“</div>
                <p>
                    They are responsive, reliable, and focused on outcomes. Thanks to their legal-specific strategies, several of our clients now rank in the top 5 for competitive keywords.
                </p>
                <div class="gp-review-person">
                    <strong>Tim Schmidt</strong>
                    <span>IceColdMarketing</span>
                </div>
            </div>

        </div>

    </div>
</section> -->
<section class="gp-agency-review-section">
    <div class="gp-agency-review-container">

        <div class="gp-agency-review-head">
            <span>From the Agencies That Placed the Orders</span>
            <h2>
                What It Feels Like to Work with a Guest Posting Partner That Actually
                <em>Knows Legal SEO</em>
            </h2>
        </div>

        <div class="gp-agency-review-layout">

            <!-- Card 1 -->
            <div class="gp-review-card">
                <div class="gp-review-quote">"</div>
                <div class="gp-review-avatar-wrap">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face" alt="James Harrison" class="gp-review-avatar">
                </div>
                <p>
                    They took the SEO stress off our plate. With their legal link building and strategic guidance, our agency has been able to deliver stronger, more consistent wins for clients.
                </p>
                <div class="gp-review-person">
                    <strong>James Harrison</strong>
                    <span>Jomeseo</span>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="gp-review-card">
                <div class="gp-review-quote">"</div>
                <div class="gp-review-avatar-wrap">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&crop=face" alt="Tim Schmidt" class="gp-review-avatar">
                </div>
                <p>
                    They are responsive, reliable, and focused on outcomes. Thanks to their legal-specific strategies, several of our clients now rank in the top 5 for competitive keywords.
                </p>
                <div class="gp-review-person">
                    <strong>Tim Schmidt</strong>
                    <span>IceColdMarketing</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="gp-review-card">
                <div class="gp-review-quote">"</div>
                <div class="gp-review-avatar-wrap">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop&crop=face" alt="Susanne Ybarra" class="gp-review-avatar">
                </div>
                <p>
                    Bringing them in was one of the best decisions we made. Our clients' local rankings improved fast and they started seeing high-quality leads weekly.
                </p>
                <div class="gp-review-person">
                    <strong>Susanne Ybarra</strong>
                    <span>Neon Goldfish</span>
                </div>
            </div>

        </div>

        <!-- Navigation -->
        <div class="gp-review-nav">
            <button class="gp-review-arrow">‹</button>
            <button class="gp-review-dot active"></button>
            <button class="gp-review-dot"></button>
            <button class="gp-review-dot"></button>
            <button class="gp-review-arrow">›</button>
        </div>

    </div>
</section>

<!-- <section class="gp-faq-section">
    <div class="gp-faq-container">

        <div class="gp-faq-left">
            <span>FAQs</span>
            <h2>Questions Agencies Ask Before Placing an Order</h2>
            <p>
                Clear answers before you commit, so you know exactly how our guest posting process works.
            </p>
        </div>

        <div class="gp-faq-right">

            <div class="gp-faq-item">
                <div class="gp-faq-number">01</div>
                <div class="gp-faq-content">
                    <h3>What DA range do your sites fall in?</h3>
                    <p>
                        DA 20+ to DA 50+, depending on the package tier. We don't inflate DA metrics; every site is verified independently at the time of placement.
                    </p>
                </div>
            </div>

            <div class="gp-faq-item">
                <div class="gp-faq-number">02</div>
                <div class="gp-faq-content">
                    <h3>How long does a placement actually take?</h3>
                    <p>
                        15–30 business days is our standard window. 1–20 posts in 15 days and up to 300 posts in 30 days. We'll give you a realistic estimate at the time of order.
                    </p>
                </div>
            </div>

            <div class="gp-faq-item">
                <div class="gp-faq-number">03</div>
                <div class="gp-faq-content">
                    <h3>Can I see the site before you submit the article?</h3>
                    <p>
                        Yes, this is available. We present you with one or two site options before we proceed, and you confirm.
                    </p>
                </div>
            </div>

            <div class="gp-faq-item">
                <div class="gp-faq-number">04</div>
                <div class="gp-faq-content">
                    <h3>Is there a minimum number of orders I need to place?</h3>
                    <p>
                        No minimum. You can place a single order to test the process. Agencies that are happy, which is most of them, move to monthly bulk orders, but there's no requirement to commit to volume before you're ready.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section> -->
<section class="gp-faq-section">
    <div class="gp-faq-container">

        <div class="gp-faq-left">
            <span>FAQs</span>
            <h2>Questions Agencies Ask Before Placing an Order</h2>
            <p>
                Clear answers before you commit, so you know exactly how our guest posting process works.
            </p>
        </div>

        <div class="gp-faq-right">

            <div class="gp-faq-item" onclick="this.classList.toggle('active')">
                <div class="gp-faq-number">01</div>
                <div class="gp-faq-content">
                    <h3>
                        What DA range do your sites fall in?
                        <span class="gp-faq-toggle">+</span>
                    </h3>
                    <div class="gp-faq-answer">
                        <p>
                            DA 20+ to DA 50+, depending on the package tier. We don't inflate DA metrics; every site is verified independently at the time of placement.
                        </p>
                    </div>
                </div>
            </div>

            <div class="gp-faq-item" onclick="this.classList.toggle('active')">
                <div class="gp-faq-number">02</div>
                <div class="gp-faq-content">
                    <h3>
                        How long does a placement actually take?
                        <span class="gp-faq-toggle">+</span>
                    </h3>
                    <div class="gp-faq-answer">
                        <p>
                            15–30 business days is our standard window. 1-20 posts in 15 days and up to 300 posts in 30 days. We'll give you a realistic estimate at the time of order.
                        </p>
                    </div>
                </div>
            </div>

            <div class="gp-faq-item" onclick="this.classList.toggle('active')">
                <div class="gp-faq-number">03</div>
                <div class="gp-faq-content">
                    <h3>
                        Can I see the site before you submit the article?
                        <span class="gp-faq-toggle">+</span>
                    </h3>
                    <div class="gp-faq-answer">
                        <p>
                            Yes, this is available. We present you with one or two site options before we proceed, and you confirm.
                        </p>
                    </div>
                </div>
            </div>

            <div class="gp-faq-item" onclick="this.classList.toggle('active')">
                <div class="gp-faq-number">04</div>
                <div class="gp-faq-content">
                    <h3>
                        Is there a minimum number of orders I need to place?
                        <span class="gp-faq-toggle">+</span>
                    </h3>
                    <div class="gp-faq-answer">
                        <p>
                            No minimum. You can place a single order to test the process. Agencies that are happy, which is most of them, move to monthly bulk orders, but there's no requirement to commit to volume before you're ready.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="gp-final-cta-section">
    <div class="gp-final-cta-container">

        <div class="gp-final-cta-box">

            <div class="gp-final-cta-content">
                <span>Ready to Start?</span>

                <h2>Place Your First White Label Guest Post — In 24 Hours.</h2>

                <p>
                    No contracts. No minimum orders. No setup fees. Just high-authority legal backlinks delivered under your brand, on time, every time.
                </p>

                <div class="gp-final-cta-buttons">
                    <a href="#contact" class="gp-final-cta-btn">
                        Order Your First Guest Post
                    </a>
                    <a href="#inventory" class="gp-final-cta-btn gp-final-cta-btn-outline">
                        View Full Site Inventory
                    </a>
                </div>

                <div class="gp-final-cta-badges">
                    <span>Month-to-month</span>
                    <span>No minimum orders</span>
                    <span>100% white-labeled</span>
                    <span>Guaranteed placement</span>
                </div>
            </div>

            <div class="gp-final-cta-stats">

                <div class="gp-stat-card">
                    <div class="gp-stat-card-header">
                        <span>Live Placement — Today</span>
                        <span class="gp-stat-badge dark">Active</span>
                    </div>
                    <div class="gp-stat-row">
                        <div class="gp-stat-item">
                            <strong>11</strong>
                            <small>Days to Live</small>
                        </div>
                        <div class="gp-stat-item">
                            <strong>22k</strong>
                            <small>Site Traffic</small>
                        </div>
                        <div class="gp-stat-item">
                            <strong>100%</strong>
                            <small>Dofollow</small>
                        </div>
                    </div>
                </div>

                <div class="gp-stat-card">
                    <div class="gp-stat-card-header">
                        <span>Avg. Keyword Movement</span>
                        <span class="gp-stat-badge">+47%</span>
                    </div>
                    <div class="gp-stat-row">
                        <div class="gp-stat-item">
                            <strong>+14</strong>
                            <small>Before</small>
                        </div>
                        <div class="gp-stat-arrow">→</div>
                        <div class="gp-stat-item">
                            <strong>3</strong>
                            <small>After 6 wks</small>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
 
<footer>
    <div class="ftr-wrpr">
        <div class="rw">
            <div class="col1">
                <h3><span class="secondary"> Quick </span> links</h3>
                <ul>
                    <li> <a href="https://attorney-rankings.com/about.php">About </a></li>
                    <li> <a href="https://attorney-rankings.com/contact.php">Contact</a></li>
                    <li> <a href="https://attorney-rankings.com/blog.php">Blog</a></li>
                    <!--<li> <a href="https://attorney-rankings.com/terms.php">Terms</a></li>-->
                    <li> <a href="https://attorney-rankings.com/privacy-policy.php">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- <div class="col2">
                <h3><span class="secondary"> Stay </span> Connected</h3>
                <ul>
                    <li> <a target="_blank" href="https://x.com/Hannah_Blake1"><i
                                class="fa-brands fa-twitter fa-xl "></i></a>
                    </li>
                    
                    <li> <a href=""><i class="fa-brands fa-linkedin-in fa-xl"></i> </a></li>
                </ul>
               
            </div> -->

            <div class="col1">
                <h3><span class="secondary">OUR </span> Services</h3>
                <ul>
                    
                    <li> <a href="https://attorney-rankings.com/law-firm-seo-agency.php">Law Firm SEO </a></li>
                    <li> <a href="https://attorney-rankings.com/link-building.php">Law Firm Link Building</a></li>
                </ul> <br>
                
                
                <h3><span class="secondary">Follow </span>  Us :</h3>
                <ul class="foot-social-icon">
                    <li> <a href="https://www.linkedin.com/company/attorney-rankings/" target="blank"><i class="fa-brands fa-linkedin-in"></i> </a></li>
                   <li>
                      <a href="https://www.instagram.com/attorney_rankings/"
                         target="_blank" rel="noopener noreferrer"
                         aria-label="Instagram - attorney_rankings">
                        <i class="fa-brands fa-instagram"></i>
                      </a>
                    </li>
                </ul>
               
            </div>
            
            <div class="col3">
                <form id="email-subscription-form" method="post">
                    <div class="success-message-ftr" style="display: none;">Message sent. Will get back to you ASAP! <i
                            class="fa-regular fa-face-smile"></i></div>
                    <h3><span class="secondary"> Stay </span> Updated</h3>
                    <input type="email" placeholder="Your Email" name="email" required>
                    <button class="th-btn">Subscribe</button>
                </form><br>
                
               <div class="foot-add"><i class="fa fa-location-dot"></i> <p>1200 N. Federal Hwy, Suite 300, <br> Boca Raton, FL 33432.</p></div><br>
               
               <div class="foot-add"><i class="fa fa-envelope"></i> <p><a href="mailto:orders@attorney-rankings.com">orders@attorney-rankings.com</a></p></div><br>
               
                <!--<div class="foot-add"><i class="fa fa-phone"></i> <p><a href="tel:+15614730961">+1 561 473 0961</a></p></div>-->
                
            </div>
        </div>
        
        <style>
        
        .home-cta .txt-frm-box {
            background-color:#f5f5f5;
            padding :20px;
        }
        
        footer .foot-social-icon h3{
            padding-bottom: 0px;
        }
        
.foot-social-icon {
    display: inline-flex;
    gap: 20px;
    padding-top: 0px !important;
    align-items: center;
}

.foot-add {
    display: flex;
    gap: 20px;
    align-items: center;
    color: #fff;
    font-size: 25px;
}

.foot-add p , .foot-add p a{
    font-size: 16px;
    color: #fff;
}

.foot-add p, .foot-add p a {
    font-size: 16px;
    color: #fff;
    margin-bottom: 0px;
}
        </style>
        
        <script>
document.getElementById('email-subscription-form').addEventListener('submit', function(e) {
    e.preventDefault();

    var form = this;
    var formData = new FormData(form);

    fetch('subscribe.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        if (data === "success") {
            form.querySelector('.success-message-ftr').style.display = 'block';
            form.reset();
        } else {
            alert(data);
        }
    })
    .catch(err => {
        alert("Error submitting form");
    });
});
</script>
<script>
  const form = document.getElementById('arReportForm');
  const msg  = document.getElementById('arMsg');
  const btn  = document.getElementById('arBtn');

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    msg.textContent = '';
    msg.style.color = '#6b7772';

    btn.disabled = true;
    btn.textContent = 'Sending...';

    try {
      const fd = new FormData(form);
      // ✅ set page url (important)
        fd.set('page_url', window.location.href);
      fd.append('submit', '1'); // backend expects this

      const res = await fetch('send_report_email.php', {
        method: 'POST',
        body: fd,
        headers: { 'Accept': 'application/json' }
      });

      const data = await res.json();

      if (data.status === 'ok') {
        msg.style.color = 'green';
        msg.textContent = data.message || 'Success! Report sent to your email.';
        form.reset();
      } else {
        msg.style.color = 'red';
        msg.textContent = data.message || 'Something went wrong. Please try again.';
      }
    } catch (err) {
      msg.style.color = 'red';
      msg.textContent = 'Server/Network error. Please try again.';
    } finally {
      btn.disabled = false;
      btn.textContent = 'Submit';
    }
  });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {

  // OPEN/CLOSE modal
  const modal = document.getElementById('quoteModal');
  const closeBtn = document.getElementById('closeQuoteModal');

  // ✅ Both open buttons
  const openBtns = [
    document.getElementById('openQuoteModal'),
    document.getElementById('openQuoteModal2'),
    document.getElementById('openQuoteModal3'),
    document.getElementById('openQuoteModal4'),
    document.getElementById('openQuoteModal5')
  ].filter(Boolean);

  function openModal(){
    if(!modal) return;
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden','false');
    document.body.style.overflow='hidden';
  }

  function closeModal(){
    if(!modal) return;
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden','true');
    document.body.style.overflow='';
  }

  if(modal && closeBtn){
    openBtns.forEach(btn => btn.addEventListener('click', openModal));
    closeBtn.addEventListener('click', closeModal);

    modal.addEventListener('click', function(e){
      if(e.target && e.target.dataset && e.target.dataset.close){
        closeModal();
      }
    });

    // Optional: ESC key close
    document.addEventListener('keydown', function(e){
      if(e.key === 'Escape' && modal.classList.contains('is-open')){
        closeModal();
      }
    });
  }

  // ✅ AJAX submit (prevents redirect)
  const form = document.getElementById('quoteForm');
  if(!form) return;

  form.addEventListener('submit', async function(e){
    e.preventDefault();

    const result = document.getElementById('quoteResult');
    const btn = form.querySelector('button[type="submit"]');

    if(result) result.innerHTML = '';
    if(btn) btn.disabled = true;

    try{
      const fd = new FormData(form);
      fd.set('page_url', window.location.href);

      const res = await fetch(form.action, { method:'POST', body: fd });
      const text = await res.text();

      let data;
      try { data = JSON.parse(text); }
      catch(err){ throw new Error(text); }

      if(data.ok){
        if(result){
          result.innerHTML = `<div style="padding:10px;border-radius:8px;background:#e8fff0;border:1px solid #9be3b0;">
            ✅ ${data.msg}
          </div>`;
        }
        form.reset();

        setTimeout(() => {
          closeModal();
        }, 1200);

      } else {
        if(result){
          result.innerHTML = `<div style="padding:10px;border-radius:8px;background:#fff3f3;border:1px solid #f0b0b0;">
            ❌ ${data.msg || 'Failed. Try again.'}
          </div>`;
        }
      }

    } catch(err){
      if(result){
        result.innerHTML = `<div style="padding:10px;border-radius:8px;background:#fff3f3;border:1px solid #f0b0b0;">
          ❌ Server error. Try again.
        </div>`;
      }
    } finally {
      if(btn) btn.disabled = false;
    }
  });

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('rightQuoteForm');
  if(!form) return;

  form.addEventListener('submit', async function(e){
    e.preventDefault(); // ✅ redirect stop

    const result = document.getElementById('rightQuoteResult');
    const btn = form.querySelector('button[type="submit"]');
    if(btn) btn.disabled = true;
    if(result) result.innerHTML = '';

    try{
      const fd = new FormData(form);
      fd.set('page_url', window.location.href);

      const res = await fetch(form.action, { method:'POST', body: fd });
      const text = await res.text();

      let data;
      try { data = JSON.parse(text); }
      catch(err){ throw new Error(text); }

      if(data.ok){
        if(result){
          result.innerHTML = `<div style="padding:10px;border-radius:8px;background:#e8fff0;border:1px solid #9be3b0;">
            ✅ ${data.msg}
          </div>`;
        }
        form.reset();
      } else {
        if(result){
          result.innerHTML = `<div style="padding:10px;border-radius:8px;background:#fff3f3;border:1px solid #f0b0b0;">
            ❌ ${data.msg || 'Failed. Try again.'}
          </div>`;
        }
      }

    } catch(err){
      if(result){
        result.innerHTML = `<div style="padding:10px;border-radius:8px;background:#fff3f3;border:1px solid #f0b0b0;">
          ❌ Server error. Try again.
        </div>`;
      }
    } finally {
      if(btn) btn.disabled = false;
    }
  });
});
</script>
        <div class="svg-bar-white">
            <div class="arrows-crown_wrap">
                <div class="arrows-crown_arrow w-embed"><svg width="100%" viewBox="0 0 31 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.1087 3.62213C1.13795 3.62224 1.16702 3.61752 1.19475 3.60817L10.0911 0.623371L14.773 3.62213L30.3219 3.62213C30.3939 3.62213 30.4629 3.59352 30.5138 3.54263C30.5647 3.49174 30.5933 3.42277 30.5933 3.3508C30.5933 3.27883 30.5647 3.20981 30.5138 3.15892C30.4629 3.10803 30.3939 3.07942 30.3219 3.07942L14.9303 3.07942L10.1632 0.0256348L1.02031 3.09338C0.959183 3.11378 0.907314 3.15526 0.873983 3.2104C0.840651 3.26555 0.828035 3.33078 0.838387 3.39438C0.848738 3.45798 0.881382 3.51581 0.930481 3.55754C0.97958 3.59927 1.04193 3.62217 1.10637 3.62213H1.1087Z"
                            fill="currentColor"></path>
                        <path
                            d="M1.1087 2.84839C1.13796 2.84828 1.16703 2.853 1.19475 2.86235L10.0911 5.84715L14.7753 2.84839L30.3219 2.84839C30.3939 2.84839 30.4629 2.87695 30.5138 2.92784C30.5647 2.97873 30.5933 3.04775 30.5933 3.11972C30.5933 3.19168 30.5647 3.26071 30.5138 3.3116C30.4629 3.36249 30.3939 3.39105 30.3219 3.39105L14.9303 3.39105L10.1632 6.44488L1.02031 3.37709C0.959182 3.35669 0.907315 3.31521 0.873982 3.26007C0.84065 3.20492 0.828035 3.13974 0.838387 3.07614C0.848738 3.01254 0.881382 2.95471 0.930482 2.91298C0.979581 2.87125 1.04193 2.84835 1.10637 2.84839H1.1087Z"
                            fill="currentColor"></path>
                    </svg></div>
                <div class="arrows-crown_dashed-line-wrap">
                    <div class="arrows-crown_dashed-line"></div>
                </div>
                <div class="arrows-crown_crown w-embed"><svg width="100%" viewBox="0 0 16 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.63687 1.0612L10.6061 7.80223L15.7562 2.65207V11.8158H0.684082V2.57609L5.83423 7.72625L7.80344 1.05887L8.25775 -0.00170898L8.63687 1.0612Z"
                            fill="currentColor"></path>
                    </svg></div>
                <div class="arrows-crown_dashed-line-wrap">
                    <div class="arrows-crown_dashed-line"></div>
                </div>
                <div class="arrows-crown_arrow w-embed"><svg width="100%" viewBox="0 0 31 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M30.3488 3.62335C30.3196 3.62346 30.2905 3.61874 30.2628 3.60939L21.3665 0.624591L16.6846 3.62335L1.1356 3.62335C1.06363 3.62335 0.994618 3.59474 0.94373 3.54385C0.892843 3.49297 0.864258 3.42399 0.864258 3.35202C0.864258 3.28006 0.892843 3.21103 0.94373 3.16014C0.994618 3.10925 1.06363 3.08065 1.1356 3.08065L16.5272 3.08065L21.2944 0.0268555L30.4372 3.0946C30.4983 3.115 30.5502 3.15648 30.5835 3.21163C30.6169 3.26677 30.6295 3.332 30.6191 3.3956C30.6088 3.4592 30.5761 3.51703 30.527 3.55876C30.4779 3.60049 30.4156 3.62339 30.3512 3.62335H30.3488Z"
                            fill="currentColor"></path>
                        <path
                            d="M30.3488 2.84961C30.3196 2.8495 30.2905 2.85422 30.2628 2.86357L21.3665 5.84837L16.6822 2.84961L1.1356 2.84961C1.06363 2.84961 0.994618 2.87817 0.94373 2.92906C0.892843 2.97995 0.864258 3.04897 0.864258 3.12094C0.864258 3.19291 0.892843 3.26193 0.94373 3.31282C0.994618 3.36371 1.06363 3.39227 1.1356 3.39227L16.5272 3.39227L21.2944 6.44611L30.4372 3.37831C30.4983 3.35791 30.5502 3.31643 30.5835 3.26129C30.6169 3.20614 30.6295 3.14096 30.6191 3.07736C30.6088 3.01376 30.5761 2.95593 30.527 2.9142C30.4779 2.87247 30.4156 2.84957 30.3512 2.84961H30.3488Z"
                            fill="currentColor"></path>
                    </svg></div>
            </div>
        </div>
        <div class="copyright">
            <p>© 2026 Attorney Rankings All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    p , body {
    font-family: 'Inter', sans-serif !important;
}
</style>
<script src="/js/faq-2.js"></script>
<script src="//code.tidio.co/udzopxkg1lyiz9k8fta9uhittuu3vrt7.js" async></script>
</body>

</html><script>
document.addEventListener('DOMContentLoaded', function () {

    const packageCards = document.querySelectorAll('.gp-price-card');

    packageCards.forEach(function (card) {

        const minusBtn = card.querySelector('.minus');
        const plusBtn = card.querySelector('.plus');
        const qtyInput = card.querySelector('.qty-input');
        const addToCartBtn = card.querySelector('.add-to-cart-btn');

        if (!addToCartBtn) return;

        if (minusBtn && plusBtn && qtyInput) {
            minusBtn.addEventListener('click', function () {
                let current = parseInt(qtyInput.value);
                if (current > 1) {
                    qtyInput.value = current - 1;
                }
            });

            plusBtn.addEventListener('click', function () {
                let current = parseInt(qtyInput.value);
                qtyInput.value = current + 1;
            });
        }

        addToCartBtn.addEventListener('click', function (e) {
            e.preventDefault();

            let product = addToCartBtn.getAttribute('data-product');
            let basePrice = parseFloat(addToCartBtn.getAttribute('data-price'));
            let qty = qtyInput ? parseInt(qtyInput.value) : 1;

            let url = `cart/add_to_cart.php?product=${encodeURIComponent(product)}&price=${basePrice}&qty=${qty}`;

            window.location.href = url;
        });

    });

});
</script>
</body>
</html>