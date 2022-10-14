!DOCTYPE html>
<html>
  <head>
    <meta charset="
      <?php 
        function bloginfo(){
          echo'This function tells the web browser what type of characters or letters and numbers you are going to be using on the page';
        }
        bloginfo('charset')
      ?>"
    >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
        function wp_head(){
            echo("This function helps us to load css instead of using the link in the head section");
        }
    wp_head(); ?>
  </head>
  <body>
  <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="
          <?php 
           function site_url(){
            echo 'This function automatically gives the root url of your current wordpress site and anything we include as an argument gets added to it if its directing to home, no need for the arguments';
           }
            echo site_url() 
          ?>">
            <strong>Fictional</strong> University
          </a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <?php
            function wp_nav_menu(){
              echo 'this function creates for us a nav menu';
            }
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
              ))
            ?>
            <ul>
              <li><a href="<?php echo site_url('/index.php/about-us/')?>"About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>


