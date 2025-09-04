<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dimple Star Bus Company</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            <a href="index.php" class="logo">DimpleStar</a>
            <nav class="nav-links">
                <a href="index.php" class="active">Home</a>
                <a href="about.php">About</a>
                <a href="book.php">Book</a>
                <a href="routeschedule.php">Schedule</a>
                <a href="contact.php">Contact</a>
                <?php if(isset($_SESSION['user'])): ?>
                    <a href="logout.php" class="btn">Logout</a>
                <?php else: ?>
                    <li><a href="login.php" 
       style="display:inline-block; 
              background:black; 
              color:white; 
              font-weight:600; 
              padding:8px 16px; 
              border-radius:8px; 
              text-decoration:none;">
    Login
</a></li>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to Dimple Star</h1>
            <p>Comfortable, affordable, and reliable travel services</p>
            <a href="book.php" class="btn-primary">Book Now</a>
        </div>
    </section>

    <!-- Features -->
    <section class="container content">
        <h2>Why Travel With Us?</h2>
        <div class="grid-3">
            <div class="card">
                <h3>Safe & Reliable</h3>
                <p>We value your safety with trusted drivers and well-maintained buses.</p>
            </div>
            <div class="card">
                <h3>Comfortable Rides</h3>
                <p>Enjoy spacious seating and smooth travel experience.</p>
            </div>
            <div class="card">
                <h3>Affordable Fares</h3>
                <p>Quality service at prices that fit your budget.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Dimple Star Bus Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
