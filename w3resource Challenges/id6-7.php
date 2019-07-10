<?php
//Returns subArrays of sum of x consecutive numbers equal to target.

$array = array(-1, 41, 1, 2, -1, -1);
$count = 3; //Count of consecutive numbers.
$target = 44;

function sumOfXConsecutive($array, $x, $target) {
	for ($i = 0; $i < (count($array) - ($x - 1)); $i++) {
		$sumOfNums = 0;
		$subArray = array();
		
		for ($j = 0; $j < $x; $j++) {
			$sumOfNums += $array[$i + $j];
			array_push($subArray, $array[$i + $j]);
		}
		
		if ($sumOfNums === $target) {
			print_r($subArray);
			echo "<br>";
		}
	}
}

sumOfXConsecutive($array, $count, $target);
?>