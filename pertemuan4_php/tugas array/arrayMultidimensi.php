<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa Shafira</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .enhypen-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; 
            padding: 10px; 
        }
        .pict-enha {
            width: 100px;
            height: 130px; 
            object-fit: cover; 
            margin-right: 20px;
        }
        .enhypen-details { /* Mengubah student-details menjadi enhypen-details */
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .enhypen-details p { /* Mengubah student-details p menjadi enhypen-details p */
            margin: 0;
        }
        .symbol {
            font-size: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa array multidimensi</h2>

    <?php
    // Array multidimensi untuk data mahasiswa
    $mahasiswa = array(
        array("Nama" => "Sunghoon", "NIM" => "2241760001", "Jurusan" => "Teknik Perkapalan", "Email" => "sunghoon@gmail.com", "enha" => "Sunghoon.jpg"),
        array("Nama" => "Jay", "NIM" => "2241760002", "Jurusan" => "Teknik Informatika", "Email" => "jay@gmail.com", "enha" => "Jay.jpg"),
        array("Nama" => "Jake", "NIM" => "2241760005", "Jurusan" => "Kedokteran", "Email" => "jake@gmail.com", "enha" => "Jake.jpg"),
        array("Nama" => "Jungwon", "NIM" => "2241760004", "Jurusan" => "Teknik Mesin", "Email" => "jungwon@gmail.com", "enha" => "Jungwon.jpg"),
        array("Nama" => "Niki", "NIM" => "2241760006", "Jurusan" => "Teknik Elektro", "Email" => "niki@gmail.com", "enha" => "Niki.jpg")
    );

    // Loop melalui array untuk menampilkan data mahasiswa
    foreach ($mahasiswa as $data) {
        echo '<div class="enhypen-container">';
        echo '<img src="enha/' . $data["enha"] . '" alt="Foto Mahasiswa" class="pict-enha">'; //link folder "enha"
        echo '<div class="enhypen-details">'; // Mengisi detail mahasiswa
        echo '<p><span class="symbol">•</span> Nama: ' . $data["Nama"] . '</p>';
        echo '<p><span class="symbol">•</span> NIM: ' . $data["NIM"] . '</p>';
        echo '<p><span class="symbol">•</span> Jurusan: ' . $data["Jurusan"] . '</p>';
        echo '<p><span class="symbol">•</span> Email: ' . $data["Email"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</body>
</html>
