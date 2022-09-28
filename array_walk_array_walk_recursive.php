<?php
/*
array_walk()
used to run function for every value of array. in this three parameter will be passed
array_walk($array,function,parameter)
parameter is optional, put this if you want to add something in function.

array_walk_recursive()
this function has the same functionality as above but it can only be use for multidimensional array.
*/

//$array = ['a'=> 'oop', 'b'=> 'c++', 'c'=> 'php'];

$multiArray = [
	'a'=> [
		'e'=>'web',
		'd'=>'django'
	], 
	'b'=> 'c++', 
	'c'=> 'php'
];

$new = array_walk_recursive($multiArray, "arrayFunction", 'its a key');

function arrayFunction($value, $key, $param){
	echo "$key $param $value <br>";
}