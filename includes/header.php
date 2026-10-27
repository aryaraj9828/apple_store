<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store (India) - Clone</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        /* Apple Global Nav Bar */
        nav {
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(20px);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 48px;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .nav-list {
            list-style: none;
            display: flex;
            gap: 40px;
            align-items: center;
        }
        .nav-list a {
            color: #f5f5f7;
            text-decoration: none;
            font-size: 12px;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        .nav-list a:hover {
            opacity: 1;
        }

        .nav-list img {
            filter: invert(100%);
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
        .nav-list img:hover {
            opacity: 1;
        }




        .nav-list img {
         filter: invert(100%);
         opacity: 0.8;
         width: 14px;
         height: auto;
         transition: opacity 0.3s ease;
     }
    </style>
</head>
<body>

    <nav>
        <ul class="nav-list">
            <li><a href="#"><img src="https://www.apple.com/ac/globalnav/7/en_US/images/ac-globalnav/apple/image_large.svg" width="14" alt="Apple"></a></li>
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
            <li><a href="#"><img src="https://www.apple.com/ac/globalnav/7/en_US/images/ac-globalnav/search/search_large.svg" width="14" alt="Search"></a></li>
            <li><a href="#"><img src="https://www.apple.com/ac/globalnav/7/en_US/images/ac-globalnav/bag/bag_large.svg" width="12" alt="Bag"></a></li>
        </ul>
    </nav>