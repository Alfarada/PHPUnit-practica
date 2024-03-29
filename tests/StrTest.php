<?php 

use Styde\Str;

class StrTest extends PHPUnit\Framework\TestCase 
{
	public function test_studly_method_convert_strings()
	{
		$this->assertSame('Name', Str::studly('name'),
		 'Llamar a la clase Str::studly con name no retorna el valor esperado Name');
		
		$this->assertSame('FullName', Str::studly('full_name'),  
		'Llamar a la clase Str::studly con first_name no retorna el valor esperado FirstName');

		$this->assertSame('BirthDate', Str::studly('birth_date'),  
		'Llamar a la clase Str::studly con birth_date no retorna el valor esperado BirthDate');
	}
}