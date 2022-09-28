<?php
/*
compare functions will give three results 0, negative(-1), positive (1).
when the both strings are equal then it would be 0, and when the string1 is greater then string2 then the result will positive(1), and when the string2 is greater then string1 then the result will negative(-1).

strcmp()
the function is used to compare two strings, this function is case-sensitive.

strcasecmp()
the function is used to compare two strings, this function is case-insensitive.
strcasecmp(string1,string2)

strncmp()
the function is used to compare specific length of two strings, this function is case-sensitive.

strncasecmp()
the function is used to compare specific length of two strings, this function is case-insensitive.
strcasecmp(string1,string2,length)

substr_compare()
the function is used to compare specific part of two strings.
substr_compare(string1,string2,start(from where you want to start compare),length(upto),case)
by default it is case-sensitive(false) and when you will put true then it will work as a case-insensitive function. 

similar_text()
the function is used to compare the characters and spaces of two strings.
similar_text(string1,string2)
it will give result in percent. means how much percents strings are matching.
*/

$s1 = "this istring one";
$s2 = "this is string one";

//echo strcmp($s1, $s2);
//echo strncmp($s1, $s2,8);