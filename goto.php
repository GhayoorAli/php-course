<?php
/*
goto statement:
goto statement is used, when you want to jump from one page/code/function to another page/code/function.
*/

for($a = 1; $a <=10; $a++){
	if ($a == 4){
		goto newcode;
	}
	echo $a . "<br>";
}
newcode:
echo "new code and function.";


