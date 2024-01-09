<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Carozza App</title>
        @vite(['resources/css/app.css'])
    </head>
    <body>
        @yield('content')
        @vite(['resources/js/app.js'])
    </body>
</html>
