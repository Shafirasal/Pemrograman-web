<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
    //Inisialisasi variabel
    $namaErr="";
    $nama="";

    //Cek apakan form sudah disubmit
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //validasi nama (pastikan nama tidak kosong)
        if(empty($_POST["nama"])){
            $namaErr ="Nama harus diisi!";
        } else{
            $nama = $_POST["nama"];
            echo "Data berhasil disimpan!";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama;?>">
        <span class="error"><?php echo $namaErr;?></span><br><Br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<!--
    Form pada program ini digunakan untuk mengambil data "Nama" dari pengguna saat user menginputkan informasi nama. 
    Saat user mengirim data yang diinputkan, maka ini akan memeriksa dan validasi data tersebut pada code if-else, jika yang dikirimkan berupa empty maka kode akan mengeluarkan pesan ""Nama harus diisi!". 
    Dan jika sudah diisi akan diberikan pesan "Data berhasil disimpan!" dan akan menyimpan data apabila kolom telah terisi
-->
