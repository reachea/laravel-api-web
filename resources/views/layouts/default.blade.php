<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>@yield('head_title')</title>
</head>
<body>
  <header class="container">
    @include('layouts.navbar')
  </header>

  <main class="container">
    @yield('content')
  </main>
</body>
</html>