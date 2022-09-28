<?php
/*
continue statement:
continue can be work with any loop. in loop if you want to skip a statement and exexute others. then you will be use continue statement. when loop get continue statement then it will back to loop and run again. means    
*/

for($a =1; $a <= 10; $a++){
	if($a == 3){
	continue;
	}
	echo $a . "<br>";
}

/*
means a = 3 and loop will get continue statement according to condition then continue statement will skip this value and loop will continue from nexr value.


break statement:
break can also be used in any loop. if you want to execute loop upto sepcific condtion and not process further loop then you can use loop. means
*/
for($b=1;$b<=10;$b++){
	if($b == 5){
		break;
	}
	echo $b. "<br>";
}

/*
means when b = 5 and loop will get break statement according to condition then break statement will skip this value and terminate loop here.
*/
