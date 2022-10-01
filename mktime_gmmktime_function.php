<?php
/**
mktime()
the function is used to show the past date and time, six parameters will pass in this function
mktime(hour,minutes,seconds,month,day,year)

gmmktime()
the function is used to show the past time like mktime but it will show time in GMT format.

date()
date function will used to show the date and time it has two parameters
date(format, timestamp)
*/

echo date("h:i:s d-m-y", mktime(4,30,5,6,18,1999))."<br>";

echo date("h:i:s d-m-y", gmmktime(4,30,5,6,18,1999))."<br>";

