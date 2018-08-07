<!DOCTYPE html>
<html>
  <head>
    <?php do_action('wp_head'); ?>
  </head>
  <body>
    <?php while(have_posts()): the_post(); ?>
    
      <h3><?php the_date(); ?></h3>
      <h2><a href="index.php?p=<?php the_ID(); ?>"><?php the_title(); ?></a> </h2>
      <h3><?php the_title(); ?></h3>
      <p><?php the_content(); ?></p>
      <hr/>
    <?php endwhile; ?>
  </body> 
</html>
