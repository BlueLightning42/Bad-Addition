<?php
set_time_limit(60*60*24); // run for maximal a day
function shutdown()
{
	if(!$GLOBALS['finished']) {
		echo 'Sorry, we could not finish this within a day. Make sure to remove fractions. Not using negative numbers also greatly increases speed.', PHP_EOL;
		echo 'Also note that this program only supports additions from -' . PHP_INT_MAX . ' to +' . PHP_INT_MAX . PHP_EOL;
	}
}
register_shutdown_function('shutdown');

function add($a = 0, $b = 0, $c = 0) 
{
	$GLOBALS['finished'] = false;
	
	$answer = 0;
	$numbers = array();
	array_push($numbers, $a);
	array_push($numbers, $b);
	array_push($numbers, $c);
		
	foreach($numbers as $number) {
		for($i = 0; $i != $number; $i++) {
			++$answer;
			
			if($answer == PHP_INT_MAX) { // must be a negative number then
				for($i = 0; $i != $number; $i--) {
					--$answer;
					
					if(abs($answer) == PHP_INT_MAX) { // ok, then it was a fraction
						exit('ERROR! This program does not support fractions. Please multiply the number yourself to get rid of it or truncate it yourself.');
					}
				}
			}
		}
	}
	
	$GLOBALS['finished'] = true;

	return $answer;
}

echo add(1,2,3) . PHP_EOL; // 6
echo add(0,5,5) . PHP_EOL; // 10
# echo add(10,10,-20) . PHP_EOL; // 0 -- takes very long, depending on PHP_INT_MAX
# echo add(10,5,PHP_INT_MAX+1) . PHP_EOL; // will never finish and trigger the time limit
