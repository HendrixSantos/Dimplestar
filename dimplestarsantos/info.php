<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Passenger Info - Dimple Star</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header class="navbar">
    <div class="container">
        <a href="index.php" class="logo">DimpleStar</a>
        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="book.php">Book</a>
            <a href="routeschedule.php">Schedule</a>
            <a href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<section class="hero small-hero">
    <div class="container">
        <h1>Passenger Information</h1>
        <p>Details of your booking</p>
    </div>
</section>

<main class="container content">
    <div class="card">
        <h2>Your Trip Details</h2>
        <p><strong>Name:</strong> <?php echo $_SESSION['name'] ?? 'N/A'; ?></p>
        <p><strong>Origin:</strong> <?php echo $_SESSION['origin'] ?? 'N/A'; ?></p>
        <p><strong>Destination:</strong> <?php echo $_SESSION['destination'] ?? 'N/A'; ?></p>
        <p><strong>Date:</strong> <?php echo $_SESSION['date'] ?? 'N/A'; ?></p>
        <p><strong>Seats:</strong> <?php echo $_SESSION['seats'] ?? 'N/A'; ?></p>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Dimple Star Bus Company. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
