<?php
/*
strlen()
this function is used to count the characters of a string.

str_word_count
this function is used to count the words of a string
str_word_count(string,return)
return is optional parameter, it has three values 0,1,2 if you put 1 then it will not count words but it will convert string into array, if you put 2 then it will also return array but with the position of wprds.

substr_count()
this function is used to search any word to check how many times using in string.
substr_count(string,searching_word,start,end)
start and end are the optional parameters.
*/

$string = "My Name is Ghayoor";

echo strlen($string)."<br>";
echo str_word_count($string)."<br>";
echo substr_count($string, "Name");