$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault(); // Mencegah aksi default form
        var formData = $(this).serialize(); // Mengambil data form

        // Mengirim data form ke server menggunakan AJAX
        $.ajax({  //engirim permintaan AJAX ke server.
            type: 'POST',
            url: $(this).attr('action'), // Mengambil URL dari atribut 'action' (process.php)
            data: formData, // Mengirim data form
            success: function(response) {
                if (response === 'success') {
                    $('#message').text('Login successful.'); // Menampilkan pesan sukses
                    window.location.href = 'profile.php'; // Mengarahkan ke halaman profil
                } else {
                    $('#message').text('Invalid username or password.'); // Menampilkan pesan error
                }
            }
        });
    });
});
