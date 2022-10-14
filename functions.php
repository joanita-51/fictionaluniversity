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
function get_theme_file_uri(){
  echo ("This wordpress function will generate the path to our theme folder all on its own");
}
function wp_enqueue_script(){
  echo ("Loading the js file to show the slideshow behaviour");
}
function add_theme_support(){
  echo 'This function will enable a feature for the theme in this case it enables the title tag theme';
}
function register_nav_menu(){
  echo 'This function registers menu locations in our theme';
}
// This is a custom function
function files() {
  wp_enqueue_script( 'university_main_js', get_theme_file_uri('/build/index.js'), array('jquery'),'1.0',true );
  wp_enqueue_style( 'university_main_styles', get_theme_file_uri('/build/style-index.css') );
  wp_enqueue_style( 'university_extra_styles', get_theme_file_uri('/build/index.css') );
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'google-custom-fonts', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700>"
 );
} 
function university_features(){
  add_theme_support ('title-tag');
  register_nav_menu('headerMenuLocation','Header Menu Location');
  register_nav_menu('footerLocationOne', 'Footer Location One');
  register_nav_menu('footerLocationTwo','Footer Location Two');
}
  add_action( 'wp_enqueue_scripts', 'files' );
  add_action('after_setup_theme','university_features');


?>
