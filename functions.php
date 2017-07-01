<?php

  $defaults = array(
    'default-image' => get_template_directory_uri() . '/default-bg.png'
  );
  add_theme_support('custom-background', $defaults);

  function wprj_inject_styles() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', "https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab|Oswald" );
    // Main CSS
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css' );
  }

  add_action('wp_enqueue_scripts', 'wprj_inject_styles');

?>
