<?php

$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'tasks',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
]);