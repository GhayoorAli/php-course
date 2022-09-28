<?php
/*
Recursive function:
when a function called in itself function is called recursive function. it works like a loop.
syntax:
function demo(){
	statement;
	demo();
}
*/

// function demo($num){
// 	if($num <=5){
// 		echo $num;
// 		demo($num+1);
// 	}
// }

// demo(1);


function factorial($n){
	if($n < 0){
		return "failed";
	}else{
		return ($n * factorial($n-1));
	}
}

echo factorial(5);