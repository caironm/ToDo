<?php

get('/', function(){
    header("location: ./br");
});

get('/(br|en)', function($langs){
    require_once "config/langs/{$langs}.php";
	require_once "config/connection.php";
	$sAllAsc = $database->select("todo", "*", [
		"ORDER" => "status ASC",
	]);
    require "app/views/home.php";
});