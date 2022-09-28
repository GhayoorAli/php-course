<?php
/*
MultiDimensional Associative Array
the array inside an array is called multidimensional associative array. the that has specific index value is called associative array.
for example,
$demo = [
	'car' =>[
		'color' => 'Blue',
		'model' => 21,
		'brand' => 'Mercedes'
	],
	'jeep' =>[
		'color' => 'Red',
		'model' => 22,
		'brand' => 'Audi'
	],
	..... 
]
*/

$demo = [
	'car' =>[
		'color' => 'Blue',
		'model' => 21,
		'brand' => 'Mercedes'
	],
	'jeep' =>[
		'color' => 'Red',
		'model' => 22,
		'brand' => 'Audi'
	],
	'sports' =>[
		'color' => 'Blue',
		'model' => 22,
		'brand' => 'Ferrari'
	]
];
echo "<table>";
foreach($demo as $key => $value){
	echo "<tr>";
	echo $key;
	echo "</tr>";
	foreach ($value as $data) {
		echo "<td>";
		echo $data;
		echo "</td>";
	}
}
echo "</table>";