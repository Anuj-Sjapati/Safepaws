<?php
// Include database connection
include 'db_connect.php'; // Update this path if necessary
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafePaws - Animal Welfare System</title>
    <link rel="stylesheet" href="../CSS/nav.css"> <!--  nav css -->
    <link rel="stylesheet" href="../CSS/signin_login.css"> <!-- form css -->
    <link rel="stylesheet" href="../CSS/footer.css"> <!--footer css-->
    <link rel="stylesheet" href="../CSS/admin.css"> <!--main css-->
    <link rel="icon" type="image/jpg" href="../Images/icon.png"> <!-- favicons tab icon -->
    <script src="https://kit.fontawesome.com/cca1e4bf72.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- Header Section with updated Navigation -->
    <!-- Header Section with updated Navigation -->
    <header>
        <div class="container">
            <nav>
                <!-- Logo Section -->
                <a href="ad.php" class="logo">
                <img src="../Images/OFFICIAL_logoV.1.png" alt="SafePaws Logo" class="logo-img">
                </a>
    
                <!-- Navigation Links -->
                <ul class="nav-links">
                    <li><a href="ad.php">Home</a></li>
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
                <button id="sign-up-button">SignUp / LogIn</button>
            </nav>
        </div>
    </header>

    <!-- Category  -->
        <div class="user-report-section">
        <h1>Select an Information Category</h1>
        <div class="box-container">
            <!-- User Information Box -->
            <div class="info-box">
                <a href="user_info.php">
                    <h2>User Information</h2>
                </a>
            </div>

            <!-- Report Information Box -->
            <div class="info-box">
                <a href="report_info.html">
                    <h2>Report Information</h2>
                </a>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <footer>
        <div class="footer-bottom">
            <p>&copy; 2024 SafePaws. All rights reserved.</p>
        </div>
    </footer>
    <!-- Link to the external JavaScript file -->
    <script src="../Js/ad.js"></script>
</body>
</html>