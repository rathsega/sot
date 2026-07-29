<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

<!-- DNS Prefetch and Preconnect to external domains -->
<link rel="dns-prefetch" href="https://www.google.com">
<link rel="dns-prefetch" href="https://www.gstatic.com">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>

<!-- Preload critical assets -->
<link rel="preload" href="assets/images/logo/logo.png" as="image" fetchpriority="high">
<link rel="preload" href="assets/fonts/EuclidCircularA-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/EuclidCircularA-Medium.woff2" as="font" type="font/woff2" crossorigin>

<!-- Preload ONLY the first course image for LCP (mobile shows one at a time) -->
<?php if (basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
<link rel="preload" href="assets/images/course/custom/scm.webp" as="image" fetchpriority="high">
<?php endif; ?>

<!-- Critical CSS - Inline everything needed for LCP -->
<style>
/* Reset & Base */
*{box-sizing:border-box;margin:0;padding:0}
html{-webkit-text-size-adjust:100%;line-height:1.15}
body{margin:0;font-family:'EuclidCircularA',system-ui,-apple-system,BlinkMacSystemFont,sans-serif;font-size:16px;font-weight:400;line-height:1.6;color:#6b7385;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
img{height:auto;max-width:100%;display:block;border:0}
a{color:#2f57ef;text-decoration:none}
h1,h2,h3,h4,h5,h6{font-weight:700;color:#2d3436;line-height:1.3;margin:0 0 10px}
h1{font-size:2.5rem}h2{font-size:2rem}h4{font-size:1.25rem}
p{margin:0 0 15px}

/* Bootstrap Grid - Critical Only */
.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;max-width:1200px}
.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}
[class*="col-"]{width:100%;padding-right:15px;padding-left:15px}
.col-12{flex:0 0 100%;max-width:100%}
@media(min-width:576px){.col-sm-6{flex:0 0 50%;max-width:50%}}
@media(min-width:768px){.col-md-4{flex:0 0 33.333%;max-width:33.333%}.col-md-6{flex:0 0 50%;max-width:50%}}
@media(min-width:992px){.col-lg-3{flex:0 0 25%;max-width:25%}.col-lg-4{flex:0 0 33.333%;max-width:33.333%}.col-lg-6{flex:0 0 50%;max-width:50%}.col-lg-8{flex:0 0 66.666%;max-width:66.666%}}
.justify-content-between{justify-content:space-between}
.align-items-center{align-items:center}
.text-center{text-align:center}
.text-start{text-align:left}
.d-flex{display:flex}
.flex-wrap{flex-wrap:wrap}

/* Header - Critical */
.rbt-header{background:#fff;position:relative;z-index:99}
.rbt-header-wrapper{min-height:60px;display:flex;align-items:center}
.rbt-sticky{position:fixed;top:0;left:0;right:0;box-shadow:0 2px 10px rgba(0,0,0,0.1)}
.logo img{max-height:45px;width:auto}

/* Banner - LCP Critical */
.rbt-banner-area{position:relative;overflow:hidden}
.rbt-banner-1{padding:40px 0}
/* .rbt-banner-1.height-600{min-height:auto} */
/* .rbt-banner-1 .content{position:relative;z-index:2} */
/* .rbt-banner-1 .inner{max-width:600px} */
.rbt-banner-1 .title{font-size:1.75rem;font-weight:700;line-height:1.25;color:#2d3436;margin:0 0 15px}
.rbt-banner-1 .title .color-primary{color:#2f57ef}
.rbt-banner-1 .description{font-size:1rem;line-height:1.6;color:#6b7385;margin:0 0 20px}
.rbt-new-badge{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;background:linear-gradient(90deg,#f0f4ff,#e8f0ff);border-radius:25px;font-size:0.85rem;color:#2f57ef;margin-bottom:15px;font-weight:500}
.rbt-new-badge-icon{font-size:1rem}

/* Buttons */
.rbt-btn{display:inline-flex;align-items:center;justify-content:center;padding:12px 28px;font-size:1rem;font-weight:500;border-radius:6px;transition:all 0.3s;cursor:pointer;border:none}
.btn-gradient{background:linear-gradient(90deg,#2f57ef,#b966e7);color:#fff}
.btn-gradient:hover{transform:translateY(-2px);box-shadow:0 5px 20px rgba(47,87,239,0.3)}
.slider-btn{margin-top:10px}

/* Cards */
.rbt-card{background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 5px 20px rgba(0,0,0,0.08);transition:transform 0.3s,box-shadow 0.3s}
.rbt-card:hover{transform:translateY(-5px);box-shadow:0 10px 30px rgba(0,0,0,0.12)}
.rbt-card-img{position:relative;overflow:hidden}
.rbt-card-img img{width:100%;aspect-ratio:16/9;object-fit:cover;transition:transform 0.3s}
.rbt-card:hover .rbt-card-img img{transform:scale(1.05)}
.rbt-card-body{padding:20px}
.rbt-card-title{font-size:1.1rem;margin:0 0 10px;line-height:1.4}
.rbt-card-title a{color:#2d3436}
.rbt-meta{list-style:none;display:flex;flex-wrap:wrap;gap:15px;font-size:0.85rem;color:#6b7385;margin:0 0 10px;padding:0}
.rbt-meta li{display:flex;align-items:center;gap:5px}
.rbt-meta i{color:#2f57ef}

/* Rating */
.rbt-review{display:flex;align-items:center;gap:8px;margin-bottom:10px}
.rating{display:flex;gap:2px}
.rating i{color:#ff9800;font-size:0.8rem}
.rating-count{font-size:0.85rem;color:#6b7385}

/* Price */
.rbt-price{display:flex;align-items:center;gap:8px}
.current-price{font-size:1.1rem;font-weight:600;color:#2f57ef}
.off-price{font-size:0.9rem;color:#999;text-decoration:line-through}

/* Swiper - Critical for banner */
.swiper{overflow:hidden;position:relative}
.swiper-wrapper{display:flex;transition-property:transform}
.swiper-slide{flex-shrink:0;width:100%}
.rbt-swiper-pagination{display:flex;justify-content:end;gap:8px;margin-top:15px}
.swiper-pagination-bullet{width:10px;height:10px;background:#ddd;border-radius:50%;cursor:pointer}
.swiper-pagination-bullet-active{background:#2f57ef}

/* Feather icons placeholder */
[class^="feather-"]:before{font-family:feather;font-style:normal;display:inline-block}
.feather-arrow-right:before{content:"→"}
.feather-book:before{content:"📖"}
.feather-users:before{content:"👥"}

/* FontAwesome stars placeholder */
.fas.fa-star{color:#ff9800}
.fas.fa-star:before{content:"★"}

/* Mobile optimizations */
@media(max-width:991px){
  .rbt-banner-1 .title{font-size:1.5rem}
  .rbt-banner-1 .col-lg-8{order:1}
  .rbt-banner-1 .col-lg-4{order:2;margin-top:25px}
  .banner-card{max-width:350px;margin:0 auto}
}
@media(min-width:992px){
  .rbt-header-wrapper{min-height:70px}
  .rbt-banner-1{padding:60px 0}
  .rbt-banner-1 .title{font-size:2.5rem}
}

/* CLS Prevention */
.rbt-card{min-height:320px}
.banner-card{min-height:380px}

/* Below-fold optimization */
.rbt-course-area,.service-wrapper,.rbt-testimonial-area,.rbt-counterup-area,.rbt-rbt-blog-area{content-visibility:auto;contain-intrinsic-size:auto 500px}

.about-us-h1{font-size: 32px;} @media (max-width:576px){.about-us-h1{font-size: 24px;}}

.blog-content{font-size: 16px;}
.terms-o-s h2{line-height:1px;font-size:18px}
.terms-o-s .h2M{line-height:30px}
</style>

<!-- Critical CSS - Load synchronously to prevent CLS -->
 <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/plugins/swiper.css">

<!-- Non-critical CSS - load async -->
<link rel="stylesheet" href="assets/css/mobile_menu_style.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/vendor/slick.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/vendor/slick-theme.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/sal.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/odometer.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/animation.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/jquery-ui.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/magnigy-popup.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/plyr.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/feather.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="assets/css/plugins/euclid-circulara.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,400;0,600;0,700;0,900;1,400&display=swap" media="print" onload="this.media='all'">

<!-- Fallback for browsers with JS disabled -->
<noscript>
<link rel="stylesheet" href="assets/css/mobile_menu_style.css">
<link rel="stylesheet" href="assets/css/plugins/sal.css">
<link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
</noscript>

<!-- Google Tag Manager (deferred until after page interaction) -->
<script>
var gtmLoaded=false;
function loadGTM(){
  if(gtmLoaded)return;
  gtmLoaded=true;
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K4SR6ZFC');
}
// Load GTM after user interaction or 4 seconds (whichever comes first)
if('requestIdleCallback' in window){
  requestIdleCallback(function(){setTimeout(loadGTM,3000)});
}else{
  setTimeout(loadGTM,4000);
}
['scroll','click','touchstart','keydown'].forEach(function(e){
  window.addEventListener(e,loadGTM,{once:true,passive:true});
});
</script>
<!-- End Google Tag Manager -->