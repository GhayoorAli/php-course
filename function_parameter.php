<?php
/*
function with parameters:
if you want to use same function for different output/functionality. you can use parameters in functions according to your requirements. and at the placa of function call you can pass value of parameters.
you can also create parameters with values, that will run when no parameter value is defined at place of function call.
syntax:
function(parameter1, parameter2 ...)
if you want to set default value,
function(p1 = value, p2= value ...)
*/

function firstFunctionParameter($a, $b, $c = "this is sum"){
	echo $a + $b . $c;
}


firstFunctionParameter(10,5,"new sum");