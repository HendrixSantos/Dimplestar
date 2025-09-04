<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Dimple Star</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            <a href="index.php" class="logo">DimpleStar</a>
            <nav class="nav-links">
                <a href="index.php">Home</a>
                <a href="about.php" class="active">About</a>
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
    <section class="hero small-hero">
        <div class="container">
            <h1>About Dimple Star</h1>
            <p>Your trusted travel partner on the road</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container content">
        <h2>Who We Are</h2>
        <p>
            Dimple Star has been serving passengers with reliable and safe bus services.
            Our mission is to provide a comfortable, affordable, and memorable travel experience.
        </p>

        <h2>Why Choose Us?</h2>
        <ul class="feature-list">
            <li>✔ Comfortable and clean buses</li>
            <li>✔ Affordable fares</li>
            <li>✔ Friendly customer support</li>
            <li>✔ Reliable schedules</li>
        </ul>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Dimple Star Bus Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
