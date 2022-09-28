<?php
/*
extract()
the function is used to convert the every keys of associated arrays into variables. extract() function will extract the key and convert them into variables
extract(array,extract_rules,prefix);
extract_rules:
php has four extract rules
1) EXTR_OVERWRITE (this will overwrite the key variable with the outside variable of same name.)
2) EXTR_SKIP (this will skip the array key variable and take the outside variable.)
3) EXTR_PREFIX_SAME (if you want to use both variables , then you need to put any prefix as thrid parameter and prefix could be any string and when you want to call the array variable the call with prefix like $test_a and without prefix it will call the outside variable)
4) EXTR_PREFIX_ALL (this function adds the prefix with all keys of array, by use this you need to call key variables with prefix)
*/
$a = "rangerover";
$array = ['a'=>'car','b'=>'jeep','c'=>'bike'];

// extract($array,EXTR_PREFIX_SAME, 'demo');

// echo "value of a with prefix:".$demo_a;
// echo "value of a:".$a;

// extract($array,EXTR_PREFIX_ALL, 'demo');

// echo "value of b:".$demo_b;

// echo "value of c:".$demo_c;

/*
compact()
the function is used to change the variables into keys of associative array, pass more the variables name in string form and it will create new associative array. simple variables will pass in string form and you can also pass array variables but it will pass with $ sign.
*/

$car = 'rangerover';
$cruise = 'titanic';
$jet = 'F16';
$php = 'php';
$wordpress = 'wordpress';

$arrayVar = ['php','wordpress'];

$new = compact("car","cruise","jet", $arrayVar);
echo "<pre>";
print_r($new);
