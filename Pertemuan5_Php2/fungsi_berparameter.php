<?php
//fungsi berparameter
function perkenalan($nama, $salam){
    echo $salam. ",";
    echo "Perkenalan, nama saya ".$nama." <br/>";
    echo "Senang berkenalan dengan anda <br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya="Shafira";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan($saya, $ucapanSalam);

?>