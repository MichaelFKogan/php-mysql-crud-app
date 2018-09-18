<!DOCTYPE html>

<html lang="en">

		<meta charset-"UTF-8">

		<title>Document</title>

<head>
	<meta charset-"UTF-8">
	<title></title>
</head>

<body>


<?php 
	echo '<h2>W3 Schools: MySQL Database Connection</h2>';

// MYSQLI: OBJECT-ORIENTED CONNECTION EXAMPLE
// ---------------------------------------------
// CONNECTING TO MYSQL
$servername = "127.0.0.1:3306";
$username = "root";
$password = "********";
$dbname = "myDB";

// CREATE CONNECTION
$conn = new mysqli($servername, $username, $password, $dbname);

// CHECK CONNECTION
	if($conn->connect_error){
		die("<p>Connection failed: " . $conn->connect_error);
	}

	echo "<p>Connected Successfully</p>";
// ---------------------------------------------


// CREATE A DATABASE
// ---------------------------------------------
	$sql = "CREATE DATABASE myDB";

	// Check for connection and errors
	if($conn->query($sql) === TRUE){
		echo "<p>Database created successfully</p>";
	}
		else{
			echo "<p>Error creating database: " . $conn->error;
		}
// ---------------------------------------------

// CREATE A TABLE: MyGuests
// ---------------------------------------------
	$sql = "CREATE TABLE MyGuests(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";

	// Check for connection and errors
		if($conn->query($sql) === TRUE){
		echo "<p>Table MyGuests created successfully</p>";
	}
		else{
			echo "<p>Error creating database: " . $conn->error;
		}
// ---------------------------------------------

// INSERT DATA INTO TABLE
// ---------------------------------------------
	$sql = "CREATE TABLE MyGuests(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";

	// Check for connection and errors
		if($conn->query($sql) === TRUE){
		echo "<p>Table MyGuests created successfully</p>";
	}
		else{
			echo "<p>Error creating database: " . $conn->error;
		}
// ---------------------------------------------

// GET ID OF LAST INSERTED RECORD
// ---------------------------------------------

// ---------------------------------------------

// INSERT MULTIPLE
// ---------------------------------------------

// ---------------------------------------------

// PREPARED
// ---------------------------------------------

// ---------------------------------------------

// SELECT DATA
// ---------------------------------------------

// ---------------------------------------------

// DELETE DATA
// ---------------------------------------------

// ---------------------------------------------

// UPDATE DATA
// ---------------------------------------------

// ---------------------------------------------

// LIMIT DATA
// ---------------------------------------------

// ---------------------------------------------


?>

</body>

</html>