<?php

// I don't know how to do this with objects

class MyCollection
{
	private $objects = array();

	public function add($key, $data = NULL)
	{
		$this->objects += [$key => $data];
	}

	public function remove($key)
	{
		unset($this->objects[$key]);
	}

	public function getHash($object)
	{
		return md5($this->objects[$object]);
	}

	public function current()
	{
		return array_key_last($this->objects);
	}

	public function getObjectList()
	{
		return $this->objects;
	}

	public function check($object)
	{
		return array_key_exists($object, $this->objects);
	}

	public static function removeAll($collection)
	{
		array_splice($collection->objects, 0);
	}
}