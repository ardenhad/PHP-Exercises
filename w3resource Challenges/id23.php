<?php
//Finds most repeating element in an array.(If multiple exists, first key occurence is returned.)
$input = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);

function findMostRepeatingElement($array) {
	$asarr = array_count_values($array);
	$maxValueCount = max($asarr);
	
	return array(array_search($maxValueCount, $asarr), $maxValueCount);
}

$result = findMostRepeatingElement($input);
echo "Most occured value is $result[0] with count of $result[1]";
?>