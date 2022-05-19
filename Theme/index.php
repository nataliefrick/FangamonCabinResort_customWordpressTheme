<?php
get_header(); ?>

<main>
<div>
   <h2><?php the_title(); ?></h2>
   <div class="text-center"><?php the_content(); ?></div>
   <?php 
   if ( has_post_thumbnail() ) { ?>
      <picture><?php the_post_thumbnail(); ?></picture> 
   <?php } ?>
</div>

</main> 
<?php  get_footer(); 
?> 