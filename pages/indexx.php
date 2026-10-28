<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "apple_store";
$port = 3307; 

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store Online</title>
    <style>
        /* ==========================================
           1. BASE
           ========================================== */
        :root {
            --card-w: 480px;
            --card-h: 520px;
            --img-h: 280px;
            --card-pad: 35px;
            --grad: linear-gradient(90deg, #de386a, #ea5a39, #f48135);
        }

        *, *::before, *::after { box-sizing: border-box; }

        html, body {
            margin: 0;
            padding: 0;
            max-width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Helvetica Neue", Arial, sans-serif;
            background-color: #fff;
            color: #1d1d1f;
        }

        img { max-width: 100%; }

        /* ==========================================
           2. NAV + PROMO
           ========================================== */
        .global-nav {
            background-color: rgba(245, 245, 247, 0.92);
            height: 44px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: auto;
            scrollbar-width: none;
        }
        .global-nav::-webkit-scrollbar { display: none; }

        .nav-list {
            list-style: none;
            display: flex;
            gap: 35px;
            margin: 0;
            padding: 0 16px;
            align-items: center;
            white-space: nowrap;
        }
        .nav-list li a {
            color: #1d1d1f;
            text-decoration: none;
            font-size: 12px;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        .nav-list li a:hover { opacity: 1; }
        .nav-list li a svg { display: block; fill: #1d1d1f; }
        .nav-list li a.nav-icon { display: flex; align-items: center; }

        .promo-banner {
            background-color: #fff;
            padding: 22px 16px;
            text-align: center;
            font-size: 14px;
            line-height: 1.4;
            color: #1d1d1f;
        }
        .promo-banner a { color: #0066cc; text-decoration: none; white-space: nowrap; }
        .promo-banner a svg { vertical-align: -3px; margin-left: 2px; }
        .promo-banner a:hover { text-decoration: underline; }

        /* ==========================================
           3. HERO
           ========================================== */
        /* Full-width pink hero like apple.com/in/store */
        .hero-container {
            position: relative;
            min-height: 270px;
            margin: 0;
            padding: 0 max(24px, calc((100% - 1260px) / 2));
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            background: #f5f5f7;
            overflow: hidden;
        }
        .hero-left, .hero-right { position: relative; z-index: 2; flex: 1 1 0; min-width: 0; }
        .hero-right { text-align: right; }

        .hero-left h1 {
            font-size: clamp(48px, 8vw, 80px);
            font-weight: 700;
            margin: 0;
            letter-spacing: -0.015em;
            background: var(--grad);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-bg-image {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: max(125%, 1500px);
            z-index: 1;
            pointer-events: none;
        }
        .hero-bg-image img,
        .hero-bg-image svg {
            width: 100%;
            height: auto;
            display: block;
            -webkit-mask-image: linear-gradient(#000 80%, transparent);
            mask-image: linear-gradient(#000 80%, transparent);
        }

        .hero-right h3 {
            font-size: clamp(22px, 3vw, 32px);
            font-weight: 700;
            margin: 0 0 10px 0;
            line-height: 1.15;
            letter-spacing: -0.005em;
        }
        .hero-right p { margin: 6px 0; font-size: 14px; }
        .hero-right a { color: #0066cc; text-decoration: none; }
        .hero-right a:hover { text-decoration: underline; }

        /* ==========================================
           4. CATEGORY ICONS
           ========================================== */
        .product-icons-section {
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: flex-start;
            align-items: flex-end;
            gap: 8px;
            overflow-x: auto;
            scrollbar-width: none;
        }
        .product-icons-section::-webkit-scrollbar { display: none; }

        .icons-wrap { position: relative; max-width: 1260px; margin: 12px auto 40px; }
        .icons-next {
            position: absolute;
            right: 20px;
            top: 42%;
            transform: translateY(-50%);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: none;
            background: rgba(210, 210, 215, 0.9);
            color: #1d1d1f;
            font-size: 26px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
        }
        .icons-next:hover { background: #c7c7cc; }

        .prod-icon-item {
            text-align: center;
            text-decoration: none;
            color: #1d1d1f;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.2s;
        }
        .prod-icon-item:hover { transform: scale(1.05); }
        .prod-icon-item img {
            height: 80px;
            width: auto;
            object-fit: contain;
            margin-bottom: 12px;
            display: block;
        }
        .prod-icon-item span { font-size: 13px; font-weight: 600; }

        /* ==========================================
           5. CAROUSEL SECTIONS (shared)
           ========================================== */
        :is(.latest-section, .difference-section, .joy-section, .tune-section,
            .acc-section, .exp-section, .savings-section) {
            max-width: 1340px;
            width: 100%;
            margin: 40px auto 80px auto;
            padding: 0 20px;
        }
        .latest-section { margin-top: 90px; }

        :is(.latest-header, .difference-header, .joy-header, .tune-header,
            .acc-header, .exp-header, .savings-header) {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 24px;
        }

        :is(.latest-title, .difference-title, .joy-title, .tune-title,
            .acc-title, .exp-title, .savings-title) {
            font-size: clamp(22px, 2.6vw, 28px);
            font-weight: 600;
            color: #1d1d1f;
            margin: 0;
            line-height: 1.2;
        }
        .latest-title { font-size: clamp(24px, 4vw, 36px); }
        .main-heading-text { color: #1d1d1f; }

        :is(.highlight-latest, .highlight-difference, .highlight-joy, .highlight-tune,
            .highlight-acc, .highlight-exp, .highlight-savings) {
            background: var(--grad);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .carousel-arrows { display: flex; gap: 10px; flex-shrink: 0; }
        .arrow-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #e8e8ed;
            border: none;
            font-size: 18px;
            color: #1d1d1f;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .arrow-btn:hover { background-color: #d2d2d7; }

        :is(.carousel-container, .diff-carousel-container, .joy-carousel-container,
            .tune-carousel-container, .acc-carousel-container, .exp-carousel-container,
            .savings-carousel-container) {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            gap: 20px;
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-behavior: smooth;
            scroll-snap-type: x proximity;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            padding: 10px 0 20px 0;
        }
        :is(.carousel-container, .diff-carousel-container, .joy-carousel-container,
            .tune-carousel-container, .acc-carousel-container, .exp-carousel-container,
            .savings-carousel-container)::-webkit-scrollbar { display: none; }

        /* ---- Cards ---- */
        :is(.apple-card, .diff-card, .joy-card, .tune-card, .acc-card, .exp-card, .savings-card) {
            flex: 0 0 var(--card-w);
            width: var(--card-w);
            height: var(--card-h);
            background-color: #fff;
            border-radius: 28px;
            padding: var(--card-pad) var(--card-pad) 0 var(--card-pad);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            scroll-snap-align: start;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        :is(.apple-card, .diff-card, .joy-card, .tune-card, .acc-card, .exp-card, .savings-card):hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        /* "The latest" cards are slightly smaller */
        .apple-card {
            --card-w: 380px;
            --card-h: 420px;
            --card-pad: 40px;
            --img-h: 240px;
        }
        .apple-card:hover { transform: none; }

        /* Card text */
        :is(.card-tag, .diff-card-tag, .joy-card-tag, .tune-card-tag, .acc-card-tag, .savings-card-tag) {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
            letter-spacing: 0.05em;
            color: #de386a;
        }
        :is(.card-tag, .acc-card-tag) { color: #b35900; }
        .savings-card-tag { color: #1d1d1f; }

        :is(.card-title, .diff-card-title, .joy-card-title, .tune-card-title,
            .acc-card-title, .exp-card-title, .savings-card-title) {
            font-size: 30px;
            font-weight: 700;
            color: #1d1d1f;
            margin: 0 0 8px 0;
            line-height: 1.15;
            letter-spacing: -0.01em;
        }
        .card-title { font-size: 28px; font-weight: 600; }

        :is(.card-subtitle, .diff-card-subtitle, .joy-card-subtitle, .tune-card-subtitle,
            .acc-card-subtitle, .exp-card-subtitle) {
            font-size: 17px;
            color: #424245;
            margin: 0 0 12px 0;
            line-height: 1.35;
        }
        .card-subtitle { color: #86868b; }
        .card-price { font-size: 14px; color: #1d1d1f; }

        /* Card images */
        :is(.card-image-wrapper, .diff-card-img-wrapper, .joy-card-img-wrapper, .tune-card-img-wrapper,
            .acc-card-img-wrapper, .exp-card-img-wrapper, .savings-card-img-wrapper) {
            width: 100%;
            height: var(--img-h);
            margin-top: auto;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            overflow: hidden;
        }
        :is(.card-image-wrapper, .diff-card-img-wrapper, .joy-card-img-wrapper, .tune-card-img-wrapper,
            .acc-card-img-wrapper, .exp-card-img-wrapper, .savings-card-img-wrapper) img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            display: block;
        }

        /* ==========================================
           6. FOOTER
           ========================================== */
        .footer-section {
            max-width: 1260px;
            margin: 60px auto 40px auto;
            padding: 0 20px;
        }
        .quick-links-title { font-size: 28px; font-weight: 600; margin: 0 0 20px 0; }
        .quick-links-buttons { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 50px; }

        .pill-btn {
            display: inline-block;
            padding: 10px 22px;
            border: 1px solid #86868b;
            border-radius: 30px;
            color: #1d1d1f;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.2s ease;
        }
        .pill-btn:hover { background-color: #1d1d1f; color: #fff; border-color: #1d1d1f; }

        .footnote-text {
            font-size: 12px;
            color: #6e6e73;
            line-height: 1.6;
            border-top: 1px solid #d2d2d7;
            padding-top: 20px;
        }
        .footnote-text p { margin: 0 0 14px 0; overflow-wrap: anywhere; }
        .footnote-text a { color: #424245; text-decoration: underline; }
        .footnote-text a:hover { color: #1d1d1f; }

        .global-footer {
            background-color: #f5f5f7;
            color: #424245;
            font-size: 12px;
            line-height: 1.5;
            padding: 20px 0 40px 0;
            border-top: 1px solid #d2d2d7;
            margin-top: 40px;
        }
        .footer-inner { max-width: 1024px; margin: 0 auto; padding: 0 20px; }

        .footer-directory {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #d2d2d7;
            margin-top: 15px;
        }
        .footer-column h3 { font-size: 12px; font-weight: 600; color: #1d1d1f; margin: 0 0 8px 0; }
        .footer-column ul { list-style: none; padding: 0; margin: 0 0 20px 0; }
        .footer-column ul li { margin-bottom: 8px; }
        .footer-column ul li a { color: #515154; text-decoration: none; }
        .footer-column ul li a:hover { color: #1d1d1f; text-decoration: underline; }

        .footer-shop-note { padding: 15px 0; border-bottom: 1px solid #d2d2d7; color: #6e6e73; }
        .footer-shop-note.no-border { border-bottom: none; }
        .footer-shop-note a { color: #0066cc; text-decoration: none; }
        .footer-shop-note a:hover { text-decoration: underline; }

        /* ==========================================
           7. TABLET (max 1024px)
           ========================================== */
        @media (max-width: 1024px) {
            :root {
                --card-w: 380px;
                --card-h: 480px;
                --img-h: 240px;
                --card-pad: 28px;
            }
            .apple-card { --card-w: 330px; --card-h: 400px; --card-pad: 30px; --img-h: 220px; }

            .product-icons-section { gap: 8px; }
            :is(.card-subtitle, .diff-card-subtitle, .joy-card-subtitle, .tune-card-subtitle,
                .acc-card-subtitle, .exp-card-subtitle) { font-size: 15px; }
            :is(.diff-card-title, .joy-card-title, .tune-card-title,
                .acc-card-title, .exp-card-title, .savings-card-title) { font-size: 26px; }
        }

        /* ==========================================
           8. MOBILE (max 768px)
           ========================================== */
        @media (max-width: 768px) {
            :root {
                --card-w: min(82vw, 310px);
                --card-h: 410px;
                --img-h: 190px;
                --card-pad: 20px;
            }
            .apple-card { --card-w: min(78vw, 290px); --card-h: 380px; --card-pad: 22px; --img-h: 180px; }

            :is(.apple-card, .diff-card, .joy-card, .tune-card, .acc-card, .exp-card, .savings-card) {
                border-radius: 20px;
            }

            .nav-list { justify-content: flex-start; gap: 22px; }
            .global-nav { justify-content: flex-start; }
            .promo-banner { font-size: 12px; }

            /* Hero stacks vertically */
            .hero-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                min-height: 0;
                padding: 150px 16px 8px 16px;
            }
            .hero-left, .hero-right { flex: none; width: 100%; }
            .hero-right { text-align: left; order: 2; }
            .promo-banner { padding: 14px 16px; }
            .icons-wrap { margin: 8px auto 24px; }
            .icons-next { display: none; }

            /* Category icons: swipeable row */
            .product-icons-section {
                justify-content: flex-start;
                gap: 12px;
                margin: 24px auto;
                padding: 0 16px;
            }
            .prod-icon-item img { height: 56px; margin-bottom: 8px; }
            .prod-icon-item span { font-size: 12px; }

            /* Sections */
            :is(.latest-section, .difference-section, .joy-section, .tune-section,
                .acc-section, .exp-section, .savings-section) {
                padding: 0 16px;
                margin: 28px auto 40px auto;
            }
            .latest-section { margin-top: 40px; }
            :is(.latest-header, .difference-header, .joy-header, .tune-header,
                .acc-header, .exp-header, .savings-header) { margin-bottom: 12px; }

            /* swipe on touch, so arrows are not needed */
            .carousel-arrows { display: none; }
            :is(.carousel-container, .diff-carousel-container, .joy-carousel-container,
                .tune-carousel-container, .acc-carousel-container, .exp-carousel-container,
                .savings-carousel-container) { gap: 14px; }

            :is(.card-title, .diff-card-title, .joy-card-title, .tune-card-title,
                .acc-card-title, .exp-card-title, .savings-card-title) {
                font-size: 20px;
                margin-bottom: 6px;
            }
            :is(.card-subtitle, .diff-card-subtitle, .joy-card-subtitle, .tune-card-subtitle,
                .acc-card-subtitle, .exp-card-subtitle) {
                font-size: 14px;
                margin-bottom: 8px;
            }

            /* Footer */
            .footer-section { padding: 0 16px; margin-top: 40px; }
            .quick-links-title { font-size: 22px; }
            .quick-links-buttons { margin-bottom: 30px; }
            .pill-btn { padding: 8px 16px; font-size: 13px; }
            .footer-inner { padding: 0 16px; }
            .footer-directory { grid-template-columns: repeat(2, 1fr); }
        }

        /* ==========================================
           9. SMALL PHONES (max 420px)
           ========================================== */
        @media (max-width: 420px) {
            .footer-directory { grid-template-columns: 1fr; }
            .nav-list { gap: 18px; }
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="global-nav">
    <ul class="nav-list">
        <li><a href="#" class="nav-icon" aria-label="Apple"><svg width="14" height="16" viewBox="0 0 24 24"><path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701"/></svg></a></li>
        <li><a href="#">Store</a></li>
        <li><a href="#">Mac</a></li>
        <li><a href="#">iPad</a></li>
        <li><a href="#">iPhone</a></li>
        <li><a href="#">Watch</a></li>
        <li><a href="#">AirPods</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Entertainment</a></li>
        <li><a href="#">Accessories</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#" class="nav-icon" aria-label="Search"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1d1d1f" stroke-width="2.4" stroke-linecap="round"><circle cx="10" cy="10" r="7"/><path d="M15.5 15.5L22 22"/></svg></a></li>
        <li><a href="#" class="nav-icon" aria-label="Bag"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#1d1d1f" stroke-width="2.2" stroke-linejoin="round" stroke-linecap="round"><path d="M4 8h16l-1 13H5L4 8z"/><path d="M8.500 8V6.500a3.500 3.500 0 017 0V8"/></svg></a></li>
    </ul>
</nav>

<!-- Promo Banner -->
<div class="promo-banner">
    Get up to 12 months of No Cost EMI<sup>◊</sup> plus up to ₹15000.00 instant cashback<sup>Δ</sup> on selected products with eligible cards. <a href="#">See offers <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="#0066cc" stroke-width="1.3" stroke-linecap="round"><circle cx="8" cy="8" r="6.700"/><path d="M8 4.800v6.400M4.800 8h6.400"/></svg></a>
</div>

<!-- Store Hero Section -->
<div class="hero-container">
    <div class="hero-left">
        <h1>Store</h1>
    </div>

    <div class="hero-bg-image">
        <img src="iphone.jpg" alt="Festive lotus">
    </div>

    <div class="hero-right">
        <h3>Spread joy with the<br>products you love.</h3>
        <p><a href="#">Connect with a Specialist &#8599;</a></p>
        <p><a href="#">Find an Apple Store &#8599;</a></p>
    </div>
</div>

<!-- Category Icons Row -->
<div class="icons-wrap">
<div class="product-icons-section" id="iconsRow">
    <a href="#" class="prod-icon-item">
        <img src="mac.jpg" alt="Mac">
        <span>Mac</span>
    </a>
    <a href="#" class="prod-icon-item">
        <img src="iphn.jpg" alt="iPhone">
        <span>iPhone</span>
    </a>
    <a href="#" class="prod-icon-item">
        <img src="ipad.jpg" alt="iPad">
        <span>iPad</span>
    </a>
    <a href="#" class="prod-icon-item">
        <img src="watch.jpg" alt="Apple Watch">
        <span>Apple Watch</span>
    </a>
    <a href="#" class="prod-icon-item">
        <img src="home.jpg" alt="Home">
        <span>Home</span>
    </a>
    <a href="#" class="prod-icon-item">
        <img src="airpod.jpg" alt="AirPods">
        <span>AirPods</span>
    </a>
    <a href="#" class="prod-icon-item">
        <img src="airtag.jpg" alt="AirTag" onerror="this.parentNode.style.display='none'">
        <span>AirTag</span>
    </a>
</div>
<button class="icons-next" onclick="slideIcons()" aria-label="Next">&rsaquo;</button>
</div>

<!-- "The Latest" Section -->
<div class="latest-section">
    <div class="latest-header">
        <h2 class="latest-title">
            <span class="highlight-latest">The latest.</span>
            <span class="main-heading-text">Meet the new arrivals this season.</span>
        </h2>
        <div class="carousel-arrows">
            <button class="arrow-btn" onclick="slideCarousel(-1)">&lsaquo;</button>
            <button class="arrow-btn" onclick="slideCarousel(1)">&rsaquo;</button>
        </div>
    </div>

    <div class="carousel-container" id="cardsCarousel">
        <?php
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $title    = htmlspecialchars($row['title']);
                $subtitle = htmlspecialchars($row['subtitle']);
                $price    = htmlspecialchars($row['price']);
                $image    = htmlspecialchars($row['image']);

                echo '<div class="apple-card">';
                echo '<div>';
                echo '<div class="card-tag">NEW</div>';
                echo '<h3 class="card-title">' . $title . '</h3>';
                echo '<p class="card-subtitle">' . $subtitle . '</p>';
                echo '<div class="card-price">From ₹' . $price . '</div>';
                echo '</div>';
                echo '<div class="card-image-wrapper">';
                echo '<img src="' . $image . '" alt="' . $title . '">';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </div>
</div>

<!-- "The Apple Store Difference" Section -->
<div class="difference-section">
    <div class="difference-header">
        <h2 class="difference-title">
            <span class="highlight-difference">The Apple Store Difference.</span> Celebrate the season your way.
        </h2>
        <div class="carousel-arrows">
            <button class="arrow-btn" onclick="slideDiffCarousel(-1)">&lsaquo;</button>
            <button class="arrow-btn" onclick="slideDiffCarousel(1)">&rsaquo;</button>
        </div>
    </div>

    <div class="diff-carousel-container" id="diffCarousel">
        <div class="diff-card">
            <div>
                <div class="diff-card-tag">FESTIVE OFFER</div>
                <h3 class="diff-card-title">Get up to 12 months of No Cost EMI° this season.</h3>
                <p class="diff-card-subtitle">Plus up to ₹15000.00 instant cashback.<sup>Δ</sup></p>
            </div>
            <div class="diff-card-img-wrapper">
                <img src="c1.jpeg" alt="Festive Offer Apple Floral Artwork">
            </div>
        </div>

        <div class="diff-card">
            <div>
                <div class="diff-card-tag">ONLY AT APPLE</div>
                <h3 class="diff-card-title">Limited edition.<br>Unlimited joy.</h3>
                <p class="diff-card-subtitle">Special Edition AirPods with Wireless Charging Case featuring festive engraving.<sup>†</sup></p>
            </div>
            <div class="diff-card-img-wrapper">
                <img src="c2.jpeg" alt="Special Edition AirPods">
            </div>
        </div>

        <div class="diff-card">
            <div>
                <div class="diff-card-tag">FREE DELIVERY &amp; PICKUP</div>
                <h3 class="diff-card-title">Get free delivery or pick up at Apple Store.</h3>
                <p class="diff-card-subtitle">Choose options at checkout for convenient delivery or easy in-store pickup.</p>
            </div>
            <div class="diff-card-img-wrapper">
                <img src="c4.jpeg" alt="Delivery and Pickup">
            </div>
        </div>
    </div>
</div>

<!-- "Joy starts here" Section -->
<div class="joy-section">
    <div class="joy-header">
        <h2 class="joy-title">
            <span class="highlight-joy">Joy starts here.</span> Make it a season to remember.
        </h2>
        <div class="carousel-arrows">
            <button class="arrow-btn" onclick="slideJoyCarousel(-1)">&lsaquo;</button>
            <button class="arrow-btn" onclick="slideJoyCarousel(1)">&rsaquo;</button>
        </div>
    </div>

    <div class="joy-carousel-container" id="joyCarousel">
        <div class="joy-card">
            <div>
                <div class="joy-card-tag">TODAY AT APPLE</div>
                <h3 class="joy-card-title">Workshop: Draw your own rangoli on iPad.</h3>
                <p class="joy-card-subtitle">Join a free in-store session and create a rangoli design to share this festive season using Procreate.</p>
            </div>
            <div class="joy-card-img-wrapper">
                <img src="d1.jpeg" alt="Today at Apple Workshop">
            </div>
        </div>

        <div class="joy-card">
            <div>
                <div class="joy-card-tag">FESTIVE WALLPAPER</div>
                <h3 class="joy-card-title">Display your creativity.</h3>
                <p class="joy-card-subtitle">Create, download and share your own rangoli for the season.</p>
            </div>
            <div class="joy-card-img-wrapper">
                <img src="d2.jpeg" alt="Festive Wallpaper Phone">
            </div>
        </div>

        <div class="joy-card">
            <div>
                <div class="joy-card-tag">APPLE WATCH</div>
                <h3 class="joy-card-title">Celebrate every moment.</h3>
                <p class="joy-card-subtitle">Track your health, workouts, and stay connected with friends and family.</p>
            </div>
            <div class="joy-card-img-wrapper">
                <img src="d3.jpeg" alt="Apple Watch">
            </div>
        </div>
    </div>
</div>

<!-- "Tune in to joy" Section -->
<div class="tune-section">
    <div class="tune-header">
        <h2 class="tune-title">
            <span class="highlight-tune">Tune in to joy.</span> Discover a world of great sound.
        </h2>
        <div class="carousel-arrows">
            <button class="arrow-btn" onclick="slideTuneCarousel(-1)">&lsaquo;</button>
            <button class="arrow-btn" onclick="slideTuneCarousel(1)">&rsaquo;</button>
        </div>
    </div>

    <div class="tune-carousel-container" id="tuneCarousel">
        <div class="tune-card">
            <div>
                <div class="tune-card-tag">APPLE MUSIC</div>
                <h3 class="tune-card-title">Get 3 months of Apple Music free.</h3>
                <p class="tune-card-subtitle">Included with the purchase of selected Apple devices.<sup>*</sup></p>
            </div>
            <div class="tune-card-img-wrapper">
                <img src="e1.jpeg" alt="Apple Music Hindi Pop">
            </div>
        </div>

        <div class="tune-card">
            <div>
                <div class="tune-card-tag">ONLY AT APPLE</div>
                <h3 class="tune-card-title">Special Edition AirPods 5 with Wireless Charging Case.</h3>
            </div>
            <div class="tune-card-img-wrapper">
                <img src="e2.jpeg" alt="Special Edition AirPods">
            </div>
        </div>

        <div class="tune-card">
            <div>
                <div class="tune-card-tag">NEW</div>
                <h3 class="tune-card-title">HomePod mini 2 - Pink</h3>
                <p class="tune-card-subtitle">Room-filling sound in a compact design.</p>
            </div>
            <div class="tune-card-img-wrapper">
                <img src="e3.jpeg" alt="HomePod mini">
            </div>
        </div>
    </div>
</div>

<!-- "Accessories" Section -->
<div class="acc-section">
    <div class="acc-header">
        <h2 class="acc-title">
            <span class="highlight-acc">Accessories.</span> Get more attached to your devices this season.
        </h2>
        <div class="carousel-arrows">
            <button class="arrow-btn" onclick="slideAccCarousel(-1)">&lsaquo;</button>
            <button class="arrow-btn" onclick="slideAccCarousel(1)">&rsaquo;</button>
        </div>
    </div>

    <div class="acc-carousel-container" id="accCarousel">
        <div class="acc-card">
            <div>
                <h3 class="acc-card-title">Perfectly paired gifts.</h3>
                <p class="acc-card-subtitle">Explore accessories in new colours, styles and textures you'll love.</p>
            </div>
            <div class="acc-card-img-wrapper">
                <img src="r1.jpeg" alt="Perfectly paired gifts">
            </div>
        </div>

        <div class="acc-card">
            <div>
                <div class="acc-card-tag">NEW</div>
                <h3 class="acc-card-title">iPhone Duo Case – Sand</h3>
            </div>
            <div class="acc-card-img-wrapper">
                <img src="r2.jpeg" alt="iPhone Duo Case Sand">
            </div>
        </div>

        <div class="acc-card">
            <div>
                <div class="acc-card-tag">NEW</div>
                <h3 class="acc-card-title">iPhone Silicone Case with MagSafe – Magenta</h3>
            </div>
            <div class="acc-card-img-wrapper">
                <img src="r3.jpeg" alt="iPhone Silicone Case Magenta">
            </div>
        </div>
    </div>
</div>

<!-- "The Apple Experience" Section -->
<div class="exp-section">
    <div class="exp-header">
        <h2 class="exp-title">
            <span class="highlight-exp">The Apple experience.</span> Do even more with Apple products and services.
        </h2>
        <div class="carousel-arrows">
            <button class="arrow-btn" onclick="slideExpCarousel(-1)">&lsaquo;</button>
            <button class="arrow-btn" onclick="slideExpCarousel(1)">&rsaquo;</button>
        </div>
    </div>

    <div class="exp-carousel-container" id="expCarousel">
        <div class="exp-card">
            <div>
                <h3 class="exp-card-title">Easy setup. Simple controls. Smarter home.</h3>
                <p class="exp-card-subtitle">With Apple Home devices and accessories, it's never been simpler to set up and control a connected home.</p>
            </div>
            <div class="exp-card-img-wrapper">
                <img src="s1.jpeg" alt="Smarter home devices">
            </div>
        </div>

        <div class="exp-card">
            <div>
                <h3 class="exp-card-title">Apple Intelligence and Siri AI. More personal. More powerful.<sup>3</sup></h3>
            </div>
            <div class="exp-card-img-wrapper">
                <img src="s2.jpeg" alt="Apple Intelligence and Siri AI">
            </div>
        </div>

        <div class="exp-card">
            <div>
                <h3 class="exp-card-title">Seamless connectivity across all your devices.</h3>
                <p class="exp-card-subtitle">Work, play and connect effortlessly with ecosystem integration.</p>
            </div>
            <div class="exp-card-img-wrapper">
                <img src="s3.jpeg" alt="Apple Ecosystem">
            </div>
        </div>
    </div>
</div>

<!-- "Savings and Offers" Section -->
<div class="savings-section">
    <div class="savings-header">
        <h2 class="savings-title">
            <span class="highlight-savings">Savings and offers.</span> Exclusive deals, special stores and more.
        </h2>
        <div class="carousel-arrows">
            <button class="arrow-btn" onclick="slideSavingsCarousel(-1)">&lsaquo;</button>
            <button class="arrow-btn" onclick="slideSavingsCarousel(1)">&rsaquo;</button>
        </div>
    </div>

    <div class="savings-carousel-container" id="savingsCarousel">
        <div class="savings-card">
            <div>
                <div class="savings-card-tag">EDUCATION</div>
                <h3 class="savings-card-title">Save on a new Mac, iPad and Apple Watch with education pricing.<sup>∞</sup></h3>
            </div>
            <div class="savings-card-img-wrapper">
                <img src="t1.jpeg" alt="Mac and Apple Watch Education Pricing">
            </div>
        </div>
    </div>
</div>

<!-- Quick Links & Footnote Section -->
<div class="footer-section">
    <h2 class="quick-links-title">Quick Links</h2>
    <div class="quick-links-buttons">
        <a href="#" class="pill-btn">Find a Store</a>
        <a href="#" class="pill-btn">Order Status</a>
        <a href="#" class="pill-btn">Shopping Help</a>
        <a href="#" class="pill-btn">Your Saves</a>
    </div>

    <div class="footnote-text">
        <p>◊ From 11 October 2026 through 11 November 2026, No Cost EMI is available with the purchase of an eligible product made using qualifying cards on 3-, 6-, 9- and 12-month tenures from most leading card issuers. Eligible iPhone Duo, Apple Watch, AirPods and Beats products are available with No Cost EMI on 3- and 6-month tenures only. Monthly pricing is rounded to the nearest rupee. Exact pricing will be provided by your card issuer, subject to your card issuer's terms and conditions. Minimum order spend applies as per your card issuer's threshold. No Cost EMI is not available to Business customers and cannot be combined with Apple Store for Education or Corporate Employee Purchase Plan pricing. Card eligibility is subject to terms and conditions between you and your card issuer. Offer may be revised or withdrawn at any time without any prior notice. <a href="#">Terms apply</a>.</p>

        <p>Δ Instant cashback is available with the purchase of an eligible product with qualifying American Express, Axis Bank and ICICI Bank cards only. Minimum transaction value of ₹10001.00 applies. <a href="#">Click here</a> to see instant cashback amounts and eligible devices. Instant cashback is available for up to two orders per rolling 90-day period with an eligible card. Card eligibility is subject to terms and conditions between you and your card issuer. Total transaction value is calculated after any trade-in credit or eligible discount is applied. Any subsequent order adjustment(s) or cancellation(s) may result in instant cashback being recalculated, and any refund may be adjusted to account for instant cashback clawback; this may result in no refund being made to you. Offer may be revised or withdrawn at any time without any prior notice. <a href="#">Additional terms apply</a>. Instant cashback is not available to Business customers and cannot be combined with Apple Store for Education or Corporate Employee Purchase Plan pricing. Multiple separate orders cannot be combined for instant cashback.</p>

        <p>‡ Listed pricing is Maximum Retail Price (inclusive of all taxes).</p>

        <p>† Special Edition AirPods 5 with Wireless Charging Case available 11 October to 11 November 2026 in India at Apple Store locations, the Apple Store Online, and 000800 040 1966 while supplies last. Not valid with any other AirPods offer. Cannot be combined with Business, Education or Corporate Employee Purchase Plans. Quantity limit of 2 units per customer apply. If you need to replace or repair Special Edition AirPods 5 with Wireless Charging Case, subject to supply, Apple may provide you with standard edition AirPods 5 with Wireless Charging Case for replacement or repair.</p>

        <p>⌘ Mac, iPad and Apple Watch trade-in is available only in-store in India. Apple Retail Online in India does not offer trade-in for Mac, iPad and Apple Watch. Trade-in values will vary based on condition, year and configuration of your trade-in device.</p>
    </div>
</div>

<!-- Global Footer Directory Section -->
<footer class="global-footer">
    <div class="footer-inner">
        <div class="footer-shop-note">
            We use your location to show you delivery options faster. We found your location using your IP address or because you entered it during a previous visit to Apple.
        </div>

        <div class="footer-shop-note no-border">
            More ways to shop: <a href="#">Find an Apple Store</a> or <a href="#">other retailer</a> near you. Or call 000800 040 1966.
        </div>

        <div class="footer-directory">
            <div class="footer-column">
                <h3>Shop and Learn</h3>
                <ul>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">iPad</a></li>
                    <li><a href="#">iPhone</a></li>
                    <li><a href="#">Watch</a></li>
                    <li><a href="#">AirPods</a></li>
                    <li><a href="#">TV &amp; Home</a></li>
                    <li><a href="#">AirTag</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Gift Cards</a></li>
                </ul>
                <h3>Apple Wallet</h3>
                <ul>
                    <li><a href="#">Wallet</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Account</h3>
                <ul>
                    <li><a href="#">Manage Your Apple Account</a></li>
                    <li><a href="#">Apple Store Account</a></li>
                    <li><a href="#">iCloud.com</a></li>
                </ul>
                <h3>Entertainment</h3>
                <ul>
                    <li><a href="#">Apple One</a></li>
                    <li><a href="#">Apple TV</a></li>
                    <li><a href="#">Apple Music</a></li>
                    <li><a href="#">Apple Arcade</a></li>
                    <li><a href="#">Apple Podcasts</a></li>
                    <li><a href="#">Apple Books</a></li>
                    <li><a href="#">App Store</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Apple Store</h3>
                <ul>
                    <li><a href="#">Find a Store</a></li>
                    <li><a href="#">Genius Bar</a></li>
                    <li><a href="#">Today at Apple</a></li>
                    <li><a href="#">Apple Summer Camp</a></li>
                    <li><a href="#">Ways to Buy</a></li>
                    <li><a href="#">Apple Trade In</a></li>
                    <li><a href="#">Recycling Programme</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Shopping Help</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>For Business</h3>
                <ul>
                    <li><a href="#">Apple and Business</a></li>
                </ul>
                <h3>For Education</h3>
                <ul>
                    <li><a href="#">Apple and Education</a></li>
                    <li><a href="#">Shop for Education</a></li>
                    <li><a href="#">Shop for College</a></li>
                </ul>
                <h3>For Healthcare</h3>
                <ul>
                    <li><a href="#">Apple in Healthcare</a></li>
                    <li><a href="#">Health on Apple Watch</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Apple Values</h3>
                <ul>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Environment</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Supply Chain</a></li>
                </ul>
                <h3>About Apple</h3>
                <ul>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Apple Leadership</a></li>
                    <li><a href="#">Career Opportunities</a></li>
                    <li><a href="#">Investors</a></li>
                    <li><a href="#">Ethics &amp; Compliance</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact Apple</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    // Scroll a carousel by roughly one card width (works for every screen size)
    function slideBy(id, direction) {
        var carousel = document.getElementById(id);
        if (!carousel) return;
        var card = carousel.firstElementChild;
        var amount = card ? card.getBoundingClientRect().width + 20 : 400;
        carousel.scrollBy({ left: direction * amount, behavior: 'smooth' });
    }

    function slideIcons() {
        document.getElementById('iconsRow').scrollBy({ left: 300, behavior: 'smooth' });
    }

    function slideCarousel(d)        { slideBy('cardsCarousel', d); }
    function slideDiffCarousel(d)    { slideBy('diffCarousel', d); }
    function slideJoyCarousel(d)     { slideBy('joyCarousel', d); }
    function slideTuneCarousel(d)    { slideBy('tuneCarousel', d); }
    function slideAccCarousel(d)     { slideBy('accCarousel', d); }
    function slideExpCarousel(d)     { slideBy('expCarousel', d); }
    function slideSavingsCarousel(d) { slideBy('savingsCarousel', d); }
</script>

</body>
</html>
