<?php
/**
* Template Name: Front Page
*
* @package WordPress
* @subpackage Fångamon Cabin Resort
* @since Fångamon 1.0
*/


 get_header('front');
 wp_head();
?>

<!-- Hero Section -->
    <section id="hero">
        <h2 class="dont-show">What the resort looks like</h2>
        <div id="hero_pic">
            <figure>
                <img id="heroimg" alt="<?php alt_text_display(); ?>" src="<?= header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>"> <!-- 1024x500 -->
            </figure>
        </div>
    </section>  

<!-- Title & Description Section -->
    <section id="title">
        <h1 class="dont-show">Luxury accommodations in Åre at Fångamon Cabin Resort</h1>
        <h2>Come and experience all that the forests and the mountains of Åre have to offer<br>
        with luxury accommodations in style and comfort</h2>
    </section>

<!-- Description of page/content -->
    <section id="description">
        <h2 class="dont-show">Resort accommodations</h2>
        <div>
            <?php if(have_posts()) : while(have_posts()) : the_post(); 
                the_content();
                if ( has_post_thumbnail() ) { ?>
                    <picture><?php the_post_thumbnail( 'medium' ); ?></picture> 
                <?php }  
                endwhile;
            endif ?>
        </div>
    </section>

<!-- about the resort -->
    <section id="resort-sections">
        <h2 class="dont-show">Activities and luxury accommodations at the resort in Åre</h2>
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

    <?php if(is_active_sidebar('map_section')) : ?>
        <?php dynamic_sidebar('map_section'); ?>
    <?php endif ?>


<!-- Picture Gallery section --> 
    <?php if(is_active_sidebar('front_pg_gallery')) : ?>
        <?php dynamic_sidebar('front_pg_gallery'); ?>
    <?php endif ?>
    
<!-- Hosts section -->
    <?php if(is_active_sidebar('host_section')) : ?>
        <?php dynamic_sidebar('host_section'); ?>
    <?php endif ?>

<?php get_footer() ?>
