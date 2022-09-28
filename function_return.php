<?php
/*
function with return:
return is used in functions, it will return the function output and it will not print directly like echo. it just return value. you can function to print return value or you can store it in variable and then echo. you can also use this return value by calling function in another function according to your requirements.
syntax:
function(){
	$a = statement;
	return $a;
}
*/


function tables($num){
	for($a = 1; $a <=10; $a++){
		echo $num ."*".$a . "=" . $num*$a;
	}
	return "falied!";
}

$showTable = tables(2);
echo $showTable;