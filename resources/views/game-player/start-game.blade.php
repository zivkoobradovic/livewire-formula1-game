<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>F1</title>

    <!-- Bootstrap -->
    <link href="{{asset('game/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('game/css/rest.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <audio id="correct-audio" src="{{asset('game/sounds/collect-5930.mp3')}}"></audio>


    <div class="loader"></div>
    <div class="correct-pop">
      <div class="correct-pop-content"></div>
    </div>
    <div class="game-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-4">
                    <div class="game-status">
                        <h5>Game <span>1</span> of 4</h5>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <div class="game-logo text-anime">
                        <img src="{{asset('game/img/logo.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-xs-4">
                    <div class="game-time">
                        <h5><span class="pulse">00:00:00</span></h5>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="game-footer">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="game-footer-logo">
                      <img src="{{asset('game/img/logo_otf.svg')}}">
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="game-view" id="game-1">
        <div class="game-holder">
            <div class="game-content">
                <div class="container">
                    <div>
                        <div class="col-md-12">
                            <h1>Find the race track<br>Jeddah Corniche Circuit</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="track-slot" data-id="2">
                                <small>Drag here</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="track-list">
                                <li>
                                    <div class="track-box">
                                        <img src="{{asset('game/img/china.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="track-box">
                                        <img src="{{asset('game/img/spain.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="track-box" data-track="1">
                                        <img src="{{asset('game/img/jeddah.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="track-box">
                                        <img src="{{asset('game/img/italy.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="track-box">
                                        <img src="{{asset('game/img/monaco.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="track-box">
                                        <img src="{{asset('game/img/germany.png')}}" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="game-view" id="game-2">
        <div class="game-holder">
            <div class="game-content">
                <div class="container">
                    <div>
                        <div class="col-md-12">
                            <h1>Put the parts<br>in the right place</h1>
                        </div>
                        <div class="col-md-8 col-md-push-2">
                            <div class="car-holder">
                                <div class="part-slot part-slot-1" data-part="1"></div>
                                <div class="part-slot part-slot-2" data-part="2"></div>
                                <div class="part-slot part-slot-3" data-part="3"></div>
                                <img src="{{asset('game/img/f1_car.png')}}" width="100%">
                            </div>
                        </div>
                        <div class="col-md-2 col-md-push-2">
                            <ul class="part-list">
                                <li>
                                    <div class="part-box" data-part="1"><img src="{{asset('game/img/part1.png')}}"></div>
                                </li>
                                <li>
                                    <div class="part-box" data-part="2"><img src="{{asset('game/img/part2.png')}}"></div>
                                </li>
                                <li>
                                    <div class="part-box" data-part="3"><img src="{{asset('game/img/part3.png')}}"></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="game-view" id="game-3">
        <div class="game-holder">
            <div class="game-content">
                <div class="container">
                    <div>
                        <div class="col-md-12">
                            <h1>Select the<br>finish flag</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="flag-slot" data-id="2">
                                <small>Drag here</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="flag-list">
                                <li>
                                    <div class="flag-box">
                                        <img src="{{asset('game/img/flag1.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="flag-box">
                                        <img src="{{asset('game/img/flag2.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="flag-box">
                                        <img src="{{asset('game/img/flag3.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="flag-box" data-box="122">
                                        <img src="{{asset('game/img/flag4.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="flag-box">
                                        <img src="{{asset('game/img/flag5.png')}}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="flag-box">
                                        <img src="{{asset('game/img/flag6.png')}}" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="game-view" id="game-4">
        <div class="game-holder">
            <div class="game-content">
                <div class="container">
                    <div>
                        <div class="col-md-12">
                            <h1>Who is <br>the winner?</h1>
                        </div>
                        <div class="col-md-2">
                            <ul class="winner-list">
                                <li>
                                  <div class="winner-box" data-winner="2"><img src="{{asset('game/img/winner1.png')}}"></div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <div class="winner-holder">
                                <div class="winner-slot winner-slot-1" data-winner="1"></div>
                                <div class="winner-slot winner-slot-2" data-winner="2"></div>
                                <img src="{{asset('game/img/podium.png')}}" width="100%">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <ul class="winner-list">
                                <li>
                                  <div class="winner-box" data-winner="1"><img src="{{asset('game/img/winner2.png')}}"></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="game-view" id="game-5">
        <div class="game-holder">
            <div class="game-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Prepare the<br>driver for the race</h1>
                        </div>
                        <div class="col-md-4 col-md-push-4">
                            <div class="driver-holder">
                                <div class="suit-slot suit-slot-1" data-suit="1"></div>
                                <div class="suit-slot suit-slot-2" data-suit="2"></div>
                                <div class="suit-slot suit-slot-3" data-suit="3"></div>
                                <div class="suit-slot suit-slot-4" data-suit="4"></div>
                                <img src="{{asset('game/img/driver.png')}}" width="100%">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-md-push-3">
                            <ul class="suit-list">
                                <li>
                                    <div class="suit-box" data-suit="1"><img src="{{asset('game/img/suit1.png')}}"></div>
                                </li>
                                <li>
                                    <div class="suit-box" data-suit="2"><img src="{{asset('game/img/suit2.png')}}"></div>
                                </li>
                                <li>
                                    <div class="suit-box" data-suit="3"><img src="{{asset('game/img/suit3.png')}}"></div>
                                </li>
                                <li>
                                    <div class="suit-box" data-suit="4"><img src="{{asset('game/img/suit4.png')}}"></div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <form action="{{ route('end-game', ['player' => $player->slug]) }}" method="POST" id="formEnd">
        @csrf
        <input type="hidden" class="result" name="result">
    </form>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js">
    </script>
    <script src="{{asset('game/js/jquery.stopwatch.js')}}"></script>
    <script src="{{asset('game/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('game/js/main.js')}}"></script>

</body>

</html>
