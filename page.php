<?php 
get_header();
while (have_posts()){
  the_post(); ?>  
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
        <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>
    <div class="container container--narrow page-section">
        <?php
        function wp_get_post_parent_id(){
            echo 'this function finds out info about the parent id';
        }
        function get_the_ID(){
            echo 'this function gets the id of the current page';
        }
        function get_permalink(){
            echo 'this function gets the link of the current page';
        }
        function get_the_title(){
            echo 'this function gets the title of the page';
        }

        $theParent = wp_get_post_parent_id(get_the_ID());
        if($theParent){?>
             <div class="metabox metabox--position-up metabox--with-home-link">

        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a>
         <span class="metabox__main"><?php the_title(); ?></span>
        </p>

    </div>


<?php } ?>
<div class="generic-content">
        <?php the_content(); ?>
        </div>
    </div>
 <?php }

get_footer();

?>