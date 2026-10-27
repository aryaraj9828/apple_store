<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "apple_store";
$port = 3307; // ഇവിടെ പോർട്ട് 3307 എന്ന് ചേർക്കുക

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
        body {
            font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "Helvetica Neue", Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        /* 1. Global Navigation Bar */
        .global-nav {
            background-color: #161617;
            height: 44px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .nav-list {
            list-style: none;
            display: flex;
            gap: 35px;
            margin: 0;
            padding: 0;
            align-items: center;
        }
        .nav-list li a {
            color: #f5f5f7;
            text-decoration: none;
            font-size: 12px;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        .nav-list li a:hover {
            opacity: 1;
        }

        /* 2. Promo Banner */
        .promo-banner {
            background-color: #f5f5f7;
            padding: 12px 0;
            text-align: center;
            font-size: 14px;
            color: #1d1d1f;
            border-bottom: 1px solid #d2d2d7;
        }
        .promo-banner a {
            color: #0066cc;
            text-decoration: none;
        }
        .promo-banner a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="global-nav">
    <ul class="nav-list">
        <li><a href="#"></a></li>
        <li><a href="#">Store</a></li>
        <li><a href="#">Mac</a></li>
        <li><a href="#">iPad</a></li>
        <li><a href="#">iPhone</a></li>
        <li><a href="#">Watch</a></li>
        <li><a href="#">AirPods</a></li>
        <li><a href="#">TV & Home</a></li>
        <li><a href="#">Entertainment</a></li>
        <li><a href="#">Accessories</a></li>
        <li><a href="#">Support</a></li>
    </ul>
</nav>

<!-- Promo Banner -->
<div class="promo-banner">
    Get up to 12 months of No Cost EMI plus up to ₹15000.00 instant cashback on selected products with eligible cards. <a href="#">See offers &gt;</a>
 </div>

<style>
    /* Hero Banner Section Container */
    .hero-container {
    position: relative;
    max-width: 1400px;
    margin: 0 auto;
    padding: 10px 20px 0 20px;
    min-height: 40px; /* Container height kooti */
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
}

    /* Background/Center Floral Image */
    .hero-bg-image {
    position: absolute;
    top: 37%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 1000px; /* Image width nallapole valuthaki */
    z-index: 1;
    pointer-events: none;
}

   .hero-bg-image img {
    width: 100%;
    height: auto;
    min-height: 350px; /* Height-um scaling-um kooti */
    object-fit: contain;
    display: block;
    mix-blend-mode: multiply;
}

    /* Left Text Side: "Store." */
    .hero-left {
        position: relative;
        z-index: 2;
        flex: 1;
    }

    .hero-left h1 {
        font-size: 68px;
        font-weight: 700;
        margin: 0;
        letter-spacing: -0.015em;
        background: linear-gradient(90deg, #de386a, #ea5a39, #f48135);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Right Text Side: "Spread joy..." */
    .hero-right {
        position: relative;
        z-index: 2;
        flex: 1;
        text-align: right;
    }

    .hero-right h2 {
        font-size: 32px;
        font-weight: 700;
        color: #1d1d1f;
        margin: 0 0 10px 0;
        line-height: 1.15;
        letter-spacing: -0.005em;
    }

    .hero-right p {
        margin: 6px 0;
        font-size: 14px;
        font-weight: 400;
    }

    .hero-right a {
        color: #0066cc;
        text-decoration: none;
    }
    .hero-right a:hover {
        text-decoration: underline;
    }





    /* Product Category Icons Row */
.product-icons-section {
    max-width: 1260px;
    margin: 40px auto 40px auto;
    padding: 0 20px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    gap: 48px;
    overflow-x: auto;
    scrollbar-width: none;
    clear: both;
}
.product-icons-section::-webkit-scrollbar {
    display: none;
}
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
.prod-icon-item:hover {
    transform: scale(1.05);
}
.prod-icon-item img {
    height: 78px;
    width: auto;
    object-fit: contain;
    margin-bottom: 12px;
    display: block;
}
.prod-icon-item span {
    font-size: 13px;
    font-weight: 600;
    color: #1d1d1f;
}

/* "The Latest" Carousel Section */
.latest-section {
    max-width: 1340px;
    width: 100%;
    margin: 90px auto 40px auto;
    padding: 0 20px;
    clear: both;
    position: relative; /* Relative positioning kodukkuka */
   display: block;
   box-sizing: border-box;
    clear: both;
}

.latest-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
    width: 100%;
    box-sizing: border-box;
    flex-wrap: nowrap;
    
}

.latest-title {
   font-size: 36px !important;
    font-weight: 600 !important;
    color: #1d1d1f;
    margin: 0;
    display: flex;
    
    align-items: baseline;
    gap: 10px;
    white-space: nowrap;
    width: 100%;
    flex-wrap: nowrap;
}

.latest-tag {
    font-size: 28px; /* Meet the new enna size-ilekku thanne maatriyathu */
    font-weight: 600;
    color: #86868b;
}
.highlight-latest {
    background: linear-gradient(90deg, #de386a, #ea5a39, #f48135);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 36px;
    font-weight: 600;
    white-space: nowrap !important;
}
.main-heading-text {
    color: #1d1d1f !important;
    font-size: 36px; /* ഇതും കൂട്ടി */
    font-weight: 600;
    white-space: nowrap !important;
}

/* Arrow Navigation Buttons */
.carousel-arrows {
    display: flex;
    gap: 10px;
    flex-shrink: 0;
}

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
    transition: background-color 0.2s, opacity 0.2s;
}

.arrow-btn:hover {
    background-color: #d2d2d7;
}

/* Horizontal Cards Carousel Container */
.carousel-container {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
    scrollbar-width: none;
    padding: 10px 0 20px 0;
}

.carousel-container::-webkit-scrollbar {
    display: none;
}

/* Apple Style Large Card */
.apple-card {
    min-width: 380px;
    width: 380px;
    height: 420px;
    background-color: #fff;
    border-radius: 28px;
    padding: 40px 40px 0 40px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-sizing: border-box;
    flex-shrink: 0;
    transition: box-shadow 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    
}


.apple-card img {
    width: 100% !important;
    max-width: 620px !important; /* ആവശ്യമെങ്കിൽ ഈ സൈസ് കൂട്ടിയോ കുറച്ചോ കൊടുക്കാം */
    height: auto !important;
    object-fit: contain;
    margin: 0 auto;
    display: block;
}

.apple-card:hover {
    
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    transform: none !important;
}

.card-tag {
    font-size: 12px;
    font-weight: 600;
    color: #b35900;
    text-transform: uppercase;
    margin-bottom: 8px;
    letter-spacing: -0.01em;
}

.card-title {
    font-size: 28px;
    font-weight: 600;
    color: #1d1d1f;
    margin: 0 0 6px 0;
    line-height: 1.15;
}
.card-subtitle {
    font-size: 17px;
    color: #86868b;
    margin: 0 0 12px 0;
    line-height: 1.3;
}

.card-price {
    font-size: 14px;
    color: #1d1d1f;
    font-weight: 400;
}

.card-image-wrapper {
    width: 100%;
    height: 280px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-image-wrapper img {
    max-width: 80%;
    max-height: 100%;
    object-fit: contain;
    display: block;
}



/* "The Apple Store Difference" Section */
.difference-section {
    max-width: 1340px;
    margin: 40px auto 80px auto;
    padding: 0 20px;
}

.difference-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.difference-title {
    font-size: 28px;
    font-weight: 600;
    color: #1d1d1f;
    margin: 0;
}

.highlight-difference {
    background: linear-gradient(90deg, #de386a, #ea5a39, #f48135);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Horizontal Scroll Carousel Container */
.diff-carousel-container {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
    scrollbar-width: none;
    padding: 10px 0 20px 0;
}

.diff-carousel-container::-webkit-scrollbar {
    display: none;
}

/* Big Difference Card */
.diff-card {
    min-width: 480px;
    width: 480px;
    height: 520px;
    background-color: #ffffff;
    border-radius: 28px;
    padding: 40px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-sizing: border-box;
    flex-shrink: 0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.diff-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

.diff-card-tag {
    font-size: 12px;
    font-weight: 700;
    color: #de386a;
    text-transform: uppercase;
    margin-bottom: 12px;
    letter-spacing: 0.05em;
}

.diff-card-title {
    font-size: 32px;
    font-weight: 700;
    color: #1d1d1f;
    margin: 0 0 10px 0;
    line-height: 1.15;
    letter-spacing: -0.01em;
}

.diff-card-subtitle {
    font-size: 17px;
    color: #424245;
    margin: 0 0 12px 0;
    line-height: 1.35;
}

.diff-card-img-wrapper {
    width: 100%;
    height: 280px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    margin-top: auto;
    overflow: hidden;
}

.diff-card-img-wrapper img {
    width: 100% !important;
    max-width: 360px !important; /* ഇമേജിന്റെ പരമാവധി വീതി */
    height: auto !important;
    max-height: 260px !important;
    object-fit: contain !important;
    display: block;
    margin: 0 auto;
}



/* "Joy starts here" Section */
.joy-section {
    max-width: 1340px;
    margin: 40px auto 80px auto;
    padding: 0 20px;
}

.joy-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.joy-title {
    font-size: 28px;
    font-weight: 600;
    color: #1d1d1f;
    margin: 0;
}

.highlight-joy {
    background: linear-gradient(90deg, #de386a, #ea5a39, #f48135);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Horizontal Carousel Container */
.joy-carousel-container {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
    scrollbar-width: none;
    padding: 10px 0 20px 0;
}

.joy-carousel-container::-webkit-scrollbar {
    display: none;
}

/* Joy Section Cards */
.joy-card {
    min-width: 480px;
    width: 480px;
    height: 520px;
    background-color: #ffffff;
    border-radius: 28px;
    padding: 40px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-sizing: border-box;
    flex-shrink: 0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.joy-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}
.joy-card-tag {
    font-size: 12px;
    font-weight: 700;
    color: #de386a;
    text-transform: uppercase;
    margin-bottom: 12px;
    letter-spacing: 0.05em;
}

.joy-card-title {
    font-size: 32px;
    font-weight: 700;
    color: #1d1d1f;
    margin: 0 0 10px 0;
    line-height: 1.15;
    letter-spacing: -0.01em;
}

.joy-card-subtitle {
    font-size: 17px;
    color: #424245;
    margin: 0 0 12px 0;
    line-height: 1.35;
}

.joy-card-img-wrapper {
    width: 100%;
    height: 360px !important; /* ഹൈറ്റ് കൂട്ടി */
    display: flex;
    align-items: flex-end;
    justify-content: center;
    margin-top: auto;
}

.joy-card-img-wrapper img {
    width: 100% !important;
    max-width: 440px !important; /* ഇമേജിന്റെ വീതി കൂട്ടി */
    height: auto !important;
    max-height: 340px !important; /* മാക്സിമം ഹൈറ്റ് കൂട്ടി */
    object-fit: contain !important;
    border-radius: 12px;
}

/* "Tune in to joy" Section */
.tune-section {
    max-width: 1340px;
    margin: 40px auto 80px auto;
    padding: 0 20px;
    width: 100%;
    box-sizing: border-box;
}

.tune-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.tune-title {
    font-size: 28px;
    font-weight: 600;
    color: #1d1d1f;
    margin: 0;
}

.highlight-tune {
    background: linear-gradient(90deg, #de386a, #ea5a39, #f48135);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Horizontal Carousel Container - Strict Horizontal Flex */
.tune-carousel-container {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
    scrollbar-width: none;
    padding: 10px 0 20px 0;
    width: 100%;
}

.tune-carousel-container::-webkit-scrollbar {
    display: none;
}

/* Tune Section Cards */
.tune-card {
    min-width: 480px;
    width: 480px;
    height: 520px;
    background-color: #ffffff;
    border-radius: 28px;
    padding: 35px 35px 0px 35px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-sizing: border-box;
    flex-shrink: 0 !important; /* Cards keezhottu irangathirikkan */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.tune-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

.tune-card-tag {
    font-size: 12px;
    font-weight: 700;
    color: #de386a;
    text-transform: uppercase;
    margin-bottom: 12px;
    letter-spacing: 0.05em;
}

.tune-card-title {
    font-size: 32px;
    font-weight: 700;
    color: #1d1d1f;
    margin: 0 0 10px 0;
    line-height: 1.15;
    letter-spacing: -0.01em;
}

.tune-card-subtitle {
    font-size: 17px;
    color: #424245;
    margin: 0 0 12px 0;
    line-height: 1.35;
}

/* Image Wrapper & Size Increased */
.tune-card-img-wrapper {
    width: 100%;

     height: 270px !important; 
    display: flex;
    align-items: flex-end;
    justify-content: center;
    margin-top: auto;
}

.tune-card-img-wrapper img {
    width: 100% !important;
    max-width: 420px !important;
    height: auto !important;
    max-height: 260px !important;
    object-fit: contain !important;
    border-radius: 12px;
    display: block;
    margin: 0 auto;
}

/* Accessories Section Cards */

.acc-carousel-container {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 20px !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-behavior: smooth;
    scrollbar-width: none;
    width: 100% !important;
    box-sizing: border-box;
    padding: 10px 0px 20px 0px !important;
    scroll-padding-left: 20px;
}

.acc-section {
    max-width: 1340px !important;
    margin: 40px auto 80px auto;
    padding: 0 20px !important; /* പാഡിങ് ഒഴിവാക്കി ഫുൾ വിഡ്ത്ത് നൽകി */
}


.acc-header {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    padding: 0 !important;
    margin-bottom: 24px;
    }

.acc-carousel-container::-webkit-scrollbar {
    display: none;
}


/* .acc-card {
    min-width: 480px;
    width: 480px;
    height: 520px;
    background-color: #ffffff;
    border-radius: 28px;
    padding: 35px 35px 0 35px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-sizing: border-box;
    flex-shrink: 0 !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
} */
    .acc-card {
    min-width: 480px !important;
    width: 480px !important;
    height: 520px !important;
    flex-shrink: 0 !important; /* കാർഡുകൾ താഴേക്ക് പോകാതിരിക്കാൻ ഇത് നിർബന്ധമാണ് */
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    background-color: #ffffff;
    border-radius: 28px;
    padding: 35px 35px 0 35px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    box-sizing: border-box;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
}

.acc-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

.acc-card-tag {
    font-size: 12px;
    font-weight: 700;
    color: #b35900;
    text-transform: uppercase;
    margin-bottom: 12px;
    letter-spacing: 0.05em;
}

.acc-card-title {
    font-size: 32px;
    font-weight: 700;
    color: #1d1d1f;
    margin: 0 0 10px 0;
    line-height: 1.15;
    letter-spacing: -0.01em;
}

.acc-card-subtitle {
    font-size: 17px;
    color: #424245;
    margin: 0 0 12px 0;
    line-height: 1.35;
}

.acc-card-img-wrapper {
    width: 100%;
    
     height: 270px !important; 
    display: flex;
    align-items: flex-end;
    justify-content: center;
    margin-top: 20px !important;
    
}

.acc-card-img-wrapper img {
    width: 100% !important;
    max-width: 440px !important; /* ഇമേജിന്റെ വീതി കൂട്ടി */
    height: auto !important;
    max-height: 300px !important; /* ഇമേജിന്റെ ഉയരം കൂട്ടി */
    object-fit: contain !important;
    display: block;
    margin: 0 auto;
}





/* "The Apple Experience" Section */
.exp-section {
    max-width: 1340px;
    margin: 40px auto 80px auto;
    padding: 0 20px;
}

.exp-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.exp-title {
    font-size: 28px;
    font-weight: 600;
    color: #1d1d1f;
    margin: 0;
}

.highlight-exp {
    background: linear-gradient(90deg, #de386a, #ea5a39, #f48135);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Horizontal Carousel Container */
.exp-carousel-container {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 20px !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-behavior: smooth;
    scrollbar-width: none;
    width: 100% !important;
    box-sizing: border-box;
    padding: 10px 0 20px 0 !important;
}padding: 10px 0 20px 0;
}

.exp-carousel-container::-webkit-scrollbar {
    display: none;
}

/* Experience Cards */
.exp-card {
    min-width: 480px;
    width: 480px;
    height: 520px !important;
    background-color: #ffffff;
    border-radius: 28px;
    padding: 30px 30px 0 30px !important; /* m algal padding kurachu */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: flex-start !important;
    box-sizing: border-box;
    flex-shrink: 0 !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.exp-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

.exp-card-title {
    font-size: 30px;
    font-weight: 700;
    color: #1d1d1f;
    margin: 0 0 6px 0;
    line-height: 1.15;
    letter-spacing: -0.01em;
}

.exp-card-subtitle {
    font-size: 16px;
    color: #424245;
    margin: 0 0 8px 0;
    line-height: 1.35;
}

.exp-card-img-wrapper {
    width: 100%;
    height: 330px !important;
    flex-grow: 1;
    margin-top: 0 !important;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.exp-card-img-wrapper img {
    width: 100% !important;
    max-width: 460px !important; /* ഇമേജിന്റെ വീതി കൂട്ടി */
    height: auto !important;
    max-height: 320px !important; /* ഇമേജിന്റെ ഉയരം കൂട്ടി */
    object-fit: contain !important;
    display: block;
    margin: 0 auto;
}



/* "Savings and Offers" Section */
.savings-section {
    max-width: 1340px;
    margin: 40px auto 100px auto;
    padding: 0 20px;
}

.savings-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.savings-title {
    font-size: 28px;
    font-weight: 600;
    color: #1d1d1f;
    margin: 0;
}

.highlight-savings {
    background: linear-gradient(90deg, #de386a, #ea5a39, #f48135);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Horizontal Carousel Container */
.savings-carousel-container {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 20px !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-behavior: smooth;
    scrollbar-width: none;
    width: 100% !important;
    box-sizing: border-box;
    padding: 10px 0 20px 0 !important;
}

.savings-carousel-container::-webkit-scrollbar {
    display: none;
}

/* Savings Cards */
.savings-card {
    min-width: 480px;
    width: 480px;
    height: 520px !important;
    background-color: #ffffff;
    border-radius: 28px;
    padding: 30px 30px 0 30px !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: flex-start !important; /* space-between മാറ്റി ഗ്യാപ് കുറച്ചു */
    box-sizing: border-box;
    flex-shrink: 0 !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.savings-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

.savings-card-tag {
    font-size: 12px;
    font-weight: 700;
    color: #1d1d1f;
    text-transform: uppercase;
    margin-bottom: 8px;
    letter-spacing: 0.05em;
}

.savings-card-title {
    font-size: 30px;
    font-weight: 700;
    color: #1d1d1f;
    margin: 0 0 10px 0;
    line-height: 1.15;
    letter-spacing: -0.01em;
}

.savings-card-img-wrapper {
    width: 100%;
    height:320px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.savings-card-img-wrapper img {
    width: 100% !important;
    max-width: 450px !important; /* ഇമേജിന്റെ വീതി കൂട്ടി */
    height: auto !important;
    max-height: 310px !important; /* ഇമേജിന്റെ ഹൈറ്റ് കൂട്ടി വ്യക്തത വരുത്തി */
    object-fit: contain !important;
    display: block;
    margin: 0 auto;
}



/* Quick Links & Footnote Section */
.footer-section {
    max-width: 1260px;
    margin: 60px auto 40px auto;
    padding: 0 20px;
}

.quick-links-title {
    font-size: 28px;
    font-weight: 600;
    color: #1d1d1f;
    margin-bottom: 20px;
}

.quick-links-buttons {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 50px;
}

.pill-btn {
    display: inline-block;
    padding: 10px 22px;
    border: 1px solid #86868b;
    border-radius: 30px;
    color: #1d1d1f;
    text-decoration: none;
    font-size: 14px;
    font-weight: 400;
    transition: all 0.2s ease;
    background-color: transparent;
}

.pill-btn:hover {
    background-color: #1d1d1f;
    color: #ffffff;
    border-color: #1d1d1f;
}
/* Footnotes Styling */
.footnote-text {
    font-size: 12px;
    color: #6e6e73;
    line-height: 1.6;
    border-top: 1px solid #d2d2d7;
    padding-top: 20px;
}

.footnote-text p {
    margin-bottom: 14px;
}

.footnote-text a {
    color: #424245;
    text-decoration: underline;
}

.footnote-text a:hover {
    color: #1d1d1f;
}



/* Global Footer Directory Section */
.global-footer {
    background-color: #f5f5f7;
    color: #424245;
    font-size: 12px;
    line-height: 1.5;
    padding: 20px 0 40px 0;
    border-top: 1px solid #d2d2d7;
    margin-top: 40px;
}

.footer-inner {
    max-width: 1024px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-directory {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #d2d2d7;
}

.footer-column {
    flex: 1;
    min-width: 160px;
}

.footer-column h3 {
    font-size: 12px;
    font-weight: 600;
    color: #1d1d1f;
    margin: 0 0 8px 0;
}

.footer-column ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
}

.footer-column ul li {
    margin-bottom: 8px;
}

.footer-column ul li a {
    color: #515154;
    text-decoration: none;
}

.footer-column ul li a:hover {
    color: #1d1d1f;
    text-decoration: underline;
}

.footer-shop-note {
    padding: 15px 0;
    border-bottom: 1px solid #d2d2d7;
    color: #6e6e73;
}

.footer-shop-note a {
    color: #0066cc;
    text-decoration: none;
}

.footer-shop-note a:hover {
    text-decoration: underline;
}






/* ==========================================
   1. GLOBAL RESET & BASE STYLES
   ========================================== */
html, body {
    max-width: 100% !important;
    overflow-x: hidden !important;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

*, *:before, *:after {
    box-sizing: inherit;
}

/* Sections */
.savings-section, 
.acc-section, 
.exp-section, 
.tune-section,
.joy-section,
.difference-section {
    max-width: 1340px;
    margin: 40px auto 80px auto;
    padding: 0 20px;
    width: 100%;
    box-sizing: border-box;
}

/* Carousel Containers */
.savings-carousel-container,
.acc-carousel-container,
.exp-carousel-container,
.tune-carousel-container,
.joy-carousel-container,
.diff-carousel-container {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    gap: 20px;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-behavior: smooth;
    scrollbar-width: none;
    width: 100% !important;
    padding: 10px 0 20px 0;
    box-sizing: border-box;
}

.savings-carousel-container::-webkit-scrollbar,
.acc-carousel-container::-webkit-scrollbar,
.exp-carousel-container::-webkit-scrollbar,
.tune-carousel-container::-webkit-scrollbar,
.joy-carousel-container::-webkit-scrollbar,
.diff-carousel-container::-webkit-scrollbar {
    display: none;
}

/* ==========================================
   2. DESKTOP CARDS (Width > 1024px)
   ========================================== */
.savings-card, 
.acc-card, 
.exp-card, 
.tune-card,
.joy-card,
.diff-card {
    width: 480px !important;
    min-width: 480px !important;
    flex: 0 0 480px !important;
    height: 520px !important;
    background-color: #ffffff;
    border-radius: 28px;
    padding: 35px 35px 0 35px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    box-sizing: border-box;
    flex-shrink: 0 !important;
}

.savings-card-img-wrapper, 
.acc-card-img-wrapper, 
.exp-card-img-wrapper, 
.tune-card-img-wrapper,
.joy-card-img-wrapper,
.diff-card-img-wrapper {
    width: 100%;
    height: 280px;
    margin-top: auto;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.savings-card-img-wrapper img, 
.acc-card-img-wrapper img, 
.exp-card-img-wrapper img, 
.tune-card-img-wrapper img,
.joy-card-img-wrapper img,
.diff-card-img-wrapper img {
    width: 100%;
    max-width: 400px;
    height: auto;
    max-height: 260px;
    object-fit: contain;
    display: block;
    margin: 0 auto;
}

/* ==========================================
   3. TABLET SCREENS (769px to 1024px)
   ========================================== */
@media screen and (max-width: 1024px) {
    .savings-card, 
    .acc-card, 
    .exp-card, 
    .tune-card,
    .joy-card,
    .diff-card {
        width: 380px !important;
        min-width: 380px !important;
        flex: 0 0 380px !important;
        height: 480px !important;
        padding: 30px 25px 0 25px !important;
    }
}

/* ==========================================
   4. MOBILE SCREENS (Max Width: 768px)
   ========================================== */
@media screen and (max-width: 768px) {
    .savings-section, 
    .acc-section, 
    .exp-section, 
    .tune-section,
    .joy-section,
    .difference-section {
        padding: 0 12px !important;
        margin: 20px 0 !important;
    }

    /* മൊബൈലിൽ കാർഡുകൾ ഒതുങ്ങിനിൽക്കാൻ ഇത് നിർബന്ധമാണ് */
    .savings-card, 
    .acc-card, 
    .exp-card, 
    .tune-card,
    .joy-card,
    .diff-card {
        width: 82vw !important;
        min-width: 82vw !important;
        flex: 0 0 82vw !important;
        max-width: 310px !important;
        height: 410px !important;
        padding: 22px 18px 0 18px !important;
        border-radius: 20px !important;
    }

    .savings-card-title, 
    .acc-card-title, 
    .exp-card-title, 
    .tune-card-title,
    .joy-card-title,
    .diff-card-title {
        font-size: 20px !important;
        margin-bottom: 6px !important;
    }

    .savings-card-subtitle, 
    .acc-card-subtitle, 
    .exp-card-subtitle, 
    .tune-card-subtitle,
    .joy-card-subtitle,
    .diff-card-subtitle {
        font-size: 14px !important;
        margin-bottom: 8px !important;
    }

    .savings-card-img-wrapper, 
    .acc-card-img-wrapper, 
    .exp-card-img-wrapper, 
    .tune-card-img-wrapper,
    .joy-card-img-wrapper,
    .diff-card-img-wrapper {
        height: 200px !important;
    }

    .savings-card-img-wrapper img, 
    .acc-card-img-wrapper img, 
    .exp-card-img-wrapper img, 
    .tune-card-img-wrapper img,
    .joy-card-img-wrapper img,
    .diff-card-img-wrapper img {
        max-width: 240px !important;
        max-height: 180px !important;
    }
}
</style>

  <!-- Store Hero Section -->
  <div class="hero-container">
    <!-- 1. Left Text -->
    <div class="hero-left">
        <h1>Store.</h1>
    </div>

    <!-- 2. Center Floral Logo Image -->
    <div class="hero-bg-image">
        <img src="iphone.jpg" alt="Apple Floral Logo">
    </div>

    <!-- 3. Right Text -->
    <div class="hero-right">
        <h3>Spread joy with the<br>products you love.</h3>
        <p><a href="#">Connect with a Specialist &#8599;</a></p>
        <p><a href="#">Find an Apple Store &#8599;</a></p>
    </div>
</div>



<!-- Category Icons Row -->
<div class="product-icons-section">
    <a href="#" class="prod-icon-item">``
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
    
</div>

<!-- "The Latest" Carousel Section -->
<!-- "The Latest" Section Header -->
<div class="latest-section">
    <div class="latest-header">
        <h2 class="latest-title">
            <span class="highlight-latest">The latest.</span> 
            <span class="main-heading-text">Meet the new arrivals this season.</span>
        </h2> 
    </div>

    <div class="carousel-container" id="cardsCarousel">
        <?php
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="apple-card">';
                echo '<div>';
                echo '<div class="card-tag">NEW</div>';
                echo '<h3 class="card-title">' . $row['title'] . '</h3>';
                echo '<p class="card-subtitle">' . $row['subtitle'] . '</p>';
                echo '<div class="card-price">From ₹' . $row['price'] . '</div>';
                echo '</div>';
                echo '<div class="card-image-wrapper">';
                echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
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
        <!-- Card 1: Festive Offer -->
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

        <!-- Card 2: Only at Apple -->
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

        <!-- Card 3: Free Delivery & Pickup -->
        <div class="diff-card">
            <div>
                <div class="diff-card-tag">FREE DELIVERY & PICKUP</div>
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
        
    </div>

    <div class="joy-carousel-container" id="joyCarousel">
        <!-- Card 1: Today at Apple -->
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

        <!-- Card 2: Festive Wallpaper -->
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

        <!-- Card 3: Apple Watch & Festive App -->
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
        <!-- Card 1: Apple Music -->
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

        <!-- Card 2: Special Edition AirPods -->
        <div class="tune-card">
            <div>
                <div class="tune-card-tag">ONLY AT APPLE</div>
                <h3 class="tune-card-title">Special Edition AirPods 5 with Wireless Charging Case.</h3>
            </div>
            <div class="tune-card-img-wrapper">
                <img src="e2.jpeg" alt="Special Edition AirPods">
            </div>
        </div>

        <!-- Card 3: HomePod mini -->
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
       
    </div>

    <div class="acc-carousel-container" id="accCarousel">
        <!-- Card 1: Perfectly paired gifts -->
        <div class="acc-card">
            <div>
                <h3 class="acc-card-title">Perfectly paired gifts.</h3>
                <p class="acc-card-subtitle">Explore accessories in new colours, styles and textures you'll love.</p>
            </div>
            <div class="acc-card-img-wrapper">
                <img src="r1.jpeg" alt="Perfectly paired gifts">
            </div>
        </div>

        <!-- Card 2: iPhone Duo Case - Sand -->
        <div class="acc-card">
            <div>
                <div class="acc-card-tag">NEW</div>
                <h3 class="acc-card-title" style="font-size: 20px;">iPhone Duo Case – Sand</h3>
            </div>
            <div class="acc-card-img-wrapper">
                <img src="r2.jpeg" alt="iPhone Duo Case Sand">
            </div>
        </div>

        <!-- Card 3: iPhone Case Magenta -->
        <div class="acc-card">
            <div>
                <div class="acc-card-tag">NEW</div>
                <h3 class="acc-card-title" style="font-size: 20px;">iPhone Silicone Case with MagSafe – Magenta</h3>
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
        <!-- Card 1: Smarter home -->
        <div class="exp-card">
            <div>
                <h3 class="exp-card-title">Easy setup. Simple controls. Smarter home.</h3>
                <p class="exp-card-subtitle">With Apple Home devices and accessories, it's never been simpler to set up and control a connected home.</p>
            </div>
            <div class="exp-card-img-wrapper">
                <img src="s1.jpeg" alt="Smarter home devices">
            </div>
        </div>

        <!-- Card 2: Apple Intelligence and Siri AI -->
        <div class="exp-card">
            <div>
                <h3 class="exp-card-title">Apple Intelligence and Siri AI. More personal. More powerful.<sup>3</sup></h3>
            </div>
            <div class="exp-card-img-wrapper">
                <img src="s2.jpeg" alt="Apple Intelligence and Siri AI">
            </div>
        </div>

        <!-- Card 3: More Apple Services -->
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
        <!-- Card 1: Education Pricing -->
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




<!-- Quick Links & Footnote Section -->
<div class="footer-section">
    <!-- Quick Links -->
    <h2 class="quick-links-title">Quick Links</h2>
    <div class="quick-links-buttons">
        <a href="#" class="pill-btn">Find a Store</a>
        <a href="#" class="pill-btn">Order Status</a>
        <a href="#" class="pill-btn">Shopping Help</a>
        <a href="#" class="pill-btn">Your Saves</a>
    </div>

    <!-- Footnotes Notes -->
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
        <!-- Top Location Notice -->
        <div class="footer-shop-note">
            We use your location to show you delivery options faster. We found your location using your IP address or because you entered it during a previous visit to Apple.
        </div>

        <div class="footer-shop-note" style="border-bottom: none;">
            More ways to shop: <a href="#">Find an Apple Store</a> or <a href="#">other retailer</a> near you. Or call 000800 040 1966.
        </div>

        <!-- 5-Column Navigation Directory -->
        <div class="footer-directory" style="margin-top: 15px;">
            <!-- Column 1 -->
            <div class="footer-column">
                <h3>Shop and Learn</h3>
                <ul>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">iPad</a></li>
                    <li><a href="#">iPhone</a></li>
                    <li><a href="#">Watch</a></li>
                    <li><a href="#">AirPods</a></li>
                    <li><a href="#">TV & Home</a></li>
                    <li><a href="#">AirTag</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Gift Cards</a></li>
                </ul>
                <h3>Apple Wallet</h3>
                <ul>
                    <li><a href="#">Wallet</a></li>
                </ul>
            </div>

            <!-- Column 2 -->
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

            <!-- Column 3 -->
            <div class="footer-column">
                <h3>Apple Store</h3>
                <ul>
                    <li><a href="#">Find a Store</a></li>
                    <li><a href="#">Genis Bar</a></li>
                    <li><a href="#">Today at Apple</a></li>
                    <li><a href="#">Apple Summer Camp</a></li>
                    <li><a href="#">Ways to Buy</a></li>
                    <li><a href="#">Apple Trade In</a></li>
                    <li><a href="#">Recycling Programme</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Shopping Help</a></li>
                </ul>
            </div>

            <!-- Column 4 -->
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

            <!-- Column 5 -->
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
                    <li><a href="#">Ethics & Compliance</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact Apple</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
    function slideCarousel(direction) {
        const carousel = document.getElementById('cardsCarousel');
        const scrollAmount = 420; // Scroll distance per click
        carousel.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }



    function slideDiffCarousel(direction) {
    const carousel = document.getElementById('diffCarousel');
    const scrollAmount = 500; // Scroll distance per click
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}



function slideJoyCarousel(direction) {
    const carousel = document.getElementById('joyCarousel');
    const scrollAmount = 500;
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}



function slideTuneCarousel(direction) {
    const carousel = document.getElementById('tuneCarousel');
    const scrollAmount = 500;
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}



function slideAccCarousel(direction) {
    const carousel = document.getElementById('accCarousel');
    const scrollAmount = 500;
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}



function slideExpCarousel(direction) {
    const carousel = document.getElementById('expCarousel');
    const scrollAmount = 500;
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}




function slideSavingsCarousel(direction) {
    const carousel = document.getElementById('savingsCarousel');
    const scrollAmount = 500;
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}



<script>
    function forceMobileResponsive() {
        const cards = document.querySelectorAll('.savings-card, .acc-card, .exp-card, .tune-card, .diff-card');
        const containers = document.querySelectorAll('.savings-carousel-container, .acc-carousel-container, .exp-carousel-container, .tune-carousel-container, .diff-carousel-container');

        if (window.innerWidth <= 768) {
            cards.forEach(card => {
                card.setAttribute('style', 'width: 82vw !important; min-width: 82vw !important; flex: 0 0 82vw !important; max-width: 310px !important; height: 410px !important; padding: 22px 18px 0 18px !important; border-radius: 20px !important;');
            });
            containers.forEach(container => {
                container.setAttribute('style', 'display: flex !important; flex-direction: row !important; flex-wrap: nowrap !important; gap: 15px !important; overflow-x: auto !important; width: 100% !important;');
            });
        } else {
            cards.forEach(card => {
                card.removeAttribute('style');
            });
        }
    }

    window.addEventListener('DOMContentLoaded', forceMobileResponsive);
    window.addEventListener('resize', forceMobileResponsive);
</script>
</script>
</script>


</body>
</html>
