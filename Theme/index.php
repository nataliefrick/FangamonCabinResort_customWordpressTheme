<?php get_header() ?>

<!-- Hero Section -->
    <section id="hero">
        <h2 class="dont-show">Hero Section</h2>
        <div id="hero_pic">
            <figure>
                <img id="heroimg" src="<?= header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>"> <!-- 1024x500 -->
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
                <img src="<?= get_template_directory_uri();?>/img/logo.png" alt="logo">
            </picture>
        </div>
    </section>

<!-- about the resort -->
    <section id="resort-sections">
        <h2 class="dont-show">What the resort has to offer</h2>
        <article class="card">
            <picture>
                <img src="<?= get_template_directory_uri();?>/img/small-cabin.jpg" alt="small cabins">
            </picture>
            <div class="content">
                <h3>The Cottages</h3>
                <p>Each chalet is decked out with 5 star level quality you come to expect from a luxury hotel with the cosy atmosphere of fireplaces, hot chocolate and the forest views outside the windows.  </p>
                <a class="read-more" href="#">Read More</a>
            </div>
        </article>
        <article class="card">
            <picture>
                <img src="<?= get_template_directory_uri();?>/img/restaurant.jpg" alt="the restaurant">
            </picture>
            <div class="content">
                <h3>The Restaurant</h3>
                <p>Included in the stay is of course a breakfast buffet. Not interested in cooking? Book a 3-course dinner service instead! Pre-ordered lunch boxes can be arranged if you need something to take with you on your outing. Our meals are prepared with locally produced food from Jämtland.</p>
                <a class="read-more" href="#">Read More</a>
            </div>
        </article>
        <article class="card">
            <picture>
                <img src="<?= get_template_directory_uri();?>/img/yoga1.jpg" alt="a picture of a 3 persons doing yoga">
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
            <img src="<?= get_template_directory_uri();?>/img/map.jpg" alt="map of location">
        </article>
    </section>

<!-- Picture Gallery section -->
    <section id="picture-gallery">
        <h2 class="dont-show">Picture Gallery</h2>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details10.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details2.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details3.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details4.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details5.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details6.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details7.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details8.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details9.jpg" alt="resort details">
        </picture>
        <picture>
            <img src="<?= get_template_directory_uri();?>/img/details1.jpg" alt="resort details">
        </picture>
    </section>


<!-- Hosts section -->
    <section id="your-hosts">
        <h2 class="dont-show">Your hosts: </h2>
        <div>
            <p><span class="big">FÅNGAMON LUXURY CABIN RESORT</span> is a luxury resort located in the forests of Jämtland. Our aim is to provide a luxury get-away with maximal exposure to our beautiful nature.<br><br><span class="script">Welcome to our world!</span><br>
            We are your hosts, Natasha and Erik.</p>

            <img class="pic2" src="<?= get_template_directory_uri();?>/img/owners.jpg" alt="a closeup of the owners">
        </div>
        <img class="pic1" src="<?= get_template_directory_uri();?>/img/hosts.jpg" alt="a photo of the hosts">
    </section>

    <?php get_footer() ?>
