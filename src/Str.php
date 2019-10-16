<?php 

namespace Styde;

class Str
{
	public static function studly($value)
	{
		$result = ucwords(str_replace('_','',$value));

		return $result;
	}
}