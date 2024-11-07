<?php
session_start();
// Include database connection file
include 'db_connect.php';

// Check if the request method is POST (form submitted)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect data from the form inputs
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL statement to check if the user exists and retrieve the stored password
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    
    // Prepare the SQL statement for execution
    $stmt = $conn->prepare($sql);
    
    // Bind the form values to the SQL statement
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    $stmt->execute();
    
    // Get the result of the query
    $result = $stmt->get_result();

    // Check if any row matches (valid login)
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Set the username in the session
        $_SESSION['username'] = $user['username'];
        
        // Check if the user is an admin
        if ($user['username'] == 'safepawsadmin' && $user['email'] == 'safepawsadmin@gmail.com') {
            $_SESSION['is_admin'] = true; //
            echo "Redirecting to admin page";  // Indicate admin login
        } else {
            echo "Login successful!";  // Indicate successful login for a normal user
        }
    } else {
        echo "Invalid email or password";  // Error message for failed login
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>
