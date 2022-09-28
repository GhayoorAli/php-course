<?php
/*
array_merge()
is used to add the other array in an array. it will create new array when merging array. when the index will be same then it will replace the value of that index. it can only be use for index and associative array.

array_combine()
is also used to add the other array in an array. it will also create new array when merging array.the value of first array will become the key of second array. but it can only be use for index array.

array_merge_recursive()
is also used to add the other array in an array. it will also create new array when merging array. when the index will be same then it will not replace the value, it will create a seperate array with both values of same index. it can be used for multidimensional array.
*/

// $array1 = [
// 	'a'=>'name',
// 	'b'=>'designation',
// 	'c'=>'salary'];
// $array2 = [
// 	'b'=>'age',
// 	'e'=>'role'];
//$newArray = array_merge($array1,$array2);

// $array1 = [
// 	'name',
// 	'designation',
// 	'salary'];
// $array2 = [
// 	'age',
// 	'role',
// 	'place'];

// $newArray = array_combine($array1,$array2);


$array1 = [
	'a'=>[
		'name' => 'ghayoor',
		'job' => 'developer',
		'experience' => '1.5 years',
		'speciality' => [
			'first' => 'php',
			'second' => 'js',
			'third' => 'magento'
		]
	],
	'b'=>'designation',
	'c'=>'salary'];
$array2 = [
	'd'=>'age',
	'e'=>'role'];
$newArray = array_merge_recursive($array1,$array2);

echo "<pre>";
print_r($newArray);