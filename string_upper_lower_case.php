<?php
/*
strtolower()
this function is used to change the every letter of string into small letters.

strtoupper()
this function is used to change the every letter of string into capital letters.

lcfirst()
this function is used to convert only first letter of string into lower case.

ucfirst()
this function is used to convert only first letter of string into upper case.

ucwords()
this function is used to convert the first letter of every word of string into capital letter.
*/

$string = "My Name is Ghayoor";

echo strtolower($string) ."<br>";
echo strtoupper($string)."<br>";
echo lcfirst($string)."<br>";
echo ucfirst($string)."<br>";
echo ucwords($string)."<br>";