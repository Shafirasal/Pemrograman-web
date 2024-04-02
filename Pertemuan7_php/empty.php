<?php
    $myAray = array (); //attay kosong
    if(empty($myAray)){
        echo "Array tidak terdefinisi atau kosong";
    }else{
        echo "Array terdefinisi dan tidak kosong";
    }
    


    if(empty($nonExistentVar)){
        echo "Variabel tidak terdefinisi atau kosong";
    }else{
        echo "Variabel terdefinisi dan tidak kosong";
    }

/*
    1. Disini empty akan memeriksa apakah variabel $myArray kosong, 
       jika kosong akan menampilkan "Array tidak terdefinisi atau kosong.", 
       Jika tidak maka akan menampilkan "Array terdefinisi dan tidak kosong."

    2.Fungsi empty() digunakan untuk memeriksa apakah sebuah variabel tidak terdefinisi atau memiliki nilai yang dianggap kosong. 
      Disini apabila kosong maka akan menampilkan "Variabel tidak terdefinisi atau kosong."
*/
?>