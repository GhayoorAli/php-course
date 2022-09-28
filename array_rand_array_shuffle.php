<?php
/*
array_rand()
the function is used to get random values from an array, the two parameters will be passed in function one will be array and second will be number of random values. array_rand($array, number). and it will return new array. it will return random index.

shuffle()
the function is used to change/shuffle position of array values. only array will be passed in the function. and it will shuffle in same array.
*/

$array = ['red','green','blue','orange','yellow'];
// $new = array_rand($array,3);
// print_r($new);

// foreach ($new as $v) {
// 	echo $array[$v];
// }


shuffle($array);
echo "<pre>";
print_r($array);