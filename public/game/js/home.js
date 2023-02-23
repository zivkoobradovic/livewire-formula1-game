
$(document).ready(function() {
    $('.loader').delay(1000).fadeOut(function() {

    });
    $('form input').keyup(function() {
      $(this).val($(this).val().toLowerCase());
    });

});
