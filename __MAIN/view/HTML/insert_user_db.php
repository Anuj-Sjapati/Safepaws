<?php
session_start();  // Start the session

// Database connection details
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "safepaws";

// Create connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data (the values entered in the signup form)
    $username = $_POST['username'];     // Username entered in the form
    $email = $_POST['email'];           // Email entered in the form
    $phone = $_POST['phone'];           // Phone number entered in the form
    $password = $_POST['password'];     // Password entered in the form

    // Write the SQL query to insert the form data into the 'users' table
    $sql = "INSERT INTO users (username, email, phone, upassword) VALUES ('$username', '$email', '$phone', '$password')";

    // Check if the query ran successfully
    if ($conn->query($sql) === TRUE) {
        // Save the username to the session
        $_SESSION['username'] = $username;
        header("Location: ad.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
