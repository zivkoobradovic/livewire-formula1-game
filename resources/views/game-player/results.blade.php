<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Saudi GP</title>

    <!-- Bootstrap -->
    <link href="{{asset('game/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('game/css/rest.css?v2')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="overflow: scroll;">

  <div class="game-holder">
    <div class="game-content">
      <div class="container text-center">
        <div class="score-content">
          <div class="screenshot-holder">

            <div id="html-content-holder">
              <img src="{{asset('game/img/logo.png')}}">
              <h1>{{ $player->username }}</h1>
              <h2>{{ App\Services\Translate::getTranslation()[session('lang')]['score'] }}</h2>

              <p>{{ $player->result }}</p>


            </div>
          </div>

          <div class="clearfix"></div>
          <br>
          <small>{{ App\Services\Translate::getTranslation()[session('lang')]['share'] }}</small>
          <div>
            {!! $shareComponent !!}
          </div>
          <small>...or take a screenshot and share it on<br>Instagram / TikTok / Snapchat</small>
          <div class="clearfix">
          </div>
          <button class="btn btn-sm btn-primary take-screenshot">take a screenshot</button>
          <div class="clearfix">
          </div>
          <hr>
          @if (!empty(session('game_end')) && session('game_end') === $player->slug)
          <a href="/start-game/{{ $player->slug}}"
            class="btn btn-lg btn-primary bg-blue-500  hover:bg-blue-300 pushable">
            <span class="front">{{App\Services\Translate::getTranslation()[session('lang')]['race_again']}}</span>
          </a>
          @else
          <a href="/" class="btn btn-lg btn-primary bg-blue-500  hover:bg-blue-300 pushable">
            <span class="front">{{App\Services\Translate::getTranslation()[session('lang')]['race']}}</span>
          </a>
          @endif

        </div>



      </div>
      <div class="" id="previewImg">

      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

<script>
  $('.take-screenshot').click(function(){
  html2canvas(document.getElementById("html-content-holder"), {
        allowTaint: true, useCORS: true
    }).then(function (canvas) {
        var anchorTag = document.createElement("a");
        document.body.appendChild(anchorTag);
        anchorTag.download = "filename.jpg";
        anchorTag.href = canvas.toDataURL();
        anchorTag.click();
    });

});
(function (global) {

	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {

		noBackPlease();

		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };

    };

})(window);
</script>

</html>
