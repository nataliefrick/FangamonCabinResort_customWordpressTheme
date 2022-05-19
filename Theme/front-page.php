<?php
/**
* Template Name: Front Page
*
* @package WordPress
* @subpackage Fångamon Cabin Resort
* @since Fångamon 1.0
*/

if(is_page_template( string|string[] $template = 'front-page' )) {
 get_header('front');
}
else {
    get_header('under');
}
 wp_head();
?>

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
            <?php if(have_posts()) : while(have_posts()) : the_post(); 
                the_content();
                if ( has_post_thumbnail() ) { ?>
                    <picture><?php the_post_thumbnail( 'about' ); ?></picture> 
                <?php }  
                endwhile;
            endif ?>
        </div>
    </section>

<!-- about the resort -->
    <section id="resort-sections">
        <h2 class="dont-show">What the resort has to offer</h2>
        <?php if(is_active_sidebar('front_pg_column1')) : ?>
            <?php dynamic_sidebar('front_pg_column1'); ?>
        <?php endif ?>
        <?php if(is_active_sidebar('front_pg_column2')) : ?>
            <?php dynamic_sidebar('front_pg_column2'); ?>
        <?php endif ?>
        <?php if(is_active_sidebar('front_pg_column3')) : ?>
            <?php dynamic_sidebar('front_pg_column3'); ?>
        <?php endif ?>
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
    <?php if(is_active_sidebar('front_pg_gallery')) : ?>
        <?php dynamic_sidebar('front_pg_gallery'); ?>
    <?php endif ?>
    
 
        <!-- <picture>
            <img src="/img/details1.jpg" alt="resort details">
        </picture> -->

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
