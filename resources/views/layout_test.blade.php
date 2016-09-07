<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.0/vue-resource.js"></script>

        <link href='{{ asset('css/style.css') }}' rel='stylesheet'>

        @yield('header')

    </head>

    <body>

        @yield('content')

        @yield('footer')

        <script src='{{ asset('js/main.js') }}'></script>

    </body>

</html>