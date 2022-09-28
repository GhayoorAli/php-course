<?php
/**
addslashes()
the function is used to add slashes in a string where it will find single and double quote. this function is mostly used when we saved data in database to prevent data from hackers.

stripslashes()
the function is used to remove the added slashes from the string.

addcsalshes()
the function is used to add slashes with single or multiple characters. 

stripcslashes()
the function is used to remove the slashes from the characters.
*/


$str = "The house and 'car' is 'very 'beautiful";
$new = "T\h\e \h\o\u\s\e \a\n\d '\c\a\r' \i\s '\v\e\r\y '\b\e\a\u\t\i\f\u\l";

echo addslashes($str). "<br>";

echo stripcslashes($str). "<br>";

echo addcslashes($str, "hi"). "<br>";

echo addcslashes($str, "A..Z"). "<br>";

echo addcslashes($str, "a..z"). "<br>";

echo stripcslashes($new). "<br>";