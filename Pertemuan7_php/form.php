<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="proses_form.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" id="submitBtn" value="Submit">
    </form>
</body>
</html>

<!--
    <form method="post" action="proses_form.php">: Form ini menggunakan metode POST dan ketika tombol submit ditekan, data akan dikirimkan ke file proses_form.php untuk diproses.
    atau bisa dibilang, saat menekan tombol submit maka akan dibawa ke data proses_form
-->