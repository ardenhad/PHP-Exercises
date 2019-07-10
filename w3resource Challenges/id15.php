<?php
//Finds arithmetic expression. (Arithmetic Expression: Difference of all consecutive numbers must be equal.)
$array = array(4, 8, 12, 16);

function isArithmeticExpression($array) {
	$difference = $array[1] - $array[0];
	$isArithmeticExpression = true;
	for ($i = 2; $i < count($array); $i++) {
		if ($array[$i] - $array[$i-1] !== $difference) {
			echo "There is no arithmetic expression.";
			$isArithmeticExpression = false;
			break;
		}
	}
	if ($isArithmeticExpression)
		echo "Arithmetic expression with difference of $difference";
}

isArithmeticExpression($array);
?>