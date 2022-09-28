<?php
/*
str_replace()
the function is used to replace the specific part/word in a string. it is case sensitive function. we can also use this function to replace string in array.
str_replace(find,replace,string)

str_ireplace()
the function is same as str_replace but it is case-insensitive.

substr_replace()
the function is used to replace the specific part of string.
substr_replace(string,replacement,start,length)
start means from where you want to start replace
length means upto you want to replace. length is optional if you want to replace all from start.

strtr()
the function is used to replace the characters in a string.
strtr(string,from(find character),to(replace character)).
*/

$string = "My Name is Ghayoor";

$find = ['My','Ghayoor'];
$replace = ['Your','Ali'];

//echo str_replace('Ghayoor', 'Ali', $string);
echo str_replace($find, $replace, $string);
echo str_ireplace('ghayoor','Ali',$string);

echo substr_replace($string, 'Your hobby is gym', 18);

echo strtr($string, 'ae', 'uj');