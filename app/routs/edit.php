<?php

get('/(br|en)/edit/([0-9]+)', function($langs, $id){
	require_once "config/langs/{$langs}.php";
    require_once "config/connection.php";
    $sAllAsc = $database->select("todo", "*", [
		"ORDER" => "status ASC",
	]);
    // Select by id
    $sAllbyid = $database->select("todo", "*", [
		"id" => $id
	]);
	require "app/views/edit.php";
});

post('/edit/([0-9]+)', function($id){
	$name 	= $_POST['name'];
    $info 	= $_POST['info'];
    $lang 	= $_POST['lang'];
    require_once "config/connection.php";
	// Updading status
	$database->update("todo", [
		"name" => $name,
		"info" => $info
	], [
		"id" => $id
	]);
	// Redirect
	header("Location: ./../{$lang}");
});