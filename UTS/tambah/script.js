$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
                if (response === 'success') {
                    $('#message').text('Login successful.');
                    window.location.href = 'profile.php';
                } else {
                    $('#message').text('Invalid username or password.');
                }
            }
        });
    });
});
