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
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'google-custom-fonts', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700>"
 );
} 
  add_action( 'wp_enqueue_scripts', 'files' );


?>
