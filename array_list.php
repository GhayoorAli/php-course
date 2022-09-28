<?php
// initializing arrays, arrays can be start with [] and array() by this two methods.
// $example = ['name1', 'name2']; that is list array.
// $example = ['name1' => 'ali', 'name2' => 'ahmad']; that is map array.

//populating arrays: arrays are not immutable, but it can be change after execution.we can add funrther names in example array by appending array.

// if you are using list array then you can add and it treat as append another element to the last. but if you are map array then you can add by specify the key and override this value or you can add new one.

$name = ['ali','ahmad','fraz'];`
$name[]='kashif';
$nameMap = ['name' =>'ali',
			'age', 12];
$nameMap['status'] = 'single';

print_r($nameMap);