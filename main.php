<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<h>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Seven Shipping Line</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="menu-burger" onclick="toggleMenu()">☰</div>
        <div class="logo">
        <img src="images/sky2.png" alt="Company Logo" width="150" height="100">
    </div>
        <div class="profile">
            <a href="register.php" id="profile-icon">
            <i class="fas fa-user"></i>
            </a>
        </div>
    </nav>
    <!-- Dropdown Menu for Menu Burger -->
    <div id="menu-dropdown" class="dropdown-menu">
        <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </div>
<!--home section-->
<section class="home-section">
    <div class="tracking-section">
        <div class="white-box">
            <div class="nav-buttons">
                <button onclick="showContent('tracking')">Tracking</button>
                <button onclick="showContent('schedule')">Schedules</button>
                <button onclick="showContent('contact')">Location</button>
            </div>
            <!--tracking-->
            <div class="tracking-content">
                <div id="tracking" class="content"> 
                    <div class="radio-group" id = "radio">
                        <label class="container">
                            <input type="radio" name="tracking-option" >
                            Container/Bill of Lading Number<br>
                        </label>
                        <label class="container">
                             <input type="radio" name = "tracking-option">
                             Booking Number</label>
                        </label>
                    </div>
                    <input type="text" placeholder="Search...">
            </div>
            <!--schedule-->
            <div id="schedule" class="content" style="display:none;">
                    <div class="schedule-inputs">
                        <div class="input-group">
                            <label for="from-port">
                                <span class="icon">🚢</span>
                                <input type="text" id="from-port" placeholder="From (Port)">
                            </label>
                        </div>
                        <div class="input-group">
                            <label for="to-port">
                                <span class="icon">📍</span>
                                <input type="text" id="to-port" placeholder="To (Port)">
                            </label>
                        </div>
                        <div class="search-section">
                            <label for="departure-date">
                                <input type="date" id="departure-date">
                            </label>
                        </div>
                        <button class="search-button">Search</button>
            </div>
            <!--contacts-->
            </div>
                <div id="contact" class="content" style="display:none;">
                    <div class="contact-search">
                        <div class="input-group">
                            <span class="icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 24 24"><path fill="#333333" /></svg></span>
                            <input type="text" placeholder="Select a location" class="contact-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<video autoplay muted loop id="background-video">
    <source src="video/bg5.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
</section>

<!-- Solutions Section -->
<section class="solutions">
    <h2>Our Solutions</h2>
    <div class="underline"></div>
    <h3>Shipping Solutions That Set You Apart!</h3>
    <h3>Unleash the shipping magic with our catchy solutions.</h3>
</section>
<section class="carousel">
    <div class="carousel-container">
        <div class="carousel-slide">
            <img src="images/Container4.jpg" alt="Slide 1">
            <!--text for slide 1-->
            <div class="carousel-text">
                <h3>Container Shipping</h3>
                <p>We offer reliable container shipping services to ensure your goods reach their destination safely and on time</p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="images/container5.jpg" alt="Slide 2">
            <div class="carousel-text">
                <h3>Frieght Forwarding</h3>
                <p>Our freight forwarding services simplify the shipping process and provide you with end-to-end logistics solutions </p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="images/container6.jpg" alt="Slide 3">
            <div class="carousel-text">
                <h3>Customs Clearance</h3>
                <p>We handle all customs clearance processes to ensure smooth shipping across borders</p>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="images/container8.jpg" alt="Slide 4">
            <div class="carousel-text">
                <h3>Digital Solutions</h3>
                <p>We are offering digital solutions like data integrations</p>
            </div>
        </div>
    </div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮</button>
    <button class="carousel-button next" onclick="changeSlide(1)">❯</button>
</section>
<section class="image">
    <div class="image-container">
        <img src="images/container11.jpeg" alt="Shipping Image" class="image">
        <div class="text-overplay">
            <h1>Your Cargo, Our Priority</h1>
            <p>We're always available to help you in every aspect.</p>
            <div class="stat-container">
                <div class="stat-item">
                    <img src="images/team.png" alt="Employees work">
                    <h2>100k</h2>
                    <p>S7 Group Employees</p>
                </div>
            </div>
            <div class="stat-separator">. . . .</div>
            <div class="stat-item">
                <img src="images/vessel.png" alt="Vessels Icon">
                <h2>700</h2>
                <p>Vessels</p>
            </div>
            <div class="stat-separator">. . . .</div>
            <div class="stat-item">
                <img src="images/office.png" alt="Offices Icon">
                <h2>500</h2>
                <p>Offices</p>
            </div>
        </div>
    </div>
</section>
<section>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h4>Sky Seven Shipping Line</h4>
                <p>Sky Seven Shipping Line has been a leader in shipping services for over a decade, ensuring your cargo reaches its destination safely and efficiently.</p>
            </div>
            <div class="footer-section contact">
                <h4>Contact Us</h4>
                <p><strong>Email:</strong> support@skyseven.com</p>
                <p><strong>Phone:</strong> +1 234 567 8901</p>
                <p><strong>Address:</strong> 123 Shipping Lane, Mumbai City, INDIA</p>
            </div>
            <div class="footer-section social">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><img src="images/facebook.png" alt="Facebook" class="social-icon"></a>
                    <a href="#" aria-label="Twitter"><img src="images/twitter.png" alt="Twitter" class="social-icon"></a>
                    <a href="#" aria-label="LinkedIn"><img src="images/linkedin.png" alt="LinkedIn" class="social-icon"></a>
                    <a href="#" aria-label="Instagram"><img src="images/instagram.png" alt="Instagram" class="social-icon"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Sky Seven Shipping Line. All rights reserved.</p>
        </div>
    </footer>
</section>
<script src="script.js"></script>
</body>
</html>