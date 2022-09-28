<?php
/**
trim()
the function is used to remove the caharacters from the right and left side of any string.

rtrim() , chop()
the function is used to remove the caharacters only from the right side of any string.

ltrim()
the function is used to remove the caharacters only from the left side of any string.
*/

$string = "The car is red";

echo trim($string,"Td");

echo rtrim($string, "ed");

echo ltrim($string,"Th");

echo chop($string, "d");