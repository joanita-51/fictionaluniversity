<?php
 get_header(); ?>
     <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">
            <?php 
            function is_category(){
                echo 'returns true if you are on the category archive screen';
            }
            function single_cat_title(){
                echo 'used to get the dynamic name of the category that you are currently viewing.';
            }
            function the_author(){
                echo 'this returns the name of the author';
            }
            function is_author(){
                echo 'returns true if you are on the author archive screen';
            }
            if(is_category()){
                single_cat_title();
        }

if (is_author()){
         echo 'Posts by'; the_author();
        } ?></h1>
        <div class="page-banner__intro">
                <p>Keep up with our latest news.</p>
        </div>
      </div>
    </div>

        <div class="container container--narrow page-section">
        <?php
         while(have_posts()){
                the_post(); ?>
        <div class='post-item'>
        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="metabox">
          <p>Posted by
             <?php 
             function the_author_posts_link(){
                echo 'This function generates the dynamic name of the author';
             }
             function get_the_category_list(){
                echo 'This function is responsible for getting the dynamic category name. The parameter typed is what will separate the two category names';
             }
             function the_time(){
                echo 'This function is used to format the date ';
             }
             the_author_posts_link(); ?> on <?php the_time('n.j.y') ?> in 
             <?php echo get_the_category_list('.')?></p>
        </div>

        <div class='generic-content'>
         <?php
         function the_excerpt(){
            echo 'this function shows some of the content';
         }
         function paginate_links(){
            echo 'this function is used for pagination';
         }
             the_excerpt(); 
         ?>
         <p><a class='btn btn--blue' href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
        </div>
        </div>
        <?php }
        echo paginate_links();
         ?>

        </div>

 
<?php get_footer();?>
