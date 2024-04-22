<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function() {
            // Animasi saat halaman dimuat
            $('.container').hide().fadeIn(1000);
        });
    </script>
</head>
<body>
    
    <div class="container">
    <img src="img/gambar1.jpg" alt="Gambar Profil">

        <h1>Data Diri</h1>
        <p><strong>Nama:</strong> <?php echo $_SESSION['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Umur:</strong> <?php echo $_SESSION['age']; ?></p>
        <button type="submit" href="index.html"><a href="index.html" class="logout">Logout</a></button>
        <a href="index.html" class="logout">Logout</a> 
    </div>



</body>
</html>

