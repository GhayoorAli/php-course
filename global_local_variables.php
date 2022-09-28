<?php
/*
Global and local variables:
the variables that declared inside the function are called local variables and it can be used only inside the function.

the variables that declared outside the function are called global variables. it can be used any where in file. you can use this variables inside the function with the global keyword.
*/
$b = "Global Variable";
function demo(){
	global $b;
	$a = "Local Variable";
	echo $a;
	echo $b . "You can also use global var now";
}

echo demo();