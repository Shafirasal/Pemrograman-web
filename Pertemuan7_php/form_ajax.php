<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>  
</head>
<body>
<h2>Form Contoh</h2>
    <form id="myForm" method="POST" action="proses_lanjut.php">
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>

        <label>Pilih warna favorit</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

        <br>
        
        <label>Pilih jenis kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">
        <!--Hasil akan ditampilkan disini-->
    </div>

      <script>
    $(document).ready(function () {
      $("#myForm").submit(function (e) {
        e.preventDefault(); //Mencegah pengiriman form secara default

        // Mengumpulkan data form
        var formData = $(this).serialize(); // Menggunakan "this" untuk merujuk ke formulir saat ini

        // Kirim data ke server PHP
        $.ajax({
          url: "proses_lanjut.php", //ganti dengan nama file PHP yang sesuai
          type: "POST",
          data: formData,
          success: function (response) {
            // tampilkan hasil dari server di div "Hasil"
            $("#hasil").html(response);
          }
        });
      });
    });
    </script>

<!--
    Halaman web ini memiliki formulir dengan beberapa elemen seperti kotak pilihan buah, 
    kotak pilihan warna favorit, dan tombol "Submit". Ketika pengguna mengisi formulir dan mengklik tombol "Submit," 
    data formulir dikirim ke server menggunakan teknik AJAX tanpa memuat ulang halaman. Hasil respons dari server ditampilkan dalam div dengan ID "hasil" tanpa perlu me-refresh halaman.

-->
</body>
</html>
