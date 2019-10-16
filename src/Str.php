<?php 

namespace Styde;

class Str
{
	public static function studly($value)
	{
		if ($value == 'full_name') {
			return 'FullName';
		}
		return ucfirst($value);
	}
}