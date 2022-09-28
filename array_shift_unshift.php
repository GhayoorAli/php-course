<?php
/*
array_shift()
is used to remove the value of zero index from an array.
array_unshift()
is used to add the new value at zero index of an array.
*/

$demo = ['car','jeep','airplane','boat'];
//array_shift($demo);

array_unshift($demo, 'Bike','Sports');
echo "<pre>";
print_r($demo);