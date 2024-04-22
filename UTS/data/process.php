<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['age'] = $_POST['age'];
    
    // Set cookies
    setcookie("name", $_POST['name'], time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
    setcookie("email", $_POST['email'], time() + (86400 * 30), "/");
    setcookie("age", $_POST['age'], time() + (86400 * 30), "/");
    
    header("Location: display.php");
    exit;
}
?>
