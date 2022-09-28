<?php
/*
strstr() and strchr() (both are case-sensitive)
the function is used to search a word in a string, the function returns a string that conatins the searching word and remaining string after that word.
strstr(string,searching_word,before_search)
before_search is optional, by default its value is false and when its true then it returns the string before the searching word.

strrstr()
this function is like strstr but it is working in revrerse mode.

strrchr() 
this function is like strstr but it is working in revrerse mode.

stristr()
this function is same like strstr() but it is case-insentive

strpbrk()
this function is used to search a character in a string. and retruns the remaning string after the searching word.
*/

$string = "My Name is Ghayoor";

echo strstr($string, "is");
echo strrchr($string, "is");

