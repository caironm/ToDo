<?php

get('/update/status/([0-9]+)', function($id){
    require_once "config/connection.php";
    // Consult status by id
    $status = $database->select("todo", "status", [
		"id" => $id
	]);

    // Invert the value of status
	if ($status['0'] == 0) {
		$newStatus = 1;
	}else
	{
		$newStatus = 0;
	}

	// Updading status
	$database->update("todo", [
		"status" => $newStatus
	], [
		"id" => $id
	]);

	// Redirect
	header("Location: ./../../");

});