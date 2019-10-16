<?php 

namespace Styde;

require "../vendor/autoload.php";


$user = new User([
	'name' 		=> 'Alfredo Yepez',
	'birthDate' => '20/12/1995'
]);

echo "{$user->name} tiene {$user->age} años ";

