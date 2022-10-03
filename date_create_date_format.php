<?php
/**
date_create()
the function is used to create date and time. and it will retunr an object. 
date_create(date & time,timezone)
you can use any timezone as you want. 

date_format()
the function is used to show the created date and time we need to use this function.
date_format(object,date format)
*/

$dateObject = date_create("2030-06-18 4:30:00");

echo date_format($dateObject,"d/m/y g:i:s");