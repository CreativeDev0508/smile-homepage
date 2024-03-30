<?php
// Add CSS
function add_css()
{
  // style.css
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
  // custom.css
   wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', false,'1.1','all');
   wp_enqueue_style( 'custom');
}
add_action('wp_enqueue_scripts', 'add_css');


// Add JS
function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
}
add_action('wp_enqueue_scripts', 'add_script');

