<?php
include 'db_connect.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $userId = $_GET['id']; // Get the user ID from the query string

    // Prepare the SQL statement to delete the user
    $sql = "DELETE FROM reports WHERE id = $userId"; // Change 'report id' to your actual table name

    // Execute the delete query
    if (mysqli_query($conn, $sql)) {
        header("Location: report_info.php"); 
    } else {
        echo "Error deleting user: " . mysqli_error($conn); // Error message
    }

    mysqli_close($conn); // Close the database connection
}
?>
