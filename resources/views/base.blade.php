
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>

  @livewireStyles

</head>
<body>

    @yield('content')

  <script src="{{ asset('js/app.js') }}" type="text/js"></script>


  @livewireScripts
</body>
</html>
