<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="<?php bloginfo('description'); ?>"> Not included as it is in the SEO plugin instead-->

    <!-- Style Sheets -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Crimson+Pro:ital,wght@0,200;0,300;0,500;1,200;1,300;1,500&family=Kristi&display=swap" rel="stylesheet">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="icon" href="<?= get_template_directory_uri();?>/img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?= get_template_directory_uri();?>/img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri();?>/img/favicon/favicon-32x32.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri();?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri();?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri();?>/img/favicon/favicon-16x16.png">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
    <h1 class="dont-show"><?php the_title();?></h1>
    <header id="index">
        <nav id="frontpg-nav-header">
            <!-- Desktop navbar -->
            <div id="nav-desktop-header" class="hide-onMobile-flex">
            
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu-left' ) ); ?>
                <?php
                if ( function_exists( 'the_custom_logo' ) ) { ?>
                <ul><li id="logo-header">
                    <?php the_custom_logo(); } ?>
                </li></ul>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu-right' ) ); ?>
                </div>
            <!-- Mobile Navbar Small Screen -->
            <div class="hide-onDesktop">
            <?php if ( function_exists( 'the_custom_logo' ) ) { ?>
                <div id="logo-header-mobile">
                    <?php the_custom_logo(); } ?>
                </div>
                <!-- The overlay -->
                <div id="myNav" class="overlay">

                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <!-- Overlay content -->
                    <div class="overlay-content">
                        <?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
                    </div>
                </div>

                <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                <a href="javascript:void(0);" class="icon" onclick="openNav()">
                    <i class="fa fa-bars"></i>
                </a>

            </div>
        </nav>
    </header>