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

<!-- Hero Section -->
    <section id="hero">
        <h2 class="dont-show">Hero Section</h2>
        <div id="hero_pic">
            <figure>
                <img id="heroimg" src="img/hero.jpg"> <!-- 1024x500 -->
            </figure>
        </div>
    </section>  

<!-- Title & Description Section -->
    <section id="title">
        <h1 class="dont-show">Homepage Fångamon Cabin Resort</h1>
        <h2>Come and experience the all the forests and the mountains have to offer<br>
        but in style and comfort</h2>
    </section>

<!-- Description of page/content -->
    <section id="description">
        <h2 class="dont-show">Description of Resort</h2>
        <div>
            <p><span class="big">FÅNGAMON LUXURY CABIN RESORT</span><br> is a slice of luxury in the robustness of the mountains. We have 10 cabins in different sizes to meet your needs, a main house where we offer breakfast and dinners. We also prepare take-away lunches on order. During your stay you are invited to join us for morning or evening yoga (or why not both), to start and end your day off right. During the day you can explore the area and activities provided by yourselves or book one of our guiding packages and we can lead the way.</p>
            <picture>
                <img src="img/logo.png" alt="logo">
            </picture>
        </div>
    </section>

<!-- about the resort -->
    <section id="resort-sections">
        <h2 class="dont-show">What the resort has to offer</h2>
        <article class="card">
            <picture>
                <img src="img/small-cabin.jpg" alt="small cabins">
            </picture>
            <div class="content">
                <h3>The Cottages</h3>
                <p>Each chalet is decked out with 5 star level quality you come to expect from a luxury hotel with the cosy atmosphere of fireplaces, hot chocolate and the forest views outside the windows.  </p>
                <a class="read-more" href="#">Read More</a>
            </div>
        </article>
        <article class="card">
            <picture>
                <img src="img/restaurant.jpg" alt="the restaurant">
            </picture>
            <div class="content">
                <h3>The Restaurant</h3>
                <p>Included in the stay is of course a breakfast buffet. Not interested in cooking? Book a 3-course dinner service instead! Pre-ordered lunch boxes can be arranged if you need something to take with you on your outing. Our meals are prepared with locally produced food from Jämtland.</p>
                <a class="read-more" href="#">Read More</a>
            </div>
        </article>
        <article class="card">
            <picture>
                <img src="img/yoga1.jpg" alt="a picture of a 3 persons doing yoga">
            </picture>
            <div class="content">
                <h3>Activities</h3>
                <p>Morning and Evening yoga classes with our certified instructor, Kikki are included in your stay. We offer various guided tours and of course you can explore the area yourself, the options are limitless. Just ask us for ideas!</p>
                <a class="read-more" href="#">Read More</a>
            </div>
        </article>
    </section>

<!-- Location section -->
    <section id="map">
        <article class="content">
            <h2>Where are we located?</h2>
            <p class="two-columns">
                We are located in beautiful Åre Southern Mountain range (Södra Årefjällen), which lies just southwest of Undersåker and due south of Åre. Nearby we have the ski resorts of Trillevallen, Edsåsdalen and of course Åre, just 30 km away. To the south of us we have Vålådalens elite cross country skiing training center which is open to the public. <br>
                <span class="gps">   GPS 63°10'60.0"N, 13°07'06.4"E     or   63.2200726, 13.5735197,9.37</span>
            </p>
            <img src="img/map.jpg" alt="map of location">
        </article>
    </section>

<!-- Picture Gallery section -->
    <section id="picture-gallery">
        <h2 class="dont-show">Picture Gallery</h2>
        <picture>
            <img src="img/details10.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details2.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details3.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details4.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details5.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details6.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details7.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details8.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details9.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="img/details1.jpg" alt="resort details">
        </picture>
    </section>


<!-- Hosts section -->
    <section id="your-hosts">
        <h2 class="dont-show">Your hosts: </h2>
        <div>
            <p><span class="big">FÅNGAMON LUXURY CABIN RESORT</span> is a luxury resort located in the forests of Jämtland. Our aim is to provide a luxury get-away with maximal exposure to our beautiful nature.<br><br><span class="script">Welcome to our world!</span><br>
            We are your hosts, Natasha and Erik.</p>

            <img class="pic2" src="img/owners.jpg" alt="a closeup of the owners">
        </div>
        <img class="pic1" src="img/hosts.jpg" alt="a photo of the hosts">
    </section>


    <footer>
        <!-- Menu again -->
        <section id="menu-again">
            <hr>
            <h3>Select one of the following to read more</h3>
            <?php include("incl/navbar-front-2.php"); ?>
        </section>
        <!-- Footer Columns -->
        <section id="footer">
            <div id="col-1">
                <h3>Contact Us!</h3>
                    <form action="">
                        <label class="dont-show" for="name"></label>
                        <input type="text" id="name" placeholder="NAME">
                        <label class="dont-show" for="email"></label>
                        <input type="email" id="email" placeholder="EMAIL">
                        <label class="dont-show" for="message"></label>
                        <textarea id="message" placeholder="MESSAGE" class="textarea"></textarea>
                        <input class="submit" type="submit" value="SUBMIT">
                    </form>
            </div>
            <div id="col-2">
                <div id="logo-footer">
                    <picture>
                        <img src="img/logo.png" alt="Fångamon Cabin Resort">
                    </picture>
                </div>
            </div>
            <div id="col-3">
                <div id="company-info">
                    <p><span class="big">FÅNGAMON LUXURY CABIN RESORT</span></p>
                    <hr>
                    <ul>
                        <li>Natasha & Erik Gustavsson</li>
                        <li>Fångamon 510</li>
                        <li>123 45 Undersåker</li>
                        <li>070 12 34 56</li>
                        <li>hello@fangamoncabins.se</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- copyright -->
        <section id="copyright">
            <p>&copy; Fångamon Luxury Cabin Resorts 2022</p>
        </section>
    </footer>
    
    <!-- Hamburger Menu & Picture Gallery -->
    <script src="js/main.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f9711d7422.js" crossorigin="anonymous"></script>
    
</body>
</html>