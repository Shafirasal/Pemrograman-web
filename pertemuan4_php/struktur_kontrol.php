<?php

//membuat kode kondisional if else dengan memasukan nilai numerik 92
$nilaiNumerik = 92;

if ($nilaiNumerik >=90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >=70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D ";
}
echo "<br>";

// menggunakan looping (while) dala php untuk menghitung waktu yang dibutuhkan atlet untuk mencapai untuk mencapai jarak tertentu
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai untuk mencapai jarak 500 kilometer <br>";

//menggunakan lopoing dengan for
$jumlahLahan= 10;
$tanamanPerLahan = 5;
$jumlahBuah = 0;
$buahPerTanaman = 10;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

/*menggunakan perulangan foreach, Foreach melakukan perulangan dengan mengambil nilai secara berurutan dan di simpan pada variabel $skor. 
setelah itu dari variabel $skor akan ditambahkan ke $totalSkor. jadi 85+92+78+96+88
*/
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor <br>";

//penggunaan foreach dengan array
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }

    echo "Nilai: $nilai (Lulus) <br>";
}


/*
Ada soal cerita : Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika.
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90,
75, 88, 79, 70, 96)
*/
// $jumlahSiswa = 10;
// $nilaiMatematika = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
// $totalNilai = 0;
// $jumlahNilaiDioperasikan = 0;

// foreach($nilaiMatematika as $nilai){
//     if ($nilai >= 92 || $nilai <= 70) {
//         continue; // Skip nilai yang lebih besar dari atau sama dengan 92 dan nilai yang kurang dari atau sama dengan 70
//     }
//     $totalNilai += $nilai;
//     $jumlahNilaiDioperasikan++;
// }

// if ($jumlahNilaiDioperasikan > 0) {
//     $rataRataNilai = $totalNilai / $jumlahNilaiDioperasikan;
//     echo "Rata-rata nilai matematika: $rataRataNilai";
// } else {
//     echo "Tidak ada nilai yang dioperasikan.";
// }

//soal cerita yg sama seperti di ats
$nilaiMatematika = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$rataRata=0;

sort($nilaiMatematika);
echo "<hr>";
for($i=2; $i<8; $i++){
 $totalNilai += $nilaiMatematika[$i];
}

$rataRata = $totalNilai/(count($nilaiMatematika)-4);
echo "nilai rata rata adalah $rataRata";

//soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.
$harga = 120000;
$diskon = 0.2; // 20% diskon
$biaya = 0;
if ($harga >= 100000) {
    $biaya = $harga - ($harga * $diskon); // Hitung total biaya dengan diskon
    echo "<hr> sehingga total biaya yang perlu dibayar oleh pembeli adalah: Rp.$biaya";  
}

/*Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”
 */

$point = 550;
$total_skor = $point;
$hadiah_tambahan= ($total_skor > 500) ? "YA" : "TIDAK";

echo "<hr>
total skor pemail adalah $total_skor<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah_tambahan";

?>