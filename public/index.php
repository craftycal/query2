<?php

//session start

require 'vendor/autoload.php';
require 'app/controllers/PageController.php';

// define the file root of the parent folder
define( 'APPROOT', dirname(__FILE__) . '/' );

// location the config file
require (APPROOT . '../confin.inc.php');
// connect to the database
$database  = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// test connection
if ($database->connect_error) {
    die("Connection failed: " . $conn->connect_error);


//get the page request
$page = isset($_GET['page']) ? $_GET['page'] : 'landing';

//Run the switch

switch ($page) {

	case 'landing':
		require 'app/controllers/LandingController.php';
		$controller = new LandingController($dbc);
	break;

	case 'login':
		require 'app/controllers/LoginController.php';
		$controller = new LoginController($dbc);
	break;

}


$controller->buildHTML();

}
