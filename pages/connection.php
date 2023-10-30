<?php
// Database connection parameters
$servername = "localhost";  // Replace with your actual database server name or IP address
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password
$db = "discussion_forum";   // Replace with the name of your database

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $db);

// Check the connection
if (!$conn) {
    // If the connection fails, display an error message and terminate the script
    die("Connection failed: " . mysqli_connect_error());
}

// If the connection is successful, you can perform database operations here

// Close the database connection when you're done
// mysqli_close($conn);

// It's a good practice to close the connection when you're finished using it, but you can do this later in your code when necessary.
?>
