<?php

return [

	
	'connections' => [

		'mysql' => [
			'host'      => 'localhost',
			'database'  => 'katzninja',
			'username'  => 'root',
			'password'  => getenv('DB_PASSWORD'),
		]

	]

];