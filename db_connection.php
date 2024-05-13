<?php
$servername = "localhost"; // Change if your MySQL server is hosted elsewhere
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password is blank for XAMPP MySQL
$database = "login"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
