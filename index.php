<!--PHP Functions  -->
<?php 
 function greet($name, $color){
   echo "<p>Hello, my name is $name and my favourite color is $color </p>";
 }

 greet('John','blue');
 greet('Jane','green');

?>
<!-- some of the Wordpress prebuilt functions
   ?php bloginfo(); ?>
    ?php bloginfo('description'); ?>
-->

<!-- Php arrays -->
<?php 
    $names = array('Brad', 'John' , 'Jane', 'Meowsalot');
    
?>
<p>Hi, my name is <?php echo $names[2]?></p>

<!-- using loops -->
<?php
    $names = array('Brad', 'John' , 'Jane', 'Meowsalot');
    $count =0;

    while($count < count($names)){
        echo "<li> Hi, my name is $names[$count]</li>";
        $count++;
    }
?>

<!-- Looping through a posts. -->
<?php 
  function the_permalink(){
    echo("this function is prebuilt in wordpress it is making the title a link to the post");
  }
 while(have_posts()) {
  the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
  <hr>
 <?php }    
?>

<!-- How we want to specifically display a single post, we create single.php file. In this case we don't want to display the title as a link -->
<?php 
  
 while(have_posts()) {
  the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
 
 <?php }    
?>


<!-- Looping through pages. You create a file named page.php and write the following code -->
                              
<?php 
  function have_posts(){
    echo("this function is prebuilt in wordpress");
  }
  function the_title(){
    echo("Also a prebuilt function in wordpress");
  }
  function the_post(){
    echo("Also a prebuilt function in wordpress");
  }
  function the_content(){
    echo("Also a prebuilt function in wordpress");
  }
 while(have_posts()) {
  the_post(); ?>
  <h1>This is a page not a post </h1> 
 <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <hr>
 <?php }    
?>



