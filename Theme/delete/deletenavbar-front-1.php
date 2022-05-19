<nav id="frontpg-nav-header">
    <!-- Desktop navbar -->
    
        <ul id="nav-desktop-header" class="hide-onMobile-flex">

            <?php wp_nav_menu( array( 'theme_location' => 'left', 'menu_class' => 'nav-menu' ) ); ?>

            <?php if ( function_exists( 'the_custom_logo' ) ) { ?>
                <li id="logo-header">
                    <picture>
                    <?php the_custom_logo(); } ?>
                    </picture>
                </li>
            <?php wp_nav_menu( array( 'theme_location' => 'right', 'menu_class' => 'nav-menu' ) ); ?>
            
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