<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Dimple Star</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="container">
            <a href="index.php" class="logo">DimpleStar</a>
            <nav class="nav-links">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="book.php">Book</a>
                <a href="routeschedule.php">Schedule</a>
                <a href="contact.php" class="active">Contact</a>
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
            <h1>Contact Us</h1>
            <p>We’re here to help you 24/7</p>
        </div>
    </section>

    <!-- Contact Form -->
    <main class="container content">
        <h2>Get in Touch</h2>
        <form action="php_includes/contact.php" method="POST" class="form-card">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Dimple Star Bus Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
