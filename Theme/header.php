<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- Style Sheets -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Crimson+Pro:ital,wght@0,200;0,300;0,500;1,200;1,300;1,500&family=Kristi&display=swap" rel="stylesheet">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
    <h1 class="dont-show"><?php the_title();?></h1>
    <header id="index">
        <nav id="frontpg-nav-header">
            <!-- Desktop navbar -->
            <ul id="nav-desktop-header" class="hide-onMobile-flex">
                <li><a href="/cms project/index.php">Home</a></li>
                <li><a href="/cms project/cottages.php">Cottages</a></li>
                <li><a href="/cms project/restaurant.php">Restaurant</a></li>
                <li id="logo-header">
                <picture>
                    <img src="img/logo.png" alt="Fångamon Cabin Resort">
                </picture>
                </li>
                <li><a href="/cms project/activities.php">Activities</a></li>
                <li><a href="/cms project/blog.php">News</a></li>
                <li><a href="/cms project/book.php">Book</a></li>
            </ul>
            <!-- Mobile Navbar Small Screen -->
            <div class="hide-onDesktop">
                <div id="logo-header-mobile">
                    <picture>
                        <img src="img/logo.png" alt="Fångamon Cabin Resort">
                    </picture>
                </div>
                <!-- The overlay -->
                <div id="myNav" class="overlay">

                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <!-- Overlay content -->
                    <div class="overlay-content">
                    <a href="/cms project/cottages.php">Cottages</a>
                    <a href="/cms project/restaurant.php">Restaurant</a>
                    <a href="/cms project/activities.php">Activities</a>
                    <a href="/cms project/blog.php">Whats New</a>
                    <a href="/cms project/book.php">Book</a>
                    </div>
                </div>

                <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                <a href="javascript:void(0);" class="icon" onclick="openNav()">
                    <i class="fa fa-bars"></i>
                </a>

            </div>
        </nav>
    </header>