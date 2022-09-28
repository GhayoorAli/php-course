<?php
/**
convert_uuencode()
the function is used to encrypt the string  it has no limits, like md5 encrypt in 32 characters.
convert_uuenode(string)

convert_uudecode()
the function is used to decode the encoded string data.
convert_uudecode(string)
*/

$string = "Something String";

$encoded = convert_uuencode($string);
echo $encoded . "<br>";
echo convert_uudecode($encoded);