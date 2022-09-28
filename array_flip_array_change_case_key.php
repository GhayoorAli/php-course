<?php
/*
array_flip()
the function is used to change the index into value and value into index, only one parameter will pass into array_flip($array) that will be array. and it will create new array.

array_change_key_case()
the function is used to change the letters into uper and lower case of array index. two parameter will pass in this function one is array and second will be CASE_UPPER and CASE_LOWER. by default its value is lower case.
*/

$array = [
	'a' => 'ali',
	'b' => 'ahmad',
	'c' => 'adnan'
];

//$new = array_flip($array);
$new = array_change_key_case($array, CASE_UPPER);
echo "<pre>";
print_r($new);