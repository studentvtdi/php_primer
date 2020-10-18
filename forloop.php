<?php 
$title="For loops";
include 'includes/header.php'

?>

<!-- 
    a forloop means it does something for a certain set number of times.
    It usually is use to determine exactly how many times something needs to happen. 
    so a forloop would be use to repeat something for that exact number of times as long 
    as the parameters are set right
    Therefore the Forloop is a counter control loop;
 -->
<h1><?php echo $title ?></h1>

<?php 
//For Loops

for($count=0;$count<10;$count++){
    echo'<p>HELLO WORLD</p>';
    }
for($count=0;$count<10;$count++){
    echo"<p>The Count is:$count</p>";
    }

?>

<?php require 'includes/footer.php' ?>
