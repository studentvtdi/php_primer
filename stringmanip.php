<?php 
$title="PHP String Manipulation";
include 'includes/header.php'

?>

<h1><?php echo $title ?></h1>

<?php 
//Concatenation of strings
    $phrase1="student who came late";
    $name="wayne thomas";
    $phrase2="in class, stand with Rock";
    /*
concatenation allows us to put blocks of string together whether 
it is a string varibale or it is a static string 
meaning declaring  and using opening quotation marks and typing 
strings
*/
echo $phrase1 ." ".$phrase2;
echo '<br/>';
echo $phrase1 .", named Tiffany, ".$phrase2;
echo '<br/>';
echo '<hr/>';
//String transformation
//ucfirst($name) means desiring the first letter to be uppercase
echo 'Uppercase first letter:'.ucfirst($name).'<br/>';

//ucwords($name) puts all the first letters of each word to uppercase
echo 'Uppercase first letter of each word' .ucwords($name). '<br/>';

//strtoupper($name) puts all letters to upper case
echo 'Upper case '.strtoupper($name).'<br/>';

//strtolower()puts all letters to lower case
echo 'Lower case '.strtolower("THIS WAS ALL UPPER CASE").'<br/>';
echo '<hr/>';

/*
str_repeat('a',10) is to repeat a string a certain number of times 
where 'a' is the string to repeated and 10 represents the number of 
times the string will be repeated
*/
echo 'Repeat String:'.str_repeat('a',10).'<br/>';

//strtoupper(str_repeat())a nested function to make 'a' be printed out in all uppercaps
echo 'Repeat String in all uppercase '.strtoupper(str_repeat('a',10)).'<br/>';

/*
substr($name,5,10) allows us to get a portion of a string by 
taking a string varible and states from what starting point 
to what ending point that needs to be extract where $name is 
the string to extract from and '5' represents the first first
five characters to remove while '10' represents the first ten 
characters to be extracted after the first five characters 
are removed.
*/

echo 'Get a Substring'.substr($name,5,10).'<br/>';

/*
strpos($name,'t') is the get position of string meaning to 
pass in a string then determine the character sequence you 
would like to find the position of in the string where 
like arrays the first letter is always zero though it 
will count from the first letter of the $name up until 
it reaches 't' to locate its position
*/

echo 'Get position of string:'.strpos($name,'t').'<br/>';

//Returns NULL
//echo 'Get position of string:'.strpos($combine,'z').'<br/>';
//To strchr($name,'r') to search if there is a character that exist in the string $name
echo 'Find Character "R"'.strchr($name,'R').'<br/>';
echo 'Find Character "r"'.strchr($name,'r').'<br/>';
echo 'Find Character "s"'.strchr($name,'s').'<br/>';
echo 'Find Character "e"'.strchr($name,'e').'<br/>';

//count the lenght of a string including spaces
echo 'Find Lenght of String:'.strlen($name).'<br/>';

echo 'Without Trim:'."A"."BCD"."E".'<br/>';
echo 'Trim spaces on both sides:'."A".trim(" B C D ")."E".'<br/>';
echo 'Trim spaces to the left'."A".ltrim(" B C D")."E".'<br/>';
echo 'Trim spaces to the left'."A".rtrim(" B C D ")."E".'<br/>';

//str_replace searches $phrase2 to replace 'stand' with 'sit' given 'stand' originally was in $phrase2
echo 'Replace string with another:'.str_replace("stand","sit", $phrase2).'<br/>';


?>

<?php require 'includes/footer.php' ?>
