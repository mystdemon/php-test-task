<?php

function reverseString($str)
{
	$temp = '';
	$strLength = 0;
	while (@$str[$strLength]) {
		$strLength++;
	}
	for ($i = 0; $i < $strLength / 2; $i++) {
		$temp = $str[$i];
		$str[$i] = $str[$strLength - 1 - $i];
		$str[$strLength - 1 - $i] = $temp;
	}
	return $str;
}