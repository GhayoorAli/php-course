<?php
/*
function argument by reference
syntax:
function demo(&$a){
	$a = "value2";
}
demo($b)
$b = "value1";

when you created any variable in php, then a specific space is allocated to this varibale and it has a specific address. that means when you declare argument with reference in function then it override and change the value of variable.
in example, you created function demo and pass the reference variable &$a. but when you called function and pass the $b.
then $b value is changed because php capture address and changed it. 
*/

function demo(&$string){
	echo $string .= "New Value";
}

$string2 = "old value";
echo demo($string2)."<br>";
echo $string2;