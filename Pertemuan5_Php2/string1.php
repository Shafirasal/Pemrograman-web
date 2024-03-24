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




?>