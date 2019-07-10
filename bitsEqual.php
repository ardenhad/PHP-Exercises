<?php
//Checks if value's 2 bits are equal(Min 8 digit)
$decimalValue = 1142442;
$in1 = 1;
$in2 = 2;

function bitsEqual($value, $index1, $index2) {
	$binValue = strval(decbin($value));
	$array = str_split($binValue);
	while (count($array) < 8) {
		$binValue = "0" . $binValue;
		array_splice($array, 1, 0, 0);
		
	}
	echo "Binarised Number: " .  $binValue . "<br>"; 
	if ($array[$index1] === $array[$index2]) {
		echo "True";
	} else {
		echo "False";
	}
}

bitsEqual($decimalValue, $in1, $in2);



?>