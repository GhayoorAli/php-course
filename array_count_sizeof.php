<?php
/*
count(), sizeof function
this functions are used to count the array values.
if the array is multidimensional and want to count the value then in count and sizeof function, there should be one more parameter that called mode it will be 1 or 0, if you want to count all values in multidimensional array then use 1. 
*/

$demoArray = ["seed", "fruits", 12, "car"];

//echo count($demoArray);
//echo sizeof($demoArray);

$array2 = [
	'car' => ['BMW','SUV',22,'Red'],
	'jeep' => ['RangeRover', 22, 'Black', 'Dubai']
];

//echo count($array2['car'],1);

// $len = count ($demoArray);

// for($i = 0; $i<$len; $i++){
// 	echo $demoArray[$i];
// }

print_r(array_count_values($demoArray));


/*
array_count_values() function:
is used to count the values in array.
*/
