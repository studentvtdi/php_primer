<?php 
$title="Array and Printouts";
include 'includes/header.php'

?>

<h1><?php echo $title ?></h1>

<?php

// a variable
$num=3;

// an array with only one data type
$numbers=array(1,2,3,4,5,6,7,8,9,10,102,2,65,78,4,65,65,68,65,65,657);
//You can access the value in  a subscript of the array using the index
echo $numbers[5];

//selecting an array  sequence number to be outputed
echo"<p>$numbers[9]</p>";

//function variable  keyword 'count' is used to count all the numbers in the array
$size=count($numbers);
echo"<p>Total numbers in the Array are: $size</p>";

//using a forloop to print out all of the numbers in the array
for($count=0;$count<$size;$count++){
    echo"<p>$numbers[$count]</p>";   //p tags helps to make break in the output sequence of the numbers
    }

?>

<?php require 'includes/footer.php' ?>
