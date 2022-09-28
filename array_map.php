<?php
/*
array_map()
array_map() is used to call function for every value of array but in this, function will return a new array. two parameters will passed in array_map(functionName,$array). you can use more than one arrays in array_map function.
*/

function arrayFunctionForMap($a, $b){
	return [$a => $b];
}

$array = [1,2,3,4,5];
$array2 = ['a'=>['f'=>'car'],'b'=>'bat','c'=>'jeep','d'=>'ball','e'=>'bike'];

$new = array_map("arrayFunctionForMap", $array,$array2);
echo "<pre>";
print_r($new);