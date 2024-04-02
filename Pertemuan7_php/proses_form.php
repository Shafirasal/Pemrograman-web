<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama= $_POST["nama"];
    $email= $_POST["email"];

    echo "Nama:" . $nama . "<br>";
    echo "Email:" . $email;
}


/*
Terdapat form yang berisi nama dan email yang dimana data yang diisi pada kolom yang sudah disediakan akan dikirim ke proses_Form.php. 
yang kemudian disini akan ditampilkan lagi dengan menggunakan “POST”. Ini juga akan mengarahkan ke file php "proses_form.php"
*/

/*
$_SERVER["REQUEST_METHOD"] adalah salah satu variabel superglobal bawaan PHP yang menyediakan informasi tentang permintaan HTTP yang diterima oleh server. 

Variabel ini memberikan metode yang digunakan dalam permintaan tersebut, seperti "GET", "POST", "PUT", "DELETE", dll. 
*/
?>