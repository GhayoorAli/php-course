<?php
/*
Array Traversing
array traversing function is used to change the position of internall pointer of array. there are some function for this

current()
the function is use to get value of array according to the current position of internal pointer.

pos()
pos is same like current () function

key()
is used to get the key according to current position of internal pointer.

next()
the function is used to change the position of internal pointer to the next value.

prev()
the function is used to get back internal pointer to the prev value of array.

end()
the function is used to move the internal pointer to the last value of array.

each()
the function is used to get the key and values of current pointer of array.

reset()
the function is used to resset the position of internal pointer. 
*/


$a = ['car','jeep','bike','sports'];

echo key($a). ":".current($a);


