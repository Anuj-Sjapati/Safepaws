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

// Check if the login form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $loginEmail = $_POST['login-email'];   // Email entered in the form
    $loginPassword = $_POST['login-password']; // Password entered in the form

    // Prepare the SQL query to find the user by email
    $sql = "SELECT upassword, username FROM users WHERE email = '$loginEmail'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if a user with that email exists
    if ($result->num_rows > 0) {
        // Fetch the user's data
        $row = $result->fetch_assoc(); // Get the user data
        $hashedPassword = $row['upassword']; // Get the stored password
        $username = $row['username']; // Get the username

        // Check if the entered password matches the stored password
        if (password_verify($loginPassword, $hashedPassword)) {
            // Password is correct, login the user
            // $_SESSION['username'] = $username; // Store the username in the session
            // echo "Login successful! Welcome, " . $username;
            // Optionally redirect to another page
            header("Location: ad.php");
            exit();
        } else {
            // Password is incorrect
            echo "Invalid password. Please try again.";
        }
    } else {
        // No user found with that email
        echo "No user found with that email.";
    }

    // Close the database connection
    $conn->close();
}
?>
