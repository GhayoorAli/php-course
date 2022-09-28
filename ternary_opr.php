<?php
/*
Ternary opr is like if else statement, but the difference is. it is inline condition and only one statement will print at a time. it also gives results in true and false.
syntax:
(condition) ? true statement : false statement;
*/
// example

$a = 15;

($a > 21) ? $b ='value is greater' : $b ='value is smaller';
echo $b;