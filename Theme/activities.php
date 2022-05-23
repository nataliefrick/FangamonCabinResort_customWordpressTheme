<?php
/**
* Template Name: Activities Page
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
    <h2 class="dont-show">Activities Page Fångamon Cabin Resort</h2>
    <div>
        <?php if(have_posts()) : while(have_posts()) : the_post(); 
            the_content();
            if ( has_post_thumbnail() ) { ?>
                <picture><?php the_post_thumbnail( 'activities' ); ?></picture> 
            <?php }  
            endwhile;
        endif ?>
    </div>
</section>

<!-- Title & Description Section -->
<section class="title-subpage">
    <h3>Activities we offer</h3>
</section>

<!-- Activities -->
<section id="activities">
    <h2 class="dont-show">These are the activites we offer</h2>
    

        <?php wp_reset_postdata();
        query_posts('category_name=activity');
        if(have_posts()) {
            while(have_posts()){
                the_post();?>
                <article  id="<?php the_ID(); ?>" class="card activity">
                    <picture> 
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'regular' ); } ?> 
                    </picture>
                    <div class="content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?= the_permalink(); ?>"><button class="read-more">Read More</button></a>
                    </div>
                </article>
        <?php     
        }
      }
      ?>
   
</section>


<?php get_footer() ?>