<?php
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah total kursi: $totalKursi <br>";
echo "Jumlah kursi terisi: $kursiTerisi <br>";
echo "Jumlah kursi kosong: $kursiKosong <br>";
echo "Persentase kursi kosong: $persentaseKursiKosong %";
?>
