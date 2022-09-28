<?php
/*
array_splice():
is used to add, remove and replace values in array.
if you want to remove value then use
array_splice($array,start,length)
if you want to add value then use
array_splice($array,start,0,$array2)
if you want to relace values then use
array_splice($array,start,length,$array2)

remember array_splice will not create another new array it will change in existing array.
*/

$array1 = ['js','php','python','angular'];
$array2 = ['magento','wordpress','django','bootstrap'];

//array_splice($array1,1,2); if you want to remove value

//array_splice($array1,1,0,$array2); if you dont want to replace just add new value

array_splice($array1,1,2,$array2); // if you want to replace value

echo "<pre>";
print_r($array1);

