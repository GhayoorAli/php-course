<?php
/*
Foreach Loop:
in php foreach lopp is only used for arrays. you can print arrays through foreach loop. this loop has specific way to decalare.
syntax:
foreach($values as $value){
	statement;
}
OR
foreach($values as $key => $value){
	statement;
}
*/

$data = ['red','green','blue',12,14.5,'car'];

foreach($data as $a){
	echo $a;
}

foreach ($data as $key => $value) {
	echo $key;
}