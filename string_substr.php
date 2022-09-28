<?php
/*
substr()
the function is used to get a specific part of a string.
substr(string,start,end)
if you did not specify end parameter then it will return the complete string after the start position of string.
*/

$string = "Based on your input, get a random alpha numeric string.";

echo substr($string, 5,25);