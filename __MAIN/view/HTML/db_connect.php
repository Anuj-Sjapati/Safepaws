<?php
// Database connection parameters
$host = 'localhost'; // Your database host
$username = 'root'; // Your database username
$password = ''; // Your database password
$dbname = 'safepaws'; // Your database name

// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database
if (!$conn->select_db($dbname)) {
    die("Database selection failed: " . $conn->error);
}

// Your additional code can go here
?>
