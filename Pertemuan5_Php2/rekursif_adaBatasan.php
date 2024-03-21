<?php
function tampilkanAngka(int $jumlah, int $indeks=1){
    echo "Perulangan ke-{$indeks} <br>";

    //panggil diri sendiri selama $indeks <= $jumlah
    if($indeks < $jumlah){
        tampilkanAngka($jumlah, $indeks +1); //ini akan mengekseskusi pada fungsi  tampilkanAngka
    }
}
tampilkanAngka(20); //ini masuk ke $jumlah

/*
disini termasuk kode rekursif dengan batasan tertentu, dalam kode ini ada batasan jumlah adalah “20”. 
yang mana kita menetapkan indeks terlebih dahulu dengan angka 1, lalu kode akan masuk pada kondisi if 
yang mana ini ada pengecekan kondisi jika indeks < jumlah. Lalu jika kondisi sesuai maka akan menjalankan fungsi tampulkanAngka, 
yang mana pada kode ini akan ada batasan sampai output berjumlah 20. yang akan mengeksekusi echo "Perulangan ke-{$indeks} <br>";

*/
?>