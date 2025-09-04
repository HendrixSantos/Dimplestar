<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Dimple Star</title>
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
        <h1>Login</h1>
        <p>Access your account</p>
    </div>
</section>

<main class="container content">
    <form action="php_includes/login.php" method="POST" class="form-card">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" class="btn-primary">Login</button>
        <p class="form-note">Don’t have an account? <a href="signlog.php">Sign Up</a></p>
    </form>
</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Dimple Star Bus Company. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
