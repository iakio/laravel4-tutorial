<!doctype html>
<html>
  <head>
    <title>{{ HTML::full_title(@fetch('title')) }}</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css">
    {{ HTML::style('stylesheets/custom.css') }}
  </head>
  <body>
    @include('layouts._header')
    <div class="container">
      @yield('content')
      @include('layouts._footer')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
