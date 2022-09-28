<?php
/*
array_keys()
is the function is used to get all the keys of array in a new array.
array_key_first()
is the function is used to get only first key of array.
array_key_last()
is the function is used to get only the last key of array.
array_key_exists()
is used to check the key is exist or not in an array. if the key exists then it will return 1/true and otherwise it will 0/false
key_exists()
is same like the array_key_exists() function.
*/

$demo = [
	"first" => "car",
	"second" => "jeep",
	"third" => "sports",
	"fourth" => "boats"
];

$newArray = array_keys($demo);
echo "<pre>";
print_r($newArray);