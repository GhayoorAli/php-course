<?php
/**
checkdate()
the function is used to check that date is valid or not, it gives result in true/false. when date  is valid
then it returns true(1) and when date is not valid then return false(0)
checkdate(month,day,year)

date_diff()
the function is used to check the difference between dates. it returns object. if the date1 is less than
date2 then it will return negative value or (invert key is 1).
date_diff(date1, date2)
if you want to show neagtive and positive value with date difference then you use php built in function
format().
% sign is must to use before every key in format function
%R will give date with + and - sign
%r will only give date with - sign.
%a will give difference of days 
%m will give months
and you can use date diff object keys with % sign.
*/


$date1 = date_create("18-06-1999");
$date2 = date_create("04-10-2022");

echo checkdate(06,18,1999) . "<br>";

$dateDiff = date_diff($date2,$date1);

echo $dateDiff->days. "<br>";

echo $dateDiff->format("%r%a %m");

echo "<pre>";
print_r($dateDiff);
