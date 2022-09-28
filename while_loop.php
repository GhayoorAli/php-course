<?php
/*
loops: if you want to do same action for many times or untill the condition is false.

four types of loop:
1) while
2) Do While
3) for loop
4) foreach

While Loop:
while is used to execute function untill the condition is false. there are three parts of while loop intilization, condition and increment/decrement.
syntax:
while(condition){
	statement;
	increment/decrement;
}
*/

$a = 1; //initialization

while($a <=20){ // condition
	echo $a . ') statment is true <br>'; // statement
	$a++;
}

// second example

$b = 1;
$c = 10;
while($b <= $c){
echo $b . '* 5 = ' . $b * 5 .  '<br>';
$b++;
}
