<?php
function wpdocs_theme_name_scripts() {
  wp_enqueue_style( 'ez-swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), 'v1.0' );
  wp_enqueue_script( 'ez-swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), 'v1.0.0', true );

  // script.js
  wp_enqueue_script( 'ez-script', get_stylesheet_directory_uri(). '/script.js' , array(), 'v1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );