<?php
//Checks if the input is power of given number.

$input = 16;
$power = 3;

function isPowerOf($number, &$power) {
	$actualPower = $power;
	$isPower = false;
	while ($number > ($power / 2)) {
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