<?php

function fixEmoticons($str)
{
	$temp = '';
	$result = '';
	for ($i = 0; $i < strlen($str); $i++) {
		if ($temp === ')' || $temp === '(') {
			if($str[$i] != $temp) {
				$result .= $str[$i];
			}
		} else {
			$result .= $str[$i];
		}
		$temp = $str[$i];
	}
	return $result;
}