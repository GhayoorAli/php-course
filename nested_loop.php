<?php
/*
Nested loop is used when you want to show data in tabular form. nested means loop inside loop. the first(outer) loop worked as a row and inner loop worked as a column.
syntax:
for(init; cond; incr/decr){
	for(init; cond; incr/decr){
	echo statement;
	}
}
*/

for($a=1;$a<=100; $a =$a+10){
	for($b = $a; $b < $a+10; $b++){
		echo $b . " ";
	}
	echo "<br>";
}