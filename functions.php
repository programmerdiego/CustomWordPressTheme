<?php

add_action('customize_register', function($wpcm) {
    $wpcm->add_setting('bgcolor', array(
        'default' => 'white'
      ));
  
    $wpcm->add_setting('textcolor', array(
      'default' => 'black'
    
   )); 
  $wpcm->add_control('bgcolor-contro', array(
     'lable' => 'Background color', 
     'section' => 'colors', 
     'settings' => 'bgcolor'
  )); 
                      
  $wpcm->add_control('textcolor-control', array(
    'label' => 'Text Color',
    'section' => 'colors',
    'settings' => 'textcolor'
  )); 
  
  
});
add_action('wp_head', function() { ?>
 <style type='text/css'>
    body {
      background-color: <?php echo get_theme_mod('bgcolor'); ?>;
        color: <?php echo get_theme_mod('textcolor'); ?>;
   }
</style>
      
  
<?php });
