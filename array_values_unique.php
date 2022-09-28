<?php
/*
array_values()
is used to get the only values from the associative array and make a new array with numeric indexes.
array_unique()
is used to get the unique values from the array and make a new array. in which common value will show as one time.
*/

$a = ['a'=>'boats','b'=>'sports','c'=>'jeep','d'=>'car'];


$b = ['a'=>'boats','b'=>'sports','c'=>'boats','d'=>'car'];
//print_r(array_values($a));
print_r(array_unique($b));