<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Document</title>

        <link href='{{ asset('css/style.css') }}' rel='stylesheet'>


        @yield('header')

    </head>

    <body>

        @yield('content')

        @yield('footer')

    </body>

</html>