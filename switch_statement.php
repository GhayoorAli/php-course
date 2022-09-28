<?php
/**
switch statement is same as if elseif. is also use for multiple conditions. but it has different way.
it will check conditions, if any condition is true then it will print statement of that case and then break. if not any condtion are true then it print default statement.
it will compare case vale with the expression value. 
syntax:
switch(expression){
	case 1:
	statement;
	break;

	case 2:
	statement;
	break;

	case 3:
	statement;
	break;
	default:
	statment;
}
*/

$day = 1;

switch ($day) {
	case 1:
		echo "today is saturday";
		break;

	case 2:
		echo "today is saturday";
		break;
		
	case 3:
		echo "today is saturday";
		break;		
	
	case 4:
		echo "today is saturday";
		break;

	case 5:
		echo "today is saturday";
		break;
		
	case 6:
		echo "today is saturday";
		break;
		
	case 7:
		echo "today is saturday";
		break;			
	default:
		echo "enter valid day number from 1 to 7";
		break;
}

?>