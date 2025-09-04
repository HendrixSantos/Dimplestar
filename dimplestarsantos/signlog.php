<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Dimple Star</title>
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
        <h1>Create an Account</h1>
    </div>
</section>

<main class="container content">
    <form action="php_includes/signlog.php" method="POST" class="form-card">
        <div class="form-group">
            <label for="username">Choose a Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Choose a Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" class="btn-primary">Sign Up</button>
        <p class="form-note">Already have an account? <a href="login.php">Login</a></p>
    </form>
</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Dimple Star Bus Company. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
