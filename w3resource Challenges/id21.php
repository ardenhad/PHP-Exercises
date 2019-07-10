<?php
//Checks if the inputs are an anagram
$in1 = "anagram";
$in2 = "aangmar";

function isAnagram($word1, $word2) {
	$arr1 = str_split($word1);
	$arr2 = str_split($word2);
	if (count($arr1) === count($arr2) && count(array_diff($arr1, $arr2)) === 0)
		echo "It is an anagram!";
	else 
		echo "It is not an anagram";
}

isAnagram($in1, $in2);
?>