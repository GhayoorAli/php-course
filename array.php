<?php
/*
Arrays:
array is used to store multiple data in one variable.
there is specific way to declare array. you can use array() keyword and [] to declare array value. array in a format of ['value1','value2'....] are also called list array or index array. array also have index/key for every value in array.if the array index/key does not specified then it starts from 0 index/key. 
array is a mixture of data types.

print_r is the specific function in php that used to only print array values.

if you want to use large values then you can use loops for this.
*/

$arrayFirst = ['a','b','c','d','e','f'];

//to show specific values
echo $arrayFirst[0];
echo $arrayFirst[1];
echo $arrayFirst[2];

//to show all values at once
for($a=0;$a<6;$a++){
	echo $arrayFirst[$a]."<br>";
}
