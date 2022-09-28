<?php
/*
strpos()
this function is used to find the position of a word in a string. and it will return the first position of word.

strrpos()
this function is used to find the position of a word in a string. and it will return the last position of word.

strpos() and strrpos() both are case-sensitive

stripos() 
this function is same like strpos() but it not case-sensitive function

strripos()
this function is same like strrpos() but it not case-sensitive function 
*/

$string = "My Name is Ghayoor. php is a coding language";

echo strpos($string,"is")."<br>";
echo strrpos($string,"is")."<br>";

