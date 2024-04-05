$(document).ready(function(){
    $('input[type="file"]').change(function(){
        if(this.files.length > 0){
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});

/*
    - var formData = new FormData(this);: Ini membuat objek FormData yang berisi data formulir yang di-submit. this mengacu pada formulir yang sedang di-submit.
    - e.preventDefault();: Ini adalah panggilan untuk mencegah perilaku default dari event. Dalam konteks ini, e.preventDefault() digunakan untuk mencegah formulir dikirim secara sinkron, yang akan menyebabkan halaman dimuat ulang.
    - $.ajax({ ... }): Ini adalah panggilan AJAX yang menggunakan jQuery. Ini mengirimkan permintaan HTTP ke server secara asinkron.
        -type: 'POST': Menentukan metode HTTP yang akan digunakan untuk mengirim permintaan. Dalam hal ini, metode POST digunakan.
        -url: 'upload_ajax.php': URL tujuan yang akan menerima permintaan AJAX.
        -data: formData: Data yang akan dikirim ke server. Dalam kasus ini, data formulir yang dikumpulkan dalam objek FormData.
        -cache: false: Menyatakan apakah permintaan harus disimpan dalam cache browser atau tidak.
        -contentType: false: Menentukan tipe konten permintaan. Dalam kasus ini, tidak ada tipe konten yang ditentukan karena FormData telah dikirimkan tanpa pemrosesan tambahan.
        -processData: false: Menentukan apakah data yang dikirim harus diproses atau tidak sebelum dikirimkan. Dalam kasus ini, tidak ada pemrosesan yang diperlukan karena FormData telah siap untuk dikirim.
        -success: function(response){ ... }: Fungsi yang akan dieksekusi jika permintaan berhasil. Respons dari server akan diteruskan ke dalam fungsi ini dan akan ditampilkan dalam elemen dengan ID status.
        -error: function(){ ... }: Fungsi yang akan dieksekusi jika permintaan gagal. Pesan kesalahan akan ditampilkan dalam elemen dengan ID status.
*/