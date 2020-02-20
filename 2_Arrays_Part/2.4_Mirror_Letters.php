<?php

function mirrorLetters($str)
{
	$temp;
	for ($i = 0; $i < strlen($str); $i++) {
		if (ctype_alpha($str[$i])) {
			if (ctype_upper($str[$i])) {
				$temp = ord($str[$i]) - ord('A');
				$str[$i] = chr(ord('Z') - $temp);
			} else {
				$temp = ord($str[$i]) - ord('a');
				$str[$i] = chr(ord('z') - $temp);
			}
		}
	}
	return $str;
}
