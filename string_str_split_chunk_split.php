<?php
/*
str_split()
the function is used to convert a string into array. in which every string alphabet will assign on to new index.means "Hello"-> ["H","e","l","l",'o'].
str_split($str,lenght)length will be, how much string words you want to assing to one index. length is optional.

chunk_split()
the function is used to add chunks after wvery character of string. chunk can be something like (comma,dot,space or any character.)
chunk_split($string,length,add chunk)
length means after how much character you want to add chunk.
*/

// $string = "RangeRover";
// $array = str_split($string,2);
// echo "<pre>";
// print_r($array);

$string = "RangeRover";
echo chunk_split($string,1,"..");