<?php
/*
According to Wikipedia the Collatz conjecture is a conjecture in mathematics named after Lothar Collatz, who first proposed it in 1937. The conjecture is also known as the 3n + 1 conjecture. 
The conjecture can be summarized as follows. Take any positive integer n. If n is even, divide it by 2 to get n / 2. If n is odd, multiply it by 3 and add 1 to obtain 3n + 1. Repeat the process (which has been called "Half Or Triple Plus One") indefinitely. The conjecture is that no matter what number you start with, you will always eventually reach 1.
*/

$input = 12;

function collatzConjencture($number) {
	echo $number;
	while ($number !== 1) {
		if (isEvenNumber($number)) 
			evenNumberProcess($number);
		else 
			oddNumberProcess($number);
		echo "<br>" . $number;
	}
}

function isEvenNumber($number) {
	return ($number % 2 === 0);
}

function oddNumberProcess(&$number) {
	return $number = 3 * $number + 1;
}

function evenNumberProcess(&$number) {
	return $number /= 2;
}

collatzConjencture($input);
?>