<?php

class Rectangle
{
	public $height;
	public $width;

	public function _construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;

	}

	public function area(){
		return ($this->height * $this->width) . PHP_EOL;
	}

}

$rectangle = new Rectangle();
$rectangle->height = 2;
$rectangle->width = 5;
echo $rectangle->area(); // "25"