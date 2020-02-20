<?php

function getUniqueWords($text)
{
	$result = array();
	$text = strtolower($text);
	$text = str_replace("\"", "", $text);
	$text = trim(preg_replace('/\s+/', ' ', $text));
	$text = explode(' ', $text);
	foreach ($text as $word) {
		$word = rtrim($word, ",.;:");
		if (!array_key_exists($word, $result)) {
			$result += [$word => TRUE];
		} else {
			$result[$word] = FALSE;
		}
	}
	while ($key = array_search(FALSE, $result)) {
       unset($result[$key]);
	}
	return array_keys($result);
}