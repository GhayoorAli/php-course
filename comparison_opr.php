<?php
/**comparison opr gives result in true or false. 
comparison opr are:
== equal to (left var should equal to right var then true)
=== equal to and equal data type (left var should equal to right var and data types of both var should equal then true)
!= Not equal to (left var should not equal to right var then true)
<> Not equal to (same as above !=)
!== Not equal to and not equal data types (left var and data type should not equal to right var then true.)
> greater then (left var should greater then right var then true)
< less then (left var should less then right var then true)
>= greater then and equal to (left var should greater or eqaul to right var then true )
<= less then and equal to (left var should less then and equal to right var then true)
*/

$a = 5;
$b = 5;
$c = 10;
$d = 'ali';

echo $a == $b; // 1
echo $a === $b; // 1
echo $a != $c; // 1
echo $a <> $c; // 1
echo $a !== $d; // 1
echo $c > $a; // 1
echo $a < $c; // 1
echo $a >= $b; // 1
echo $c >= $b; // 1
echo $a <= $c; // 1
echo $a <= $b; // 1 
