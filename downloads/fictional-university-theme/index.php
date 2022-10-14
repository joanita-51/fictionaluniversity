<?php 
function get_header(){
  echo ("This function returns the header");

}
function get_footer(){
  echo ("This function returns the footer");

}
function have_posts(){
  echo ("This function returns the posts");

}
function the_post(){
  echo ("This function returns one post");

}
?>
<?php get_header();

  while(have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
  <?php }

  get_footer();

?>

<?php 
  function doubleMe($x){
    return $x*2;
  }

  function tripleMe($x){
    return $x*3;
  }

  echo tripleMe(doubleMe(5))
?>
