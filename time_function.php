<?php
/**
date()
the function is also used to show current time of server and it will not show system time.
time can be denote with different letters 
To show hours:
h means hours and it will show hours in 12 hour format with 0 prefix like 01,02, to 12
H means hour and it will show hours in 24 hours format with 0 prefix like 01,02, to 23
g means hour and it will show hours in 12 hours format without 0 prefix like 1,2, to 12
G means hours and it will show hours in 24 hours format without 0 prefix like 1,2,to 23

To show minutes:
i letter is used to show minutes like 00 to 59

To show seconds
s letter is used to show seconds like 00 to 59

to show meridium
a letter is used to show meridium in small letters like am, pm
A letter is used to show meridium in capital letters like AM, PM

to show country time zone 
e letter si used to show the time zone of country like Asia/Karachi etc

date_default_timezone_set
the function is used to set the time zone of any country
you can search code of timezone from php official website
*/


echo date("h:i:sa e") . "</br>";
date_default_timezone_set("Asia/Karachi");
echo date("h:i:sa e"). "</br>";;

echo date("d/m/Y h:i:sa e") . "</br>";

