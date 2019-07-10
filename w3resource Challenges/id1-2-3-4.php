<?php
//Checks if the input is power of given number.

$input = 3;
$power = 3;

function isPowerOf($number, &$power) {
	$actualPower = $power;
	$isPower = false;
	if ($number === $power)
		$isPower = true;
	while ($number > $power) {
		$power *= $power;
		if ($power === $number) {
			$isPower = true;
		}
	}
	if ($isPower) {
		echo "$number is power of $actualPower";
	} else {
		echo "$number is NOT power of $actualPower";
	}
}

isPowerOf($input, $power)
?>