<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp =  $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    $extensions = array("jpg", "jpge", "png", "gif"); //modifikasi
    // $extensions = array("pdf", "doc", "docx", "txt");

    //perixinan tipe file
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPGE, PNG, atau GIF.";
    }

    //aturan tidak boleh lebih dadri 2mb
    if ($file_size > 2097152) { 
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    //pengecekan kondisi
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name); //modifikasi
        // move_uploaded_file($file_tmp, "uploads/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}

/*
Kode tersebut merupakan form untuk mengunggah file dokumen ke direktori "documents/" dengan format file pdf / doc / docx / txt. F
orm HTML memungkinkan pengguna untuk memilih file dokumen. Lalu, jQuery Ajax mengirim file ke server dan menampilkan respons di elemen "status". 
Pada PHP menerima file, melakukan validasi (ekstensi dan ukuran), dan mengunggahnya ke direktori "documents". 
Pesan sukses atau kesalahan dikirim kembali ke halaman HTML melalui Ajax.

PENJELASAN BARIS KODE:
@$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . ""); bertujuan untuk mendapatkan ekstensi file yang diunggah oleh pengguna.
    -$_FILES['file']['name']: Ini adalah bagian dari variabel super global $_FILES yang berisi nama file yang diunggah oleh pengguna.
    -explode('.', $_FILES['file']['name']): Kode ini memecah nama file menjadi array berdasarkan titik ('.'). Sebagai contoh, jika nama file adalah "file.pdf", maka hasilnya akan menjadi array ["file", "pdf"].
    -end(explode('.', $_FILES['file']['name'])): Kode ini mengambil elemen terakhir dari array yang dihasilkan oleh fungsi explode(). Dalam contoh di atas, ini akan menghasilkan "pdf", yaitu ekstensi dari nama file.
    -strtolower(): Kode ini mengonversi ekstensi file menjadi huruf kecil. Ini dilakukan agar tidak ada masalah saat membandingkan ekstensi file dengan daftar ekstensi yang diizinkan, yang biasanya ditulis dalam huruf kecil.
    -$file_ext: Kode ini menyimpan hasil ekstensi file yang telah diubah menjadi huruf kecil ke dalam variabel $file_ext. Penggunaan @ di sini adalah untuk menekan pesan kesalahan yang mungkin muncul jika end() tidak mendapatkan array yang valid, misalnya jika nama file tidak mengandung titik.

PERBEDAAN ECPLODE DAN IMPLODE:
explode():
Fungsi explode() digunakan untuk memecah string menjadi array berdasarkan delimiter tertentu.
implode():
Fungsi implode() digunakan untuk menggabungkan elemen-elemen array menjadi satu string, dengan penghubung di antara elemen-elemen tersebut.
*/

/* MODIFIKASI
Kode tersebut merupakan form untuk mengunggah gambar ke direktori "uploads/" dengan format gambar jpg / jpeg / png / gif. 
Form HTML memungkinkan pengguna untuk memilih file dokumen. Lalu, jQuery Ajax mengirim file ke server dan menampilkan respons di elemen "status". 
Pada PHP menerima file, melakukan validasi (ekstensi dan ukuran), dan mengunggahnya ke direktori "documents". Pesan sukses atau kesalahan dikirim kembali ke halaman HTML melalui Ajax.
*/