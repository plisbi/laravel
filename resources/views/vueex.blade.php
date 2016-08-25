@extends('layout_test')

@section('header')

@stop


@section('content')


    <div id="app">

        <form action="">
            <span class="error" v-if="!message">
                You must enter a message
            </span>

<br/>
            <textarea v-model="message"></textarea>
<br/>

            <button type="submit" v-show="message">
                Send Message
            </button>

        </form>

        <pre>

        @{{ $data | json }}

        </pre>

        {{--<a href="@{{ action('PagesController@about') }}">--}}
        <a href="@{{ url('/about') }}">
            Send Message
        </a>

    </div>

    <script>

        new Vue({
            el: '#app',
            data: {
                message: ''
            }
        })
    </script>

@stop



@section('footer')

@stop