<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multipe" accept=".pdf, .doc, docx, .jpg" />
        <input type="submit" value="Unggah"/>
</body>
</html>