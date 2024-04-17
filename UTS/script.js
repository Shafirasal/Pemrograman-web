$(document).ready(function(){
    $('#login-form').submit(function(e){
      e.preventDefault();
      var formData = $(this).serialize();
      $.post('login.php', formData, function(response){
        if(response.status == 'success') {
          window.location.href = 'welcome.php';
        } else {
          $('#login-error').text(response.message);
        }
      }, 'json');
    });
  });
  