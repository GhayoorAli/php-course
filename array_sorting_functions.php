<?php
/*
Array sorting functions
sort()
is used to sort the values of index arrays. it will sort values in ascending order. this function does not return new array it will change in same array.
sort($array)

rsort()
means reverse sort, this function is used to sort the values of index arrays. it will sort values in descending order. this function does not return new array it will change in same array.
rsort($array)

asort()
means associative array sort, this function is used to sort the values in ascending order of associative arrays. it will sort according to value, and it will not return new array. asort($array). and index will remain same.

arsort()
means associative array reverse sort, this function is used to sort the values in descending order of associative arrays. it will sort according to value, and it will not return new array. and index will remain same.

ksort()
means key sort, it will sort array according to key and it will not check values. ksort will sort keys in ascending order.

krsort()
means key reverse sort, it will sort array according to key and it will not check values. ksort will sort keys in descending order.

natsort()
means natural order sort, it will sort in ascending order, it will check complete value
and sort it. if the value contains string and numeric then it will according to both.

natcasesort()
means natural case order sort, it will sort values in ascending order and will also check alphabetic small and capital letters. it will show small letters first and then capital letters.

array_multisort()
means to sort multiple arrays in ascending order at once,  but remember it will work only when both arrays have same size. you can sort more than one array in this function. 

array_reverse()
the function is used to sort the values of array in reverse order and it will create new array and it can be work for every type of array.
*/

$a = ['geminie','leo','aries'];
$b = [
	'c'=>'bike',
	'b'=>'jeep',
	'a'=>'car',
	'd'=>'range'
];
$c = ["img10.png","Img4.png","Img18.png","img13.png"];

$d = ['car','jeep','sports'];

//sort($a);
//rsort($a);

//asort($b);
//arsort($b);

//ksort($b);
//krsort($b);

//natsort($c);
//natcasesort($c);

//array_multisort($a,$d);
$new = array_reverse($a);

echo "<pre>";
print_r($new);