<?php
/*
array_fill()
the function is used to create the new array with the same value for all indexes.
this function has three parameters,
array_fill(startIndexNumber, arraySize, value)

array_fill_keys()
this function change the index array into associative array. the values of index array will be the index of associative array and the value will be same for all indexes. two parameters will be passed in this function one is array and second is value.
*/

// $array = ['a','b','c','d','e'];

// $new = array_fill_keys($array, 'sports car');

// echo "<pre>";
// print_r($new);

$createdArray = array_fill(0, 5, 'sports car');

echo "<pre>";
print_r($createdArray);