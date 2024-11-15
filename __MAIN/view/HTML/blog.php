<?php

session_start(); // Start the session

// Include database connection
include 'db_connect.php'; // Update this path if necessary
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - SafePaws</title>
    <link rel="stylesheet" href="../CSS/nav.css"> <!--  nav css -->
    <link rel="stylesheet" href="../CSS/signin_login.css"> <!-- form css -->
    <link rel="stylesheet" href="../CSS/footer.css"> <!--footer css-->
    <link rel="stylesheet" href="../CSS/blog.css"> <!--blog css-->
    <link rel="icon" type="imge/jpg" href="../Images/icon.png"> <!-- favicons tab icon -->
    <script src="https://kit.fontawesome.com/cca1e4bf72.js" crossorigin="anonymous"></script>
</head>
<body>
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
                            <a href="report.php">Report Lost Pet</a>
                            <a href="lost.php">Lost Pets</a>
                            <a href="adopt.php">Adoption</a>
                            <a href="training.php">Training & Grooming</a>
                            <a href="vet.php">Vet Support</a>
                        </div>
                    </li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="donate.php">Donate</a></li>
                    <li><a href="Aboutus.php">About us</a></li>
                </ul>
    
                    <!-- User Greeting / Logout Button -->
                    <?php if (isset($_SESSION['username'])): ?>
                        <div class="user-info">
                            <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                            
                            <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
                                <a href="admin.php" class="admin-link">Admin Page</a>
                            <?php endif; ?>

                            <a href="logout.php" class="logout-button">Logout</a>
                        </div>
                    <?php else: ?>
                        <button id="sign-up-button">SignUp / LogIn</button>
                    <?php endif; ?>
                
                <!-- SignUp / LogIn Button -->
                <!-- <button id="sign-up-button">SignUp / LogIn</button> -->
            </nav>
        </div>
    </header>

 <!-- Blog Content -->
 <main>
      
      <!-- Centered Blog Entries Section -->
      <center>
      <section class="blog-entries">
          <article>
          <h2>The Importance of Pet Adoption</h2> 
              <p>Adopting a pet can bring joy, companionship, and fulfillment into your life. When you choose to adopt, you're not only giving an animal a loving home, but you're also helping reduce overcrowding in shelters and fighting against animal homelessness. Adopting provides animals with a chance at a new life while allowing you to experience the unique bond that comes with rescuing an animal in need. Learn more about how adoption changes lives for both you and your pet.</p>
          </article>
          
          <article>
                <h2>Pet Grooming Essentials</h2> 
              <p>Regular grooming is essential for maintaining a pet’s health and happiness. From brushing fur and trimming nails to checking for signs of health issues, grooming plays a major role in ensuring a comfortable life for your pet. In this blog, we dive into essential grooming practices, how to get started with at-home grooming, and tips for knowing when to seek professional grooming. Good grooming habits also offer the chance for bonding, helping your pet feel loved and cared for.</p>
          </article>
          
          <article>
              <h2>Understanding Pet Behavior</h2>
              <p>Pets communicate in unique ways, and understanding their behavior can lead to a more harmonious relationship. This blog covers common pet behaviors, what they mean, and how you can respond in ways that meet your pet's needs. From interpreting body language to identifying signs of anxiety or happiness, understanding your pet’s behavior can help you better address their needs and build a stronger bond.</p>
          </article>
      </section>
  
      <!-- Resource Links Section -->
      <section class="resource-links">
          <div class="resource-card">
              <a href="https://www.pawlicy.com/blog/pet-care/" target="_blank">
                  <img src="../Images/pet-care.jpg" alt="Pet Care Blog" class="resource-image">
                  <h3>Pet Care Tips</h3>
                  <p>Essential advice and guidance for responsible pet care. Get insights into nutrition, exercise, and overall well-being for pets of all ages.</p>
                  <p class="resource-link">More on Pet Care</p>
              </a>
          </div>
          
          <div class="resource-card">
              <a href="https://www.pawlicy.com/blog/vet/" target="_blank">
                  <img src="../Images/vet-support.jpg" alt="Vet Support Blog" class="resource-image">
                  <h3>Veterinary Support</h3>
                  <p>Learn about the importance of regular veterinary care, including vaccinations, check-ups, and emergency care tips.</p>
                  <p class="resource-link">More on Vet Support</p>
              </a>
          </div>
          
          <div class="resource-card">
              <a href="https://www.pawlicy.com/blog/" target="_blank">
                  <img src="../Images/blog.jpg" alt="Pet Blog" class="resource-image">
                  <h3>More Blogs</h3>
                  <p>Explore a wide range of pet-related topics, from training tips to lifestyle guides, and discover how to enhance life with your pet.</p>
                  <p class="resource-link">More Blogs</p>
              </a>
          </div>
      </section>
  </main>
  </center> 

    <!-- footer section -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="ad.php">Home</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            <div class="footer-contact">
                <h3>Contact Information</h3>
                <p>Address: Kathmandu, Nepal</p>
                <p>Phone: (+977) 9812345678 </p>
                <p>Email: <a href="mailto:#">info@safepaws.com</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 SafePaws. All rights reserved.</p>
        </div>
    </footer>

 <!-- Signup Popup Modal -->
 <div id="signup-modal" class="modal hidden">
        <div class="modal-content">
            <span id="close-modal" class="close">&times;</span>
            <div id="signup-form-container" class="form-container">
                <h2 class="signuph2">Sign Up</h2>
                <form id="signup-form" action="signup.php" method="POST">
                    <div>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="tel" id="phone" name="phone" placeholder="Phone Number" minlength="10" maxlength="10" required>
                    </div>
                    <div>
                        <input type="password" id="password" name="upassword" placeholder="Password" required>
                    </div>
                    <div>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                    </div>
                    <div id="password-error" class="error-message"></div>
                    <div>
                        <input type="submit" value="Signup">
                    </div>
                    <div class="or-line"></div>
                    <label>Have an account?</label> <a href="#" id="switch-to-login">Log In</a>
                    <br>
                    <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                </form>
            </div>
            <div id="login-form-container" class="form-container hidden">
                <h2 class="signuph2">Log In</h2>
                <form id="login-form" action="login.php" method="POST">
                    <div>
                        <input type="email" id="login-email" name="login-email" placeholder="Email" required>
                    </div>
                    <div>
                        <input type="password" id="login-password" name="login-password" placeholder="Password" required>
                    </div>
                    <div id="password-error-login" class="error-message-login"></div>
                    <div>
                        <input type="submit" value="Log In">
                    </div>
                    <div class="or-line"></div>
                    <label>Don't have an account?</label> <a href="#" id="switch-to-signup">Sign Up</a>
                    <br>
                    <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                </form>
            </div>
        </div>
        <script src="../Js/signin_login.js"></script>
    </div>



    <!-- Link to the external JavaScript file -->
    <script src="../Js/ad.js"></script>
</body>
</html>