<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.16/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.0/vue-resource.js"></script>

        {{--<script src="https://code.jquery.com/jquery.js"></script>--}}

        <link href='{{ asset('css/style.css') }}' rel='stylesheet'>

        @yield('header')

    </head>

    <body>

        <div id="main-nav">
            <!-- To stops the page from jumping when a link is clicked use the "prevent" modifier (short for preventDefault). -->
            <nav :class="active" >
                <!-- When a link in the menu is clicked, we call the makeActive method,
                     defined in the JavaScript Vue instance. It will change the value of "active". -->
                <a href="{{ action('PagesController@welcome_test') }}" class="home" @click="makeActive('home')">Home</a>
                <a href="#" class="vue-examples" @click="makeActive('vue-examples')" @click="show = false" >Vue Examples</a>
                <a href="#" class="services" @click="makeActive('services')">Services</a>
                <a href="#" class="contact" @click="makeActive('contact')">Contact</a>
            </nav>

            <p>
                Example that the nav works <b>@{{ active }}</b>
            </p>

        </div>

        @yield('content')

        @yield('footer')

        <script src='{{ asset('js/main.js') }}'></script>

    </body>

</html>