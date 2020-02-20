<?php

function arraySum($array)
{
	$sum = 0;
	foreach ($array as $var) {
		if (is_array($var)) {
			$sum += arraySum($var);
		} else {
			$sum += $var;
		}
	}
	return $sum;
}