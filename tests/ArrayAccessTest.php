<?php 

use Styde\Model;

class ModelArrayAccessTest extends PHPUnit\Framework\TestCase
{
	public function test_offset_get()
	{
		$user = new UserTest([
			'name' => 'Walter White',
			'email' => 'walter@gmail.com',
			'website' => 'https//walter.net'
		]);

		$this->assertSame('Walter White', $user['name']);
		$this->assertSame('walter@gmail.com', $user['email']);
		$this->assertSame('https//walter.net', $user['website']);
	}

	public function test_offset_exists()
	{
		$user = new UserTest([
			'name' => 'Walter White'
		]);

		$this->assertTrue(isset($user['name']));//Devuelve true si $user['name'] esta definida en obj UserTest.
		$this->assertFalse(empty($user['name']));//Devuelve falso si la propiedad $user['name'] está vacia. 
		$this->assertFalse(isset($user['email']));//Devuelve falso si la propiedad email está definida.
		$this->assertTrue(empty($user['email']));// Devuelve true si la propiedad email está vacia.
	}

	/** @test **/
	public function it_set_and_get_values_with_array_access()
	{
		$user = new UserTest;

		$user['name'] = 'Walter White';

		$this->assertSame('Walter White', $user['name']);
	}

	/** @test **/
	public function it_can_set_and_unset_properties_with_array_access()
	{
		$user = new UserTest;

		$user['name'] = 'Walter White';

		$this->assertTrue(isset($user['name']));

		unset($user['name']);

		$this->assertFalse(isset($user['name']));
	}

}

class UserTest extends Model implements ArrayAccess 
{
	public function offsetExists($offset)
	{
		return isset($this->$offset);
	}

	public function offsetGet($offset)
	{
		return $this->$offset;
	}

	public function offsetSet($offset, $value)
	{
		$this->$offset = $value;
	}

	public function offsetUnset($offset)
	{
		unset($this->$offset);
	}
}