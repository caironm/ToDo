<?php

ini_set('display_errors', 1);
error_reporting(~0);

// Define the region
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

// Load the requeriments
require 'config/base.php';
require 'config/functions.php';
require 'vendor/autoload.php';
define('URL', 'http://localhost/start/todo/'); 

// Load the routes
require 'app/routs/home.php';
require 'app/routs/new.php';
require 'app/routs/update.php';
require 'app/routs/edit.php';
require 'app/routs/delet.php';

// Checking if a route has been matched
if (!Base::$routeProccessed) {
    require "app/views/404.php";
}
