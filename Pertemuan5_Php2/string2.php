<?php
echo "Baris\nbaru <br>";
echo 'Baris\nbaru <br>';
echo "Halo\rDunia <br>";
echo 'Halo\rDunia <br>';

echo "<pre>Halo\tDunia!</pre>";
echo '<pre>Halo\tDunia!</pre>';

echo "Katakanlah \"Tidak pada narkoba!\"<br>";
echo 'Katakanlah \'Tidak pada narkoba!\'<br>';


/*
Tanda Kutip Ganda (" "): Dalam string yang dibungkus oleh tanda kutip ganda, karakter escape seperti \n, \r, \t, dan \" akan diinterpretasikan sebagai karakter khusus. 
Artinya, mereka akan diubah menjadi karakter sesuai dengan maknanya, seperti baris baru, kembali ke posisi awal baris, tab, dan tanda kutip ganda. 
Contoh: echo "Hello\nWorld"; akan mencetak "Hello" diikuti dengan baris baru dan kemudian "World".

Tanda Kutip Tunggal (' '):Dalam string yang dibungkus oleh tanda kutip tunggal, karakter escape tidak akan diinterpretasikan. 
Mereka akan dipertahankan dalam bentuk aslinya.
Contoh: echo 'Hello\nWorld'; akan mencetak "Hello\nWorld" sebagai teks yang sebenarnya, bukan mencetak "Hello" diikuti dengan baris baru dan "World".
*/
?>