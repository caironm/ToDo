<?php

post('/new', function(){
    $name 	= $_POST['name'];
    $info 	= $_POST['info'];
    $status = $_POST['status'];
    require_once "config/connection.php";
    // Insert
    $database->insert("todo", [
		"name" 		=> $name,
		"info" 		=> $info,
		"status" 	=> $status
	]);
    // Redirect
	header("Location: ./");
});