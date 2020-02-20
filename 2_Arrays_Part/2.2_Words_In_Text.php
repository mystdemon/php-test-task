<?php

function getWords($text)
{
	$result = array();
	$text = strtolower($text);
	$text = str_replace("\"", "", $text);
	$text = trim(preg_replace('/\s+/', ' ', $text));
	$text = explode(' ', $text);
	foreach ($text as $word) {
		$word = rtrim($word, ",.;:");
		if (array_key_exists($word, $result)) {
			$result[$word]++;
		} else {
			$result += [$word => 1];
		}
	}
	return $result;
}