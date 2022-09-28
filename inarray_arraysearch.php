<?php
/*
in_array() and array_search function:

this functions are used to search value in any array.
in_array() gives result in true/false(1/0) form and array_search gives result in index/key form.
*/

$a = ['car','jeep',34,'london',12.5];

$b = ['car'=>'bugati','jeep'=>'Range','model'=>22];

//echo in_array(35,$a);

echo array_search('Range',$b);