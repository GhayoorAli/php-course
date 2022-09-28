<?php
/**
bin2hex()
ASCII means all the characters in keyboard.
the function is used to convert all the ASCII characters into hexa
bin2hex(string)

hex2bin()
the function is used to convert the hexa into binary.
hex2bin(hex)
*/

$string = "There is some data";

$converted = bin2hex($string);

echo $converted . "<br>";

echo hex2bin($converted);