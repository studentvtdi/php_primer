<?php 
$title="Functions";
include 'includes/header.php'

?>

<h1><?php echo $title ?></h1>

<!-- 
Sometimes there might be a need to create our own functions
so as to avoid having to repeat writing  a line of code all
the time for reference purposes. 
 -->


<?php 

//Defining a Function using the keyword 'function'

function WriteMessage(){
    echo "You are really a nice person, Have a nice time!<br/>";

}

//Calling a Function
WriteMessage();

echo '<hr/>';

WriteMessage();


//Defining  Functions with parameters


function AddFunction($num1,$num2){
    $sum=$num1+$num2;
    echo "The sum of $num1 and $num2 is:$sum <br/>";
    }
    
    AddFunction(10,20);
    
    $num=500;
    AddFunction(10,$num);

    //using numbers with string quotations
    AddFunction('10','50');

//Pass by reference storage of data functions using ampersand in parameters 
function ChangeNum(&$num){
    $num=$num+10;
    // an other way to write '$num=$num+10;' is '$num+=10;'

    }
    $num=500;
    ChangeNum($num);
    echo $num.'<br/>';

//A value Returning Function
function ReturnProduct($num1,$num2){
    $prod=$num1*$num2;
    /*
    reason to be able to still use the same variable names 
    from a previous functions namely $num1 and $num2 is 
    that once a functions execute a code with these variables 
    they exit their usefulness in the function
    */
    return $prod;
    }
    
    $return_value=ReturnProduct(10,20);
    echo $return_value.'<br/>';
    


?>

<?php require 'includes/footer.php' ?>
