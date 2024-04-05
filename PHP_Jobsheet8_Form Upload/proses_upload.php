<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "uploads/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}

/* PRAKTILUM 1
    kode tersebut bertugas mengunggah beberapa file ke direktori "documents/" dengan format file pdf / doc / docx. Jika direktori tersebut belum ada, kode akan membuatnya dengan izin penuh “0777”. 
    Setelah itu, kode memeriksa apakah ada file yang diunggah, dan jika iya, akan mengunggahnya satu per satu. Hasil dari pengunggahan akan dilaporkan dengan pesan "File berhasil diunggah" atau "Gagal mengunggah file" sesuai dengan hasilnya.


    Angka 0777 dalam pemanggilan fungsi mkdir adalah mode atau izin yang diberikan kepada direktori yang baru dibuat. Mode ini mengontrol hak akses untuk direktori yang baru dibuat.
        Digit pertama (paling kiri) untuk pemilik direktori.
        Digit kedua untuk grup pengguna yang memiliki akses ke direktori.
        Digit ketiga untuk pengguna lain di luar pemilik dan grup pengguna.

    representasikan hak akses sebagai berikut:
    0: Tidak ada akses.
    1: Hanya izin eksekusi.
    2: Hanya izin tulis.
    3: Izin tulis dan eksekusi.
    4: Hanya izin baca.5: Izin baca dan eksekusi.
    6: Izin baca dan tulis.
    7: Izin baca, tulis, dan eksekusi.
*/
/* PRAKTIKUM 2
    Kode tersebut bertugas mengunggah beberapa file ke direktori "uploads/" dengan format gambar jpg / jpeg / png. 
    Jika direktori tersebut belum ada, kode akan membuatnya dengan izin penuh “0777”. Setelah itu, kode memeriksa apakah ada file yang diunggah, dan jika iya, akan mengunggahnya satu per satu. 
    Hasil dari pengunggahan akan dilaporkan dengan pesan "File berhasil diunggah" atau "Gagal mengunggah file" sesuai dengan hasilnya.
*/