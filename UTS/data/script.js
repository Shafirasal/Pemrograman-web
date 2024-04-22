$(document).ready(function() {
    $('form').submit(function(event) {
        var name = $('#name').val();
        var email = $('#email').val();
        var age = $('#age').val();

        if (name == '' || email == '' || age == '') {
            alert('Mohon lengkapi semua kolom!');
            event.preventDefault();
        }
    });
});
