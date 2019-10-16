<?php 

require "../vendor/autoload.php";

use Styde\Str;

if (Str::studly('name') != 'Name') {
	exit("Llamar a la clase Str::studly con name no retorna el valor esperado Name");
}

if (Str::studly('full_name') != 'FullName') {
	exit("Llamar a la clase Str::studly con full_name no retorna el valor esperado FullName");
}

if (Str::studly('birth_date') != 'BirthDate') {
	exit("Llamar a la clase Str::studly con birth_date no retorna el valor esperado BirthDate");
}

exit('Todo salió bien');

