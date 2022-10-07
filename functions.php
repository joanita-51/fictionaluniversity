<?php
function wp_enqueue_style(){
    echo("This function is used to load css files");
}
function get_stylesheet_uri(){
    echo("This function helps to relocate the uri for our style.css the default sytle sheet in wordpress");
}
function add_action(){
    echo("This function gives wordpress instruction on what to do");
}
// This is a custom function
function files() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
} 
  add_action( 'wp_enqueue_scripts', 'files' );

?>
