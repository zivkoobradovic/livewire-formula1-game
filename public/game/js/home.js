
$(document).ready(function() {
    $('.loader').delay(1000).fadeOut(function() {

    });
});

$('.pushable').click(function() {
    $('#correct-audio').get(0).play();
    $('#wrong-audio').get(0).play();

});
