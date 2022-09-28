<?php
/*
explode() and implode()
explode()
the function is used to convert the string into array.
explode(sperator,string,limit)
sperator will be the from where you want to break string and convert into array
like spaces
string: enter the string to convert into array
limit will be the size of array.

implode()/join()
the function is used to convert the array into string.
implode(sperator,array)
sperator: means which alphabet you want to put to seperate words like spaces
array: will be the array to convert into string 
*/

// $string = "This car is very fast";

// $array = explode(" ", $string,4);

// echo "<pre>";
// print_r($array);

$array = ['Ferrari','is','a','sports','car'];

$str = implode(" ", $array);

echo $str;