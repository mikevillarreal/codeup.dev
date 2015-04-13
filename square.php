<?php

require_once 'rectangle.php';

class Square extends rectangle
{
	public function perimeter()
	{
		return $this->width * 4;
	}


}
