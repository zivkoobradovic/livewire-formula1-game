<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'F1') }}</title>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    @livewireStyles
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

  <div class="loader">

  </div>
    <div class="bg-gray-900">
        {{ $slot }}
        {{-- @yield('content') --}}
    </div>
    @livewireScripts
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js">
</script>
<script src="{{asset('game/js/jquery.stopwatch.js')}}"></script>
<script src="{{asset('game/js/bootstrap.min.js')}}"></script>
<script src="{{asset('game/js/home.js')}}"></script>

</html>
