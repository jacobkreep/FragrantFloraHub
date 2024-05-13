<?php
session_start();
require_once 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id, username, password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: restricted.php");
    } else {
        echo "Invalid password";
    }
} else {
    echo "Email not found";
}

$stmt->close();
$conn->close();
?>