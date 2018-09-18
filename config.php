<?php

// This file opens a connection to the MySQL database.

/*

Following the Tutorial at...

https://www.tutorialrepublic.com/php-tutorial/php-mysql-crud-application.php

Questions: 

1. Define('NAME', 'variable', case-insenstitive-defaultfalse). Is this the same define as in W3 schools? Answer: YES

2. what is mysql_connect() and mysqli_connect_error()?

*/

// Database Credentials
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'demo');

// Connect to MySQL database
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check Connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error() )
	}

?>