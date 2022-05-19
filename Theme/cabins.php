<?php
/**
* Template Name: Cabin Page
*
* @package WordPress
* @subpackage Fångamon Cabin Resort
* @since Fångamon 1.0
*/

if(is_page_template( 'front-page' )) {
 get_header('front');
}
else {
    get_header('under');
}
 wp_head();
?>
<h1 class="title-subpage"><?php the_title();?></h1>

<!-- Description of page/content -->
<section id="description">
    <h2 class="dont-show">The cabins</h2>
        <div>
            <?php if(have_posts()) : while(have_posts()) : the_post(); 
                the_content();
                if ( has_post_thumbnail() ) { ?>
                    <picture><?php the_post_thumbnail( 'medium-size' ); ?></picture> 
                <?php }  
                endwhile;
            endif ?>
        </div>
    </section>

<!-- The cabins -->
<section id="cabins">
    <h2 class="dont-show">A description of the cabins</h2>
        <div class="row">
            <?php if(is_active_sidebar('cabin_widget_row1col1_section')) : ?>
                <?php dynamic_sidebar('cabin_widget_row1col1_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('cabin_widget_row1col2_section')) : ?>
                <?php dynamic_sidebar('cabin_widget_row1col2_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('cabin_widget_row1col3_section')) : ?>
                <?php dynamic_sidebar('cabin_widget_row1col3_section'); ?>
            <?php endif ?>  

        </div>
        <div class="row">
            <?php if(is_active_sidebar('cabin_widget_row2col1_section')) : ?>
                <?php dynamic_sidebar('cabin_widget_row2col1_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('cabin_widget_row2col2_section')) : ?>
                <?php dynamic_sidebar('cabin_widget_row2col2_section'); ?>
            <?php endif ?>
            <?php if(is_active_sidebar('cabin_widget_row2col3_section')) : ?>
                <?php dynamic_sidebar('cabin_widget_row2col3_section'); ?>
            <?php endif ?>            
        </div>
   </section>

<!-- Mobile Picture Gallery section -->
<section id="mobile-picture-gallery">
    <h2 class="dont-show">Picture Gallery</h2>
    <?php if(is_active_sidebar('cabin_widget_mobilegallery_section')) : ?>
        <?php dynamic_sidebar('cabin_widget_mobilegallery_section'); ?>
    <?php endif ?>
</section>

<?php get_footer() ?>