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
