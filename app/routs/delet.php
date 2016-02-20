<?php

get('/(br|en)/delet/([0-9]+)', function($langs, $id){
	require_once "config/langs/{$langs}.php";
	require_once "config/connection.php";
    $database->delete("todo", [
		"AND" => [
			"id" => $id
			]
	]);
    // Redirect
	header("Location: ./../../{$langs}");
});