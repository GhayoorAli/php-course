<?php
/**
rand()
the function is used to get random values between the min and max values
rand(min,max)

mt_rand()
same as rand() just it is 4 times faster then rand() function.

lcg_values()
the function is used to get the random value only between 0 and 1.
will not pass any parameter in this function
*/


echo rand(0,50) . "<br>";

echo mt_rand(0,50) . "<br>";

echo lcg_value();
