<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>M-Connect</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @include('components.navbar')
  @yield('content')
  @include('components.footer')
</body>
</html>