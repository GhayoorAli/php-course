<?php
/*
array_reduce()
this function is used to run function for every value of array and the function will return a string for all values of array. three parameters will be passed
array_reduce($array,functionName, initialValue)
*/

function arrayFunction($initial, $value){
	return $initial. "-".$value;
}

$array = ['orange','banana','lemon','strawberry'];

$new = array_reduce($array, "arrayFunction","Mango");
print_r($new);