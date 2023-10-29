<?php

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'circuit');
define('DB_PASS', '');
define('DB_NAME', 'edu_mentor');


//for MySQLi Conection
$conn = new mysqli("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
