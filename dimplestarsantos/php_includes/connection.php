<?php
$db = mysqli_connect("localhost", "root", "", "dimplestar");

if(!$db){
    die("Database connection failed: " . mysqli_connect_error());
}
?>
