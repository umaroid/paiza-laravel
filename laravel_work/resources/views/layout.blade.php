<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Laravel_lesson</title>
        @include('style-sheet')
    </head>
    <body>
        @include('nav')
        <div class='container'>
            @yield('content')            
        </div>
    </body>
</html>