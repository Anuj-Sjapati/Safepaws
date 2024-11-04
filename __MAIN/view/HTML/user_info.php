<?php
// Include database connection
include 'db_connect.php'; // Update this path if necessary
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info - SafePaws</title>
    <link rel="stylesheet" href="../CSS/nav.css"> <!--  nav css -->
    <link rel="stylesheet" href="../CSS/footer.css"> <!--footer css-->
    <link rel="stylesheet" href="../CSS/user_info.css"> <!--main css-->
    <link rel="icon" type="image/jpg" href="../Images/icon.png"> <!-- favicons tab icon -->
    <script src="https://kit.fontawesome.com/cca1e4bf72.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- Header Section with updated Navigation -->
    <header>
        <div class="container">
            <nav>
                <!-- Logo Section -->
                <a href="ad.html" class="logo">
                <img src="../Images/OFFICIAL_logoV.1.png" alt="SafePaws Logo" class="logo-img">
                </a>
    
                <!-- Navigation Links -->
                <ul class="nav-links">
                    <li><a href="ad.html">Home</a></li>
                    <li class="services-dropdown">
                        <a href="#">Services</a>
                        <div class="dropdown-content">
                            <a href="report.html">Report Lost Pet</a>
                            <a href="lost.html">Lost Pets</a>
                            <a href="adopt.html">Adoption</a>
                            <a href="training.html">Training & Grooming</a>
                            <a href="vet.html">Vet Support</a>
                        </div>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="donate.html">Donate</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
    
                <!-- SignUp / LogIn Button -->
                <button id="sign-up-button">Logout</button>
            </nav>
        </div>
    </header>

    <div class="user-info">
        <h1>User Informations</h1>
        <table class="users-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
               
            <tbody>
                <?php
                    // Fetch user information from the database
                    $sql = "SELECT * FROM users"; // Change 'users' to your actual table name
                    $result = mysqli_query($conn, $sql);

                    // Check if the query was successful
                    if (!$result) {
                        die("Database query failed: " . mysqli_error($conn));
                    }

                    // Loop through the results and display each row in the table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>"; // Added 'id' for the ID column
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>"; 
                        echo "<td>
                                <button class='edit-button' data-id='" . $row['id'] . "'>Edit</button>
                                <a href='delete_user.php?id=" . $row['id'] . "' class='delete-button' onclick='return confirmDelete();'>Delete</a>
                                </td>"; 
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Edit User Form -->
    <div id="edit-form" style="display: none;">
    <span class="close-button" onclick="document.getElementById('edit-form').style.display='none'">&times;</span>
    <h2>Edit User Information</h2>
    <form action="edit_user.php" method="post">
        <input type="hidden" name="user_id" id="edit-user-id">
        <label>Username:</label>
        <input type="text" name="username" id="edit-username">
        <label>Email:</label>
        <input type="email" name="email" id="edit-email">
        <label>Phone:</label>
        <input type="text" name="phone" id="edit-phone">
        <label>Password:</label>
        <input type="password" name="password" id="edit-password">
        <button type="submit">Save Changes</button>
    </form>
</div>

<script>
function confirmDelete() {
    return confirm('Are you sure you want to delete this user?'); // Show confirmation dialog
}
</script>



    <!-- footer section -->
    <footer>
        <div class="footer-bottom">
            <p>&copy; 2024 SafePaws. All rights reserved.</p>
        </div>
    </footer>

    <!-- Link to the external JavaScript file -->
    <script src="../Js/edit_user.js"></script>
</body>
</html>