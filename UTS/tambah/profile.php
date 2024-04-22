<?php
session_start();

// Check if the user is already logged in via session
if (!isset($_SESSION['username'])) { //memeriksa apakah  variabel username sudah diatur atau belum
    // If not, check if there's a cookie set
    if(isset($_COOKIE["user"])) { //apakah cookie dengan nama "user" sudah diatur atau tidak. 
        $_SESSION['username'] = $_COOKIE["user"];
    } else {
        // If no session or cookie, redirect to login page
        header('Location: index.html');
        exit();
    }
}

$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <link rel="stylesheet" href="foto.css">
</head>

<body>

    <div class="centered">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>This is your profile page.</p>
    </div>


    <div class="image-row">
        <div class="image-column">
            <img src="img/gambar1.jpg" alt="Gambar 1" class="image">
        </div>
        <div class="image-column">
            <img src="img/gambar2.jpg" alt="Gambar 2" class="image">
        </div>
    </div>
    <div class="image-row">
        <div class="image-column">
            <img src="img/gambar3.jpg" alt="Gambar 3" class="image">
        </div>
        <div class="image-column">
            <img src="img/gambar4.jpg" alt="Gambar 4" class="image">
        </div>
    </div>
    <a href="logout.php" class="logout">Logout</a>
</body>

</html>