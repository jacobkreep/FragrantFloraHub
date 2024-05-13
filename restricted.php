<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restricted Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="font-family: Arial, sans-serif;">
  <div class="container mt-5">
    <h1 class="text-center mb-4" style="color: green;">Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <p>This is a restricted page. You can only access it if you are logged in.</p>
        <a href="logout.php" class="btn btn-danger btn-block" style="background-color: red; border-color: red;">Logout</a>
      </div>
    </div>
  </div>
</body>
</html>