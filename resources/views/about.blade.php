@extends('layout_test')


@section('header')
    <title>About</title>
@stop

@section('content')
    <div id="app" class="text-center">
        <div class="title">
            <h1>The About Page Goes Here</h1>
        </div>


        <my-counter subject="Likes"></my-counter>
        <br/>
        <my-counter subject="Unlikes"></my-counter>
        <br/>
        <br/>

        <a href="{{ action('PagesController@skills') }}">
            Go to skills page
        </a>


    </div> <!-- end of the #app  -->

    <template id="counter-template">

        <h2>@{{ subject }}</h2>
        <button class="btn btn-lg btn-success" @click="count +=1">@{{ count }}</button>

    </template>

    <script>

        Vue.component('my-counter',{

            template:   '#counter-template',

            props:      ['subject'],

            data:       function(){
                            return {count : 0};
                        }

        });

        var about = new Vue({
            el:         '#app',
            methods: {
                cosa: function () {
                    return redirect('PagesController@vueex');
                }
            }

        });

    </script>

@stop

@section('footer')
    <div class="footer">Footer section</div>
@stop


