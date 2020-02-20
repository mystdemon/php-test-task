<?php

function getLuckyNumbers()
{
	$result = array();
	for ($i = 0; $i <= 999999; $i++) {
		$str = sprintf("%'.06s\n", (string)$i);
		$firstHalfSum = $str[0] + $str[1] + $str[2];
		$secondHalfSum = $str[3] + $str[4] + $str[5];
		if ($firstHalfSum == $secondHalfSum) {
			$result[] = $str;
		}
	}
	return $result;
}