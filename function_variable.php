<?php
/*
function variables:
when you declared a function and store it in a variable in double qoutes with the same function name. then no need to call function directly, you can call variable with round brackets like variable() it will same work like a function and will give the function output.
*/

function demo(){
	echo "this is vaiable function.";
}

$output = "demo";

echo $output();