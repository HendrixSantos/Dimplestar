<?php
session_start();
include("php_includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book a Trip - Dimple Star</title>
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
                <a href="book.php" class="active">Book</a>
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
            <h1>Book Your Trip</h1>
            <p>Quick and easy reservation system</p>
        </div>
    </section>

    <!-- Booking Form -->
    <main class="container content">
        <h2>Reservation Form</h2>
        <form action="php_includes/book.php" method="POST" class="form-card">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" id="fullname" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="text" name="contact" id="contact" required>
            </div>

            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" name="origin" id="origin" required>
            </div>

            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" name="destination" id="destination" required>
            </div>

            <div class="form-group">
                <label for="date">Date of Travel</label>
                <input type="date" name="date" id="date" required>
            </div>

            <div class="form-group">
                <label for="seats">Number of Seats</label>
                <input type="number" name="seats" id="seats" min="1" required>
            </div>

            <button type="submit" class="btn-primary">Book Now</button>
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
