




<?php 
$title="Index";
include 'includes/header.php'

?>
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
 <button type="button" class="btn btn-dark">CLICK ME!</button>
 <a href="https://www.heroku.com" target="blank" class="btn btn-danger">Heroku.com</a>
<?php require 'includes/footer.php' ?>