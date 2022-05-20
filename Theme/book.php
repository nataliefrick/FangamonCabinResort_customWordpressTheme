<?php
/**
* Template Name: Booking Page
*
* @package WordPress
* @subpackage Fångamon Cabin Resort
* @since Fångamon 1.0
*/

get_header('under');
wp_head();
?>
<h1 class="title-subpage"><?php the_title();?></h1>
<!-- Description of page/content -->
<section id="description">
    <h2 class="dont-show">Booking & Availability</h2>
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

<!-- Availability Form -->

    <?php if(is_active_sidebar('booking_form_widget_section')) : ?>
        <?php dynamic_sidebar('booking_form_widget_section'); ?>
    <?php endif ?>
    
<?php get_footer() ?>