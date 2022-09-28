<?php
/*
These are functions are case sensitive.

array_diff()
this function is used to get the different values from the arrays. it will compare first array with others and get the different values.

array_udiff()
this function is used to get the different values from the arrays. it will compare first array with others and get the different values. by using your user defined function.

array_diff_key()
is used to get the different keys from the arrays.

array_diff_ukey()
is used to get the different keys from the arrays by using your user defined function.

array_diff_assoc()
is used to get the different keys and values from the arrays.

array_diff_uassoc()
is used to get the different keys and values from the arrays by using your user defined function.

array_udiff_assoc()
same as array_diff_uassoc()

array_udiff_uassoc()
is used to compare arrays and get the different keys and values by using your user defined function, in which you have to create two functions first will compare keys and second will compare values of array.
*/

$a1 = ['a'=>'uk','b'=>'usa','c'=>'uae','d'=>'canada'];
$a2 = ['a'=>'uk','e'=>'tokyo','f'=>'usa'];

function compare($a,$b){
	if($a === $b){
		return 0;
	}
	return ($a>$b)? 1: -1;
}

function compareValue($a,$b){
	if($a === $b){
		return 0;
	}
	return ($a>$b)? 1: -1;
}

//$new = array_diff($a1, $a2);
//$new = array_diff_key($a1, $a2);
//$new = array_diff_assoc($a1, $a2);
//$new = array_diff_uassoc($a1,$a2,"compare");
//$new = array_udiff_assoc($a1,$a2,"compare");
//$new = array_diff_ukey($a1, $a2,"compare");
$new = array_udiff_uassoc($a1, $a2,"compare","compareValue");
echo "<pre>";
print_r($new);