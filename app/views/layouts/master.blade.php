<!doctype html>
<html>
    <head>
        <title>{{ HTML::full_title(@fetch('title')) }}</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
