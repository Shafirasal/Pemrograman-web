<?php
$loremIpsum="Lorem Ipsum is simply dummy text of the printing
 and typesetting industry. Lorem Ipsum has been the industry's 
 standard dummy text ever since the 1500s, when an unknown printer 
 took a galley of type and scrambled it to make a type specimen book.";

 //menggunakan  fungsi-fungsi built-in di string

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter:" .strlen($loremIpsum) ."<br>"; //strlen: Untuk mengetahui panjang string
echo "Panjang kata: " .str_word_count($loremIpsum) ."<br>"; //str_word_count:Untuk mengetahui jumlah kata di dalam string
echo "<p>" . strtoupper($loremIpsum) ."</p>"; //strtoupper: Mengubah huruf menjadi huruf kapital
echo "<p>" . strtolower($loremIpsum) . "</p>"; //strtolower: Mengubah huruf menjadi huruf kecil (lowercase)

echo "<hr>";

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