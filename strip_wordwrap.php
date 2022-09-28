<?php
/**
strip_tag()
the function is used to remove the html elements and tags from a string.
strip_tags(string,allow)
allow -> enter the element/tags which you dont want to remove.

wordwrap()
the function is used to break the string after a specific length of word.
wordwrap(string, length, element to break string, cut)
by default cut is false means it will not breeak statement.
 */

$string = "This course will <u>teach</u> you <b>Web Development</b> with <i>PHP</i>";


 
 echo strip_tags($string,"<b>"). "</br>";

echo wordwrap($string,3,",",true);