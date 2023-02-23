
$(document).ready(function() {
    $('.loader').delay(1000).fadeOut(function() {

    });
    $('.email-input').on('keyup touchend input change', function(){
      $(this).val($(this).val().toLowerCase());
    });
    setTimeout(function() {
    $('.email-input').val($('.email-input').val().toLowerCase());
  }, 500);

});
