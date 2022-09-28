<?php
/*
array_pop() and array_push function:
array_pop() is used to delete the last value of an array. And array_push() is used to enter the new value in the last of an array.
*/

$demo = ['oslo','tokyo','berlin','stutgart'];

array_pop($demo);

echo "<pre>";
print_r($demo);

$data = ['oslo','tokyo','rio'];

array_push($data,'deven','japan');

print_r($data);