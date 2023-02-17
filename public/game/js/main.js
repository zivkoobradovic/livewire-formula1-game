var game = 1;
///GAME TRACK///
$('.track-box').draggable( {
  containment: '#game-1',
  stack: '.track-box',
  cursor: 'move',
  revert: true
} );
$('.track-slot').droppable( {
  accept: '.track-box',
  hoverClass: 'hovered',
  drop: handleTrackDrop
} );
function handleTrackDrop(event, ui) {
  var id = ui.draggable.data('track');
  if(id === 1) {
  $('.track-box').draggable('disable');
  ui.draggable.position({
    of: $(this), my: 'center center', at: 'center center'
  });
  ui.draggable.addClass('correct');
  ui.draggable.draggable('option', 'revert', false);
  nextGame();
  }
}
///GAME PART///
$('.part-box').draggable( {
  containment: '#game-2',
  stack: '.part-box',
  cursor: 'move',
  revert: true
} );

$('.part-slot').droppable( {
  accept: '.part-box',
  hoverClass: 'hovered',
  drop: handlePartDrop
} );

var correctPart = 0;
function handlePartDrop(event, ui) {
  var slotPart = $(this).data('part');
  var boxPart = ui.draggable.data('part');
  if (slotPart === boxPart) {
    ui.draggable.draggable('disable');
    ui.draggable.position({
      of: $(this), my: 'center center', at: 'center center'
    });
    ui.draggable.addClass('correct-part');
    ui.draggable.draggable('option', 'revert', false);
    correctPart++;
    if(correctPart === 3) {
      nextGame();
    }
  }
}
///GAME FLAG///
$('.flag-box').draggable( {
  containment: '#game-3',
  stack: '.flag-box',
  cursor: 'move',
  revert: true
} );

$('.flag-slot').droppable( {
  accept: '.flag-box',
  hoverClass: 'hovered',
  drop: handleFlagDrop
} );
function handleFlagDrop(event, ui) {
  var id = ui.draggable.data('box');
  if(id === 122) {
  ui.draggable.draggable('disable');
  $('.flag-box').draggable('disable');
  ui.draggable.position({
    of: $(this), my: 'top left', at: 'top left'
  });
  ui.draggable.addClass('correct');
  ui.draggable.draggable('option', 'revert', false);
  nextGame();
  }
}
///GAME DRIVER///
$('.suit-box').draggable( {
  containment: '#game-4',
  stack: '.suit-box',
  cursor: 'move',
  revert: true
} );
$('.suit-slot').droppable( {
  accept: '.suit-box',
  hoverClass: 'hovered',
  drop: handleSuitDrop
} );
var correctSuit = 0;
function handleSuitDrop(event, ui) {
  var slotSuit = $(this).data('suit');
  var boxSuit = ui.draggable.data('suit');
  if (slotSuit === boxSuit) {
    ui.draggable.draggable('disable');
    ui.draggable.position({
      of: $(this), my: 'center center', at: 'center center'
    });
    ui.draggable.addClass('correct-suit');
    ui.draggable.draggable('option', 'revert', false);
    correctSuit++;
    if(correctSuit === 4) {
      nextGame();
    }
  }
}
$('.text-anime').click(function() {
  // nextGame();
    $('#correct-audio').get(0).play();
});

function nextGame() {
  if(game < 4) {
    $('.text-anime').trigger('click');
    $('#game-'+game).fadeOut();
    game++;
    $('.correct-pop').fadeIn(function(){


    }).delay(300).fadeOut(function(){
      $('#game-'+game).slideDown();
      $('.game-status span').text(game);
    });




  } else {
    $('.loader').slideDown(function() {
      $('.game-time span').stopwatch().stopwatch('stop');
      $('.result').val($('.game-time span').text());
      $('#formEnd').submit();
    });
  }
}
$(document).ready(function() {
    $('.loader').delay(1000).slideUp(function() {
      $('.game-time span').stopwatch().stopwatch('start');
    });
});
