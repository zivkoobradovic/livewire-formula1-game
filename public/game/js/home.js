
$(document).ready(function() {
    $('.loader').delay(1000).fadeOut(function() {

    });
    $('form input').on('keyup input', function(){
      $(this).val($(this).val().toLowerCase());
    });

});
