<?php
    $umur;
    if(isset($umur) && $umur >= 18){
        echo "Anda sudah dewasa <br>";
    } else {
        echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan <br>";
    }

    $data = array("nama" => "Jane", "usia" => "25");
    if(isset($data["nama"])){
        echo "Nama: " . $data["nama"];
    } else {
        echo "Variabel 'nama' tidak ditemukan dalam array";
    }


//isset() adalah sebuah fungsi dalam PHP yang digunakan untuk memeriksa apakah suatu variabel telah didefinisikan (ada) atau tidak. Fungsi ini mengembalikan true jika variabel telah didefinisikan dan memiliki nilai, dan false jika variabel tidak ada atau bernilai null. 
/*
isset($umur):
Fungsi isset dalam PHP digunakan untuk mengecek apakah kita telah memberi nilai pada suatu kotak (variabel) atau belum. 
Jika sudah diberi nilai, maka akan mengembalikan true disini akan mengekseskusi (isset($umur) && $umur >= 18), 
jika belum maka akan mengembalikan false Yang dimana apabila bernilai true akan menampilkan “Anda sudah dewasa” dan apabila false akan menapilan "Anda belum dewasa atau variabel 'umur' tidak ditemukan."

(isset($data["nama"])):
Disini isset akan memeriksa apakah elemen "nama" dalam array $data telah diinisialisasi. 
Jika ya, maka pesan "Nama: Jane" akan ditampilkan; jika tidak, pesan "Variabel 'nama' tidak ditemukan dalam array." akan muncul.
*/
?>

