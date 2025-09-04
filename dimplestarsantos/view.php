<?php
session_start();
include("php_includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Reservations - Dimple Star</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header class="navbar">
    <div class="container">
        <a href="index.php" class="logo">DimpleStar</a>
        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="book.php">Book</a>
            <a href="routeschedule.php">Schedule</a>
        </nav>
    </div>
</header>

<section class="hero small-hero">
    <div class="container">
        <h1>Reservation List</h1>
        <p>All booked passengers</p>
    </div>
</section>

<main class="container content">
    <table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Seats</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($db, "SELECT * FROM reservations");
            while($row = mysqli_fetch_assoc($result)):
            ?>
            <tr>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['origin']; ?></td>
                <td><?php echo $row['destination']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['seats']; ?></td>
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
