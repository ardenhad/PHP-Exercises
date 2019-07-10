<?php 
//Returns length of last word.

$input = "PHP Exercises";

function lengthOfLastWord($string) {
	$arr = explode(" ", $string);
	return strlen($arr[count($arr) - 1]);
}

echo lengthOfLastWord($input);
?>