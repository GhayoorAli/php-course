<?php
/*
array_slice()
is used to pick the specific value from the array. array_slice has four parameters array_slice(array,start,length,preserve)

array will be the array variable
start means from which index you want to pick value.
length mean upto which index you want to pick value.

Remember array_slice will pick values and make a new array with new indexes and starts from 0 index of array.
but if you want that array_slice will pick values with same index that was in old arrays then use fourth parameter preserve key that will be true/false. by default it is false and when you will do it true then array_slice will pick value with same indexes.
*/

$array1 = ['name','designation','salary','experience','job'];

$newArray = array_slice($array1,1,3,true);

echo "<pre>";
print_r($newArray);