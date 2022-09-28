<?php
/*
list()
the function is used to store the each value of array into sperate variables. list() function will only work with index array and associative array with numeric keys.
list(variables) = $array;
in list() you need to put varibles according to the size of array values.
you can also set all the values of array in one variable.
*/

$array = ['red','green','orange'];

$array2 = [0=>'red',1=>'green',2=>'orange'];

// list($a,$b,$c) = $array2;

// echo $a;
// echo $b;
// echo $c;

list($a[0],$a[1],$a[2]) = $array2;

foreach ($a as$value) {
	echo "all values in one variable : $value";
}