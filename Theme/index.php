<?php
/**
* Template Name: Page
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
<!-- Description of page/content -->
<section id="description">
    <h2 class="dont-show"><?php the_title();?></h2>
    <div>
        <?php if(have_posts()) : 
        while(have_posts()) : the_post(); 
            the_content();
            if ( has_post_thumbnail() ) { ?>
                <picture><?php the_post_thumbnail( 'medium' ); ?></picture> 
            <?php }  
            endwhile;
        endif ?>
    </div>
</section>

</main> 


<?php  get_footer(); 
?> 