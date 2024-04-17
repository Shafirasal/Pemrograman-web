<?php
// ini halaman setelah berhasil login
session_start();

if(!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
  header('Location: index.html');
  exit;
}

$username = $_SESSION['username'] ?? $_COOKIE['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>
<body>
  <h2>Welcome, <?php echo $username; ?>!</h2>
  <a href="login.php?action=logout">Logout</a>
</body>
</html>
