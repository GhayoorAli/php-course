<?php
/*
array_replace
this function is used to replace the values in arrays and it can be used only for index and associative array. array_replace will not replace the value in same array it will create new array.
*/

$a = [0=>'leo',1=>'geminie',2=>'taurus',3=>'virgo'];

$b = [0=>'capricorn',2=>'sagitarius'];
$newArray = array_replace($a, $b);
echo "<pre>";
print_r($newArray);

/*array_replace_recursive)() function
is used to replace values in only multidimensional array, because array_replace is handle only index/associative array.
*/

$data1 = [
	'car' => [
		'name'=>'BMW',
		'model'=>12,
		'city'=>'tokyo'
	],
	'event'=>[
		'type'=>'autoshow',
		'month'=>'september',
		'venue'=>'hilly area'
	]
];


$data2 = [
	'car'=>[
		'name'=> 'Ferrari',
		'city'=>'moscow'
	],
	'event'=>[
		'month' => 'December',
		'venue' =>'oslo'
	]
];

echo "<pre>";
print_r(array_replace_recursive($data1,$data2));
 
