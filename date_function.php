<?php
/**
date()
the function is used to show the date , date function has four parameters, (day,month,year,week)

day can be denote with different letters like d,j,s
d letter means it will show day date in 01,02 to 31 format.
j letter means it will show day date in 1,2 to 31. j will not add 0 prefix.
S letter means it wil add st,nd,rd, or th with day date like 1st,2nd,3rd, 4th to 31.
z letter means it will show the number of day of the year(365)
t letter means it will count the number of days of month like 30, 31

month can be denote with different letters like F,m,M,n
F letter will show month with full name like January, Feburary to December.
m letter will show month number like 01,02 to 12.
M letter will show month as shortcut like Jan,Feb, to Dec.
n letter will show month like 1,2,3 to 12 it will not add 0 prefix.

Year can be denote with different letters like Y,y
Y letter will show year like 2022,2023 etc
y letter will show year like 22,23 etc
L letter will show this year is leap year or not. and it will show result in 0 and 1. 0 for not a leap year and 1 for a leap year.

week can be denote with different letters like D,I,N,W
D letter will show week day like Monday,Tuesday etc
I letter will show shortcut name of week day like Mon, Tues, Fri etc
N letter will show week day as a numeric like 1,2, to 7. And it starts from Monday(1) and end will be on Sunday(7).
w(small) letter will show week day as a numeric like 1,2 to 7. And it starts from  Sunday(0) and end will be on Saturday(6).
W(capital) letter will show the number of week of the year
*/


echo date("M jS,y"). "</br>";
echo date("d/m/Y"). "</br>";
echo date("FjS,Y"). "</br>";

