<?php 

use Styde\Model;

class ArrayAccessTest extends PHPUnit\Framework\TestCase
{
	public function test_a_model_has_array_access()
	{
		$user = [
			'name' => 'Walter White',
			'email' => 'walter@gmail.com',
			'website' => 'https//walter.net'
		];

		$this->assertSame('Walter White', $user['name']);
	}

}

class UserTest extends Model 
{

}