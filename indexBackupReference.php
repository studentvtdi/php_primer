<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer-Index</title>
</head>
<body>
       <h1>Hello World<h1>

       <h2>Follow each link to the page example</h2>
<ul>
<li><a href="array.php">Simple Array and Printouts</a></li>
<li><a href="forloop.php">Simple For Loop</a></li>
<li><a href="whiledowhileloop.php">Simple While/Do Whhile Loop</a></li>
<li><a href="Ifstatement.php">Simple If Statement</a></li>
<li><a href="switchstatement.php">Simple switch Statement</a></li>
<li><a href="stringmanip.php">Simple String Manipulation</a></li>
<li><a href="datetimemanip.php">Date and Time Manipulation</a></li>
<li><a href="functions.php">Simple Functions</a></li>

</ul>






<!-- Basic Html -->


       <?php  
       
       echo 'Hello PHP';
       echo '<br/>'; 
       echo 'second line'; 
       echo '<br/>';
       ?>


<?php 
    $name='Wayne Thomas'; //we add quotations because this is a string
    $age=21;// no quotation needed because variable is integer.
    echo $name;

    echo '<h1>My name is:'.$name.'<h1>';
    echo '<h1>My age is:'.$age.'<h1>';
    echo "<h1>My name is:$name <h1>";
?>



</body>
</html>