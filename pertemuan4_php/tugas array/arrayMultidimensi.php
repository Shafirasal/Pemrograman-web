<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
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
        .student-details {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .student-details p {
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
        array("Nama" => "Sunghoon", "NIM" => "881100", "Jurusan" => "Teknik Perkapalan", "Email" => "sunghoon@gmail.com", "enha" => "Sunghoon.jpg"),
        array("Nama" => "Jay", "NIM" => "235680", "Jurusan" => "Teknik Informatika", "Email" => "jay@gmail.com", "enha" => "Jay.jpg"),
        array("Nama" => "Jake", "NIM" => "198854", "Jurusan" => "Kedokteran", "Email" => "jake@gmail.com", "enha" => "Jake.jpg"),
        array("Nama" => "Jungwon", "NIM" => "123456", "Jurusan" => "Teknik Mesin", "Email" => "jungwon@gmail.com", "enha" => "Jungwon.jpg"),
        array("Nama" => "Niki", "NIM" => "010101", "Jurusan" => "Teknik Elektro", "Email" => "niki@gmail.com", "enha" => "Niki.jpg")
    );

    // Loop melalui array untuk menampilkan data mahasiswa
foreach ($mahasiswa as $data) {
    echo '<div class="enhypen-container">';
    echo '<img src="enha/' . $data["enha"] . '" alt="Foto Mahasiswa" class="pict-enha">'; //link folder "enha"
    echo '<div class="student-details">'; // Mengisi detail mahasiswa
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