<?php
/*
array_intersect()
is the function used to get the common values from the arrays.
array_uintersect()
this function is used to get the common values from the arrays by using your user defined function.
array_intersect_key()
is the function is used to get the common keys from the arrays.
array_intersect_assoc()
is the function is used to get the common keys and values from the arrays
array_intersect_uassoc()
is the function is used to get the common keys and values but you can use your user defined function to compare arrays.
array_intersect_ukey()
is the function is used to get common keys from the arrays by using your user defined function.
array_uintersect_assoc()
is the function is used to get the common keys and values but you can use your user defined function to compare arrays.
array_uintersect_uassoc()
is the function is used to get common keys and values by using your user defined function.
*/

function compareArray($a, $b){
	if($a === $b){
		return 'matched';
	}
	return ($a > $b)? 'greater':'samller';
}

$a1 = ['a'=>'car','b'=>'jeep','c'=>'sports','d'=>'plane','e'=>'boats'];
$a2 = ['a'=>'bike','c'=>'sports','g'=>'city'];

$new = array_intersect($a1, $a2); // will match only values
$new = array_intersect_key($a1, $a2); // will match only keys and give result of first array.
$new = array_intersect_assoc($a1,$a2); // will match keys and values of array
$new = array_uintersect($a1, $a2,"compareArray");
echo "<pre>";
print_r($new);