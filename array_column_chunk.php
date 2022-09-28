<?php
/*
array_column()
is the function used to get the value of specific index from the associative and multidimensional array. it will create a new array with numeric indexes. in this function usually two parameters are passed. if you want to assign any value as a key then pass as third parameter
syntax:
array_column($array,column name to get values, column and their values will be the key.)
*/

// $array =[
// 	[
// 		'id' => 1,
// 		'name' => 'ali',
// 		'role' => 'manager'
// 	],
// 	[
// 		'id' => 2,
// 		'name' => 'ahmad',
// 		'role' => 'ceo'
// 	],
// 	[
// 		'id' => 3,
// 		'name' => 'adnan',
// 		'role' => 'hr'
// 	]
// ];

// $new = array_column($array, 'name', 'role');
// echo "<pre>";
// print_r($new);



/*
array_chunk()
the function is used to make pair of array values. two parameters will pass in array_chunk($array, size), first parameter will be array and second will be size that will define how much values you want in a pair if you put 2 then it will make pair of 2 values. and third parameter is preserve value it will be true/false if you want to show values with the same indexes then you have to put true as a third parameter.
*/

$array2 = [
	'a'=>'google',
	'b'=>'firefox',
	'c'=>'safari',
	'd'=>'explorer',
	'e'=>'opera'
];

$newArray = array_chunk($array2, 2, true);
echo "<pre>";
print_r($newArray);