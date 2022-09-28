<?php
/*
with string opr(.) you can concatinate two values and variables.
There are two type of string opr.
1) .  (concatination) it is useful for small string
2) .= (dot and equal sign) it is useful large string

Other functionality
trim function is used to remove blank spaces before and end of string.

str_replace function is used to replace string.
syntax
str_replace('target word', 'replaceable word', $string);

syntax
trim($string)

single and double quotes
we are representing string in double and single qoutes. the difference is, in
single qoutes represents string as it is. even if you use $variable in single qoutes then it will show as a string.
double qoutes in which some rules are apply like 

escape characters: character are new line and tabs and we will back slash (\) as concatination to represent them. like \n for new line and \t for tabs.

variable characters. this will allow you to add variables in string in double qoutes with $ sign. e.g
echo "My name is $firstname $surname.\nI am a master of time and space.\"Yatta!\"";

*/
// example

$a = 'My Name Is ';
$a = $a. 'Ghayoor. ';
echo $a;

$b = 'Im a ';
$b .= 'Web Developer ';
$b .= 'and working as a backend ';
$b .= 'developer';
echo "$b";