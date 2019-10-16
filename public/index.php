<?php 

namespace Styde;

require "../vendor/autoload.php";


$user = new User([
	'first_name' => 'Walter',
	'last_name'	 => 'White',
	'birthDate' => '20/12/1995'
]);

echo "{$user->full_name} tiene {$user->age} años ";

