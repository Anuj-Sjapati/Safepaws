<?php
session_start(); // Start the session
include 'db_connect.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered email and password from the form
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];
    
    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Direct comparison of plain text password
        if ($password == $row['password']) { // No hashing
            $_SESSION['login-email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            
            // Redirect based on user role
            if ($row['username'] == 'admin') {
                header("Location: admin.php");
            } else { 
                // header("Location: ad.php");
                echo "Login Successful";
            }
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with this email.";
        // header("Location: login.php?error=Incorrect password");
        //     exit();
    }
}

// Close the database connection
mysqli_close($conn);
?>
