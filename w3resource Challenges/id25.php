<?php
//Find values that has a count of odd number of times.

$input1 = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
$input2 = array("apple", "apple", "banana", "strawberry", "strawberry", "blueberry","blueberry", "blueberry", "blueberry");
function createArrayOfOccurences($array) {
	//Create an associative array. oldArrayValue -> count
	$asarr = [];
	foreach ($array as $x) {
		if (!array_key_exists($x, $asarr)) {
			$asarr[$x] = 1;
		} else {
			$asarr[$x]++;
		}
	}
	return $asarr;
}

//Check our new associative array's values, if they are even, remove them from original array.
function removeEvenManyOccurences(&$asarr) {
	foreach ($asarr as $x => $y) {
		if ($y % 2 === 0)
			unset($asarr[$x]);
	}
}

$occurences1 = createArrayOfOccurences($input1);
print_r($occurences1);
echo "<br>";
removeEvenManyOccurences($occurences1);
print_r($occurences1);
echo "<br>";

$occurences2 = createArrayOfOccurences($input2);
print_r($occurences2);
echo "<br>";
removeEvenManyOccurences($occurences2);
print_r($occurences2);

?>