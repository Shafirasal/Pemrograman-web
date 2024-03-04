<?php 
// Menambah nilai variabel dan contoh penggunaan operator dalam PHP
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Menambah penggunaan operator perbandingan dalam PHP
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Menambah penggunaan operator logika dalam PHP
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotaB = !$b;

//operator identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !==$b;








// Menampilkan hasil perintah penggunaan operator, pemanggilan variabel bisa menggunakan "titik" atau tidak sesuai kebutuhan
echo "Operator Aritmatika<br><br>";
echo "Nilai a: $a <br>";
echo "Nilai b: $b <br>";
echo "Hasil penjumlahan a + b: $hasilTambah <br>";
echo "Hasil pengurangan a - b: $hasilKurang <br>";
echo "Hasil perkalian a * b: $hasilKali <br>";
echo "Hasil pembagian a / b: $hasilBagi <br>";
echo "Sisa bagi a % b: $sisaBagi <br>";
echo "Hasil pangkat a ** b: $pangkat <br> <br>";

// Echo menampilkan perintah
echo "Operator Perbandingan<br><br>";
echo "Hasil a sama dengan b = $hasilSama <br>";
echo "Hasil a tidak sama dengan b = $hasilTidakSama <br>"; 
echo "Hasil a lebih kecil dari b = $hasilLebihKecil <br>"; 
echo "Hasil a lebih besar dari b = $hasilLebihBesar <br>"; 
echo "Hasil a lebih kecil atau sama dengan b = $hasilLebihKecilSama <br>";
echo "Hasil a lebih besar atau sama dengan b = $hasilLebihBesarSama <br><br>";

//operator logika
echo "Hasil Operator Logika <br>";
echo "Hasil a AND b = $hasilAnd <br>";
echo "Hasil a OR b = $hasilOr <br>";
echo "Hasil NOT a = $hasilNotA <br>";
echo "Hasil NOT b = $hasilNotaB <br><br>";


//operator untuk penugasan
echo "Operator penugasan<br>";
$a += $b;
echo "Nilai a setelah operasi a += b: $a <br>";

$a -= $b;
echo "Nilai a setelah operasi a -= b: $a <br>";

$a *= $b;
echo "Nilai a setelah operasi a *= b: $a <br>";

$a /= $b;
echo "Nilai a setelah operasi a /= b: $a <br>";

$a %= $b;
echo "Nilai a setelah operasi a %= b: $a <br><br>";

//operator identik ini hanya terdapat pada PHP dan JS, pada Bahasa lain tidak memiliki Operator ini
echo "Operator identik dan tidak identik<br>";
echo "Hasil a identik b: $hasilIdentik<br>";
echo "Hasil a tidak identik b: $hasilTidakIdentik<br>";


?>
