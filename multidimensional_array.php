<?php
/*
Multidimensional/Nested Array
array inside an array are called multidimensional/nested array. in which working as row and column. 
it is also called multidimensional index array.
for example,
$arr = [
	['v1','v2','v3'],
	['v1','v2','v3'],
	....
];
*/

$demo = [
	['sedan','model', 22,'BMW'],
	['jeep','model',12,'Range'],
	['Suv','model',22,'Audi'],
	['Sports','model',18,'Ferrari']
];

for($row = 0; $row < 4; $row++){
	for($col = 0; $col < 4; $col++){
		echo $demo[$row][$col] . " ";
	}
	echo "<br>";
}


foreach($demo as $data1){
	foreach($data1 as $data2){
		echo $data2;
	}
	echo "<br>" . " ";
}
