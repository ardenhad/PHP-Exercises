<?php
//Finds Geometric expression. (Geometric Expression: Division of all consecutive numbers must be equal.)
$array = array(1, 5, 25, 125, 625);

function isGeometricExpression($array) {
	$division = $array[1] / $array[0];
	$isGeometricExpression = true;
	for ($i = 2; $i < count($array); $i++) {
		if ($array[$i] / $array[$i-1] !== $division) {
			echo "There is no geometric expression.";
			$isGeometricExpression = false;
			break;
		}
	}
	if ($isGeometricExpression)
		echo "Geometric expression with division of $division";
}

isGeometricExpression($array);
?>