<?php
/*
Multidimensional array with list function
list() is only used for arrays, with list() no need to run the nested foreach loop.
*/

$array = [
	['sedan','model', 22,'BMW'],
	['jeep','model',12,'Range'],
	['Suv','model',22,'Audi'],
	['Sports','model',18,'Ferrari']
];

$associativeArray = [
	[
		'color' => 'Blue',
		'model' => 21,
		'brand' => 'Mercedes'
	],
	[
		'color' => 'Red',
		'model' => 22,
		'brand' => 'Audi'
	],
	[
		'color' => 'Blue',
		'model' => 22,
		'brand' => 'Ferrari'
	]
];

// foreach($array as list($car,$model,$num,$name)){
// 	echo "$car $model $num $name";
// }

foreach($associativeArray as list("color"=>$color,
	"model"=>$model,
	"brand"=>$brand)){
echo "$color $model $brand";
}