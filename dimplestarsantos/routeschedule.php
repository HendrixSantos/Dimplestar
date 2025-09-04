<?php
session_start();
include("php_includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Route Schedule - Dimple Star</title>
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
            <a href="routeschedule.php" class="active">Schedule</a>
            <a href="contact.php">Contact</a>
        </nav>
    </div>
</header>

<section class="hero small-hero">
    <div class="container">
        <h1>Route Schedules</h1>
        <p>Find your departure and arrival times</p>
    </div>
</section>

<main class="container content">
    <table class="styled-table">
        <thead>
            <tr>
                <th>Origin</th>
                <th>Destination</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Fare</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($db, "SELECT * FROM routes");
            while($row = mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td><?php echo $row['origin']; ?></td>
                <td><?php echo $row['destination']; ?></td>
                <td><?php echo $row['departure']; ?></td>
                <td><?php echo $row['arrival']; ?></td>
                <td>₱<?php echo $row['fare']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Dimple Star Bus Company. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
