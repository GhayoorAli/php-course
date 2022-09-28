<?php
/**
htmlentites()
the function is used to encode the html characters into html entites. it helps to prevent data from hackers.
htmlentities($string,flags)
by default it does not enccode the single quote into html entities.

htmlspecialchars()
the function is same htmlentities

htmlspecialchars_decode()
it is specialy used to deocde htmlspecialchars() 

html_entity_decode()
the function is used to decode the html entities into its original form.

get_html_translation_table()
the function is used to get the list of all the encode able entities of html
pass HTML_SPECIALCHARS, HTML_ENTITIES in the function.
get_html_translation_table(HTML_SPECIALCHARS)
get_html_translation_table(HTML_ENTITIES)
*/

$string = "<a>https://www.'google'.com</a>";

$one = htmlentities($string, ENT_QUOTES);

$two = htmlspecialchars($string, ENT_QUOTES);

 echo html_entity_decode($new);

 echo htmlspecialchars_decode($two);