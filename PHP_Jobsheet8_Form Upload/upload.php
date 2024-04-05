<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; //direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    // $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


    $allowedExtensions =  array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) { //praktikum 3
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah";
            echo '<br><img src="' . $targetFile . '" width="200" alt="Thumbnail">'; // Untuk membuat file gambar thumbnail dengan ukuran lebar 200 dan tinggi mengikuti perubahan secara otomatis.
        } else {
            echo "Gagal mengunggah file";
        }
    } else {
        echo "Jenis tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

/* PRAKTIKUM 1
    $targetDirectory menentukan direktori tempat file akan disimpan. 
    $targetFile digunakan untuk menentukan nama lengkap (path) dari file yang akan disimpan. Nama file ini diambil dari nama file yang diunggah oleh pengguna melalui formulir.
    move_uploaded_file() digunakan untuk memindahkan file yang diunggah dari direktori sementara (temp) ke direktori tujuan yang ditentukan oleh variabel $targetFile.
*/
/* PRAKTIKUM 2
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");: Variabel ini berisi daftar ekstensi file yang diperbolehkan untuk diunggah. File dengan ekstensi selain yang terdaftar di sini akan ditolak.
    $maxFileSize = 5 * 1024 * 1024;: Variabel ini menentukan ukuran maksimum file yang diizinkan diunggah, dalam byte. Dalam contoh ini, batas ukuran file adalah 5 MB.
*/ 
/*  PRAKTIKUM 3
    if (in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {: Pada bagian ini, dilakukan pengecekan apakah ekstensi file yang diunggah terdapat dalam daftar ekstensi yang diperbolehkan (yang disimpan dalam array $allowedExtensions) dan ukuran file tidak melebihi batas maksimum yang ditentukan ($maxFileSize). Jika kedua kondisi tersebut terpenuhi, blok kode di dalamnya akan dieksekusi.

    Kode tersebut berfungsi untuk memberi batas dan membatasi format file yang diunggah. Jika dokumen yang diunggah sesuai dengan jenis file "txt", "pdf", "doc", atau "docx," dan ukurannya kurang dari atau sama dengan 10MB, 
    maka dokumen tersebut akan diterima dan diunggah ke direktori "documents/". Pesan yang dihasilkan memberikan respons yang sesuai dengan status pengunggahan dokumen, serta validasi yang berkaitan dengan tipe dan ukuran 
    dokumen yang diizinkan. Dengan demikian, kode ini memberikan pengelolaan yang lebih khusus untuk dokumen dengan persyaratan tertentu.
 */
?>

