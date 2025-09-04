<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Terminals - Dimple Star</title>
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
        <h1>Our Terminals</h1>
        <p>Find your nearest terminal</p>
    </div>
</section>

<main class="container content">
    <div class="grid-2">
        <div class="card">
            <h3>Manila Terminal</h3>
            <p>123 Main St, Manila</p>
        </div>
        <div class="card">
            <h3>Batangas Terminal</h3>
            <p>456 City Rd, Batangas</p>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Dimple Star Bus Company. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
