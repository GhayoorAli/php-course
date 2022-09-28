<?php
/*
do while:
do while loop is used to execute some statement for many times untill the condition is true. but the difference is, at very first time it will run loop and execute statement without checking the condition either condition is true or false.
syntax:
do{
	statement;
	increment/decrement;
}while(condition)
*/

$a = 1;

do{
	echo 'Execute loop'. "<br>";
	$a++;
}while ($a <= 10);