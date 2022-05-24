<?php
/**
* Template Name: Restaurant Page
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
    <h2 class="dont-show">Breakfast, lunch and dinner</h2>
        <div>
            <?php if(have_posts()) : while(have_posts()) : the_post(); 
                the_content();
                if ( has_post_thumbnail() ) { ?>
                    <picture><?php the_post_thumbnail( 'square' ); ?></picture> 
                <?php }  
                endwhile;
            endif ?>
        </div>
    </section>
    <!-- <img src="img/food1.jpg" alt="dinnerplate"> -->

<!-- Title & Description Section -->
<section class="title-subpage">
    <h3>Serving Breakfast, Lunch and Dinner</h3>
</section>

<!-- Restaurant -->
<section id="restaurant">
    <h2 class="dont-show">The Restaurant serving Breakfast, Lunch and Dinner</h2>
        <div class="row">
            <?php if(is_active_sidebar('restaurant_widget_breakfast1_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_breakfast1_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('restaurant_widget_breakfast2_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_breakfast2_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('restaurant_widget_breakfast3_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_breakfast3_section'); ?>
            <?php endif ?>

        </div>
        <div class="row">
            <?php if(is_active_sidebar('restaurant_widget_lunch1_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_lunch1_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('restaurant_widget_lunch2_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_lunch2_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('restaurant_widget_lunch3_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_lunch3_section'); ?>
            <?php endif ?>            
           
        </div>
        <div class="row">
            <?php if(is_active_sidebar('restaurant_widget_dinner1_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_dinner1_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('restaurant_widget_dinner2_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_dinner2_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('restaurant_widget_dinner3_section')) : ?>
                <?php dynamic_sidebar('restaurant_widget_dinner3_section'); ?>
            <?php endif ?>
        </div>      
   
</section>

<!-- Mobile Picture Gallery section -->
    <?php if(is_active_sidebar('restaurant_widget_mobilegallery_section')) : ?>
        <?php dynamic_sidebar('restaurant_widget_mobilegallery_section'); ?>
    <?php endif ?>


<?php get_footer() ?>