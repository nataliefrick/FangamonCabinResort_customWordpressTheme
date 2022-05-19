<?php
/**
* Template Name: Single Post Page
*
* @package WordPress
* @subpackage Fångamon Cabin Resort
* @since Fångamon 1.0
*/


get_header('under');
wp_head();

?>
<main>
<h1 class="title-subpage"><?php the_title();?></h1>
<div class="seperator-line"></div>

<!-- Blogpost -->
<section id="blogpost">
    <h2 class="dont-show"><?php the_title(); ?></h2>
    <?php if(have_posts()) {
        while(have_posts()){
            the_post(); ?>
            <article class="blogpost">
                <picture> <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?> 
                </picture>
                <div class="content">
                    <h3><?php the_title(); ?></h3>
                    <p class="publish-date"><?php echo get_the_date(); ?></p>
                    <p><?php the_content(); ?></p>
                </div>
            </article>
        <?php  }  ?>

    <?php  }  ?>
   
  
</section>
</main>

<?php get_footer() ?>