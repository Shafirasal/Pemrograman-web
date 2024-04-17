<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit();
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