<?php
// https://www.codewars.com/kata/58acfe4ae0201e1708000075

function invite_more_women(array $a): bool {
	$woman = count(array_filter($a, fn($x) => $x == -1));
	$man = count(array_filter($a, fn($x) => $x == 1));
	return $woman < $man ;
}