<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('title'); ?></title>
  </head>
  <body>
    <h1><?php bloginfo('title'); ?></h1>
    <h3><?php bloginfo('description'); ?></h3>
    
    <?php while(have_posts()) {
      the_post();
    ?>
      <h5><?php the_date(); ?></h5>
      <h2>
        <a href="index.php?p=<?php the_ID(); ?>">
            <?php the_title(); ?>
        </a>
       </h2>
      <p><?php the_content(); ?></p>
      <hr/>
    <?php } ?>
  </body>
</html>
