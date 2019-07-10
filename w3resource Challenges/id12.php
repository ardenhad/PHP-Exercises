<?php
//Finds a single digit result by continuously taking sum of digits of given number.(If result is multiple digits, reattempts till finds a single digit.)
$number = 48;

function findSingleDigit($number) {
	$arrNumber = str_split(strval($number));
	$sumOfDigits = 0;
	forEach($arrNumber as $x) {
		$sumOfDigits += $x;
	}
	if ($sumOfDigits < 10) {
		echo $sumOfDigits;
	} else {
		findSingleDigit($sumOfDigits);
	}
}

findSingleDigit($number);


?>