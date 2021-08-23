<?php
//example to get the palindrome of a number using built in function
function Palindrome_Function($input) {
// applying strrev() function to input string
$reverse = strrev($input);
//condition to check if reverse and input strings are same or not
if($reverse == $input) {
return true;
}
else
{
return false;
}
}
$input = 1995991;
//calling the reverse function
$result = Palindrome_Function($input);
if($result == TRUE) {
echo $input.' is palindrome';
}
else
{
echo $input.' is not palindrome';
}
?>