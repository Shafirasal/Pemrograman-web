<?php
#strrev() dalam PHP digunakan untuk membalikkan urutan karakter dalam sebuah string.

echo "menggunakan strrev: <br>";
$pesan = "Saya arek malang";
echo strrev($pesan). "<br>";
echo "<hr>";


echo "menggunakan array: <br>";
#ubah  variabel $pesan menjadi array dengan perintah explode
$pesanPerkata = explode(" ", $pesan);
#ubah setiap kata dalam array menjadi kebalikannya
$pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanPerkata);
#gabungkan kembali array menjadi string
$pesan= implode(" ", $pesanPerkata);

echo $pesan . "<br>";
/*
fungsi dari kode ini adalah untuk membalikkan urutan setiap kata dalam sebuah string. 
Misalnya, jika string awalnya adalah "Saya arek malang", maka outputnya akan menjadi "ayaS kera gnalam".
*/

?>