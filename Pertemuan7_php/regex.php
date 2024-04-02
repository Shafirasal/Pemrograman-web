<?php
//praktikum1
$pattern = '/[a-z]/'; //cocokan huruf kecil
$text = 'This is a simplle text';

if(preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!";
} else{
    echo "Tidak ada huruf kecil";
}   echo "<br>";

//praktikum 2
$pattern = '/[0-9]/'; //cocokan satu atau lebih digit
$text = 'There are 123 apples';


if(preg_match($pattern, $text, $matches)){
    echo "cocokan:" .$matches[0];
} else{
    echo "Tidak ada yang cocok";
}   echo "<br>";


//praktikum 3
$pattern = '/apples/';
$replacement= 'banana';
$text = 'I like appple pie';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
echo "<br>";

//praktikumm 4
$pattern = '/go?d/'; //cocokan "god", "good", "gooood", dll
$text = 'god is good';

if (preg_match($pattern, $text, $matches)) {
    echo "cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}



/*
PRAKTIKUM 1
    - Variabel $pattern: Merupakan pola pencarian yang didefinisikan dalam bentuk ekspresi reguler. Pola ini akan mencocokkan setiap karakter dalam teks yang merupakan huruf kecil (a-z).
    - ariabel $text: Merupakan teks yang akan diperiksa untuk mencari kecocokan dengan pola yang didefinisikan.
    - preg_match(): Digunakan untuk mencocokkan teks dengan pola yang diberikan. Jika terdapat kecocokan, maka nilai yang dikembalikan adalah true, jika tidak, maka nilai yang dikembalikan adalah false.
    - Percabangan if-else: Digunakan untuk menampilkan pesan "Huruf kecil ditemukan!" jika terdapat setidaknya satu huruf kecil dalam teks yang diberikan. Jika tidak ada huruf kecil yang ditemukan, maka akan ditampilkan pesan "Tidak ada huruf kecil".
 
 kenapa bisa menentukan huruf kecil? karena ada "$pattern = '/[a-z]/';". Kalo inigin mencocokan huruf besar menggunakan untuk mencocokkan huruf besar "(/[A-Z]/)."
 
 PRAKTIKUM 2
    mencocokkan satu digit dari 0 hingga 9. Artinya, pola tersebut mencari satu karakter dalam teks yang merupakan angka.
    -preg_match(): Digunakan untuk mencocokkan teks dengan pola yang diberikan. Jika terdapat kecocokan, maka nilai yang dikembalikan adalah true, dan nilai kecocokan akan disimpan dalam array $matches.
    -eks 'There are 123 apples' akan dicocokkan dengan pola [0-9]. Proses pencocokan akan mencari setiap karakter dalam teks untuk melihat apakah karakter tersebut adalah angka antara 0 hingga 9.
    -karakter "1", "2", dan "3" adalah digit, sehingga pola [0-9] akan cocok dengan karakter pertama yang merupakan angka, yaitu "1".
    -Jadi, [0-9] dalam pola ini mencocokkan karakter numerik tunggal apa pun yang ada dalam teks, bukan jumlah karakter dalam kalimat itu sendiri.
 
PRAKTIKUM 3
    pattern adalah apples, repplacement adalah banana, jadi pada text 'I like appple pie' yang ada pattern(apples) akan diganti dengan (banana). Hasilnya adalah kalimat baru: "I like banana pie."

PRAKTIKUM 4
    $pattern = '/go*d/'; ini adalah mencari text yang di depanya "go" dan di ikuti 0 atau lebih karakter lain dan diakhiri dengan "d". nah kenapa cuman ditampilkan god aja padahal good juga memenuhi? karena ada di arraynya cmn nyimpan si 1 index aja maka yang dimasukan adalah yang pertama "god"
 */
?>


