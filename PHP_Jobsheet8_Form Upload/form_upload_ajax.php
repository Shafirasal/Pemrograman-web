<!-- Percobaan 3  -->
<!-- <!doctype html>
<html lang="en">
<head>
 <title>Unggah File Dokumen</title>
</head>
<body>
 <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
   <input type="file" name="file" id="file"><br><br>
   <input type="submit" name="submit" value="unggah">
 </form>

 <div id="status"></div>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="upload.js"></script>
</body>
</html> -->

<!--Percobaan 4 -->
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>
<body>
<div class="upload-form-container">
    <h2>Unggah File Dokumen</h2>
    <form id="upload-form" method="POST" enctype="multipart/form-data" action="upload.php">
        <div class="file-input-container">
            <input type="file" name="file" id="file" class="file-input">
            <label for="file" class="file-label">Pilih File</label>
        </div>
        <button type="submit" name="submit" class="upload-button" id="upload-button">Unggah</button>
    </form>
    <div id="status" class="upload-status"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <script src="upload.js"></script>
</body>

<!--Penambahan kode tersebut berfungsi untuk menghias atau meningkatkan tampilan form dalam mengunggah file dengan penambahan elemen CSS. Lalu, pada tombol "Unggah" juga terdapat perintah “disabled” yang diperintah pada selector jQuery yang berfungsi agar tombol “Unggah” tidak dapat diklik oleh user jika belum ada file yang dipilih-->
</html>



