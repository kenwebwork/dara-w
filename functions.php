<?php
add_action('init', function(){
  add_theme_support('title-page');
  add_theme_support('post-thumbnails');
});

add_shortcode( 'bo', function( $atts, $content ){
  return '<strong>' . $content . '</strong>';
} );

add_shortcode( 'bl', function( $atts, $content ){
  return '<span class="blue-highlight">' . $content . '</span>';
} );
add_shortcode( 'ye', function( $atts, $content ){
  return '<span class="yellow-highlight">' . $content . '</span>';
} );
add_shortcode( 're', function( $atts, $content ){
  return '<span class="red-highlight">' . $content . '</span>';
} );
add_shortcode( 'ge', function( $atts, $content ){
  return '<span class="green-highlight">' . $content . '</span>';
} );
add_shortcode( 'wb', function( $atts, $content ){
  return '<div class="word-box">' . $content . '</div>';
} );