<?php 
$title="Date and Time Manipulation";
include 'includes/header.php'

?>

<h1><?php echo $title ?></h1>

<?php 

/*
Creating a timestamp using the function getdate() to 
know what time it actually is relative to the time 
on the machine or the server that is being use
*/

//determining the date of the day using 'mday'
$datenow=getdate();
echo "Today's Date:<br/>";
echo $datenow['mday'].'<br/>';


//determining the month of the year using 'mon'
echo "Today's Month:<br/>";
echo $datenow['mon']."<br/>";

//determining the year using 'year'
echo "Today's Year:<br/>";
echo $datenow['year']."<br/>";


//combing the day,month and year using concatenation
echo "Today's Date".$datenow['mon'].'/'.$datenow['mday'].'/'.$datenow['year'].'<br/>';

//automatically creating the date,month and year
echo time().'<br/>';

print date("m/d/y G:<br/>",time()).'';
print "Today is";
print date("j of F Y,a//t g. i a",time());




?>

<?php require 'includes/footer.php' ?>


