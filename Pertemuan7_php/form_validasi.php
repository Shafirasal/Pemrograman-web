<!DOCTYPE html>
<html>
<head>
  <title>Form Input dengan Validasi</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Form Input dengan Validasi</h1>
<form id="myForm" method="post" action="proses_validasi.php">
    <label for="nama">Nama: </label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email: </label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>

    <label for="password">Password: </label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>

    <input type="submit" value="Submit">
</form>

<script>
  $(document).ready(function() {
    $("#myForm").submit(function(event) {
      event.preventDefault(); // Mencegah pengiriman form secara default

      var nama = $("#nama").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var valid = true;

      if (nama === "") {
        $("#nama-error").text("Nama harus diisi.");
        valid = false;
      } else {
        $("#nama-error").text("");
      }

      if (email === "") {
        $("#email-error").text("Email harus diisi.");
        valid = false;
      } else {
        $("#email-error").text("");
      }

      if (password === "") {
        $("#password-error").text("Password harus diisi.");
        valid = false;
      } else if (password.length < 8) {
        $("#password-error").text("Password minimal harus 8 karakter.");
        valid = false;
      } else {
        $("#password-error").text("");
      }

      if (valid) {
        // Mengumpulkan data form
        var formData = $("#myForm").serialize();

        // Mengirim data ke server PHP menggunakan AJAX
        $.ajax({
          url: "proses_validasi.php", // Ganti dengan nama file PHP yang sesuai
          type: "POST",
          data: formData,
          success: function(response) {
            // Menampilkan hasil dari server di div hasil
            $("#hasil").html(response);
          }
        });
      } 
      // Kode ini memungkinkan validasi dan pengiriman data tanpa perlu merefresh halaman, berkat AJAX. Ini membuat validasi dan pengiriman data lebih dinamis tanpa perlu refresh
    }); 
  });
</script>
</body>
</html>
