<?php
/*
range()
the funcction is used to make an array with two number, for example, if you have number 1 and 10 but you need to create array from this two numbers then you have to use range function, this function will return array from 1 to 10 numbers.
range function can work with numeric and alphabetic values.
range(start,end,step)
start means put the starting num/alphabet.
end means put the upto value to create array.
step is the optional parameter by default its value is 1, you can add 2,3 and so on according to requirement, for example if you put 2 then the array will create like this 1,3,5,7,9 every value has 2 steps.

range will create new array.
*/

// $new = range(1,10,2);
$new = range('a','z');
echo "<pre>";
print_r($new);


