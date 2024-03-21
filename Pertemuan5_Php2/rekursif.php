<?php
/*
Rekursi terjadi ketika sebuah fungsi memanggil dirinya sendiri. Dalam kasus ini, fungsi tampilkanHaloDunia() dipanggil di dalam dirinya sendiri.

Output kode ini akan mencetak “Hello dunia!” secara berulang kali, tidak terbatas dan terus menerus tanpa henti.  Karena tidak ada syarat yang menghentikan pemanggilan rekursif

*/ 

// function tampilkanHaloDunia(){
//     echo "Hallo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();


//membuat batasan sampe ke 25 saja dengan menampilkan angka 1 sampai 25
for($i=1;$i <=25; $i++){
    echo "Perulangan ke-{$i} <br>";
}
?>