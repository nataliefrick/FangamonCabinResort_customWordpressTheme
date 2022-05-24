<?php
/**
* Template Name: Blog Listing Page
*
* @package WordPress
* @subpackage Fångamon Cabin Resort
* @since Fångamon 1.0
*/

get_header('under');
wp_head();

?>
<h1 class="title-subpage"><?php the_title();?></h1>
<div class="seperator-line"></div>
<!-- Title & Description Section -->
<section class="title-subpage">
    <p>Read up on all the happenings!</p>
</section>
<!-- Blogroll -->
<section id="blog">
    <h2 class="dont-show">These are the activites we offer</h2>
    <?php wp_reset_postdata();
    query_posts('category_name=news&posts_per_page=6');
    if(have_posts()) {
        while(have_posts()){
            the_post();?>
            <div  id="<?php the_ID(); ?>" class="card blog">
                <picture> 
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'regular' ); } ?> 
                </picture>
                <div class="content">
                    <h3><?php the_title(); ?></h3>
                    <p class="publish-date"><?php the_date(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?= the_permalink(); ?>"><button class="read-more">Read More</button></a>
                </div>
            </div>

    <?php     
        }
      }
      ?>
   
</section>


<?php get_footer() ?>