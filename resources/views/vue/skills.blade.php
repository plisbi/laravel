@extends('layout_test')


@section('header')
    <title>Skills</title>
@stop



@section('content')
    <div id="app" class="text-center">

        <div class="title">
            <h1>@{{ fullName }}</h1>
        </div>

        <input type="text" v-model="first" placeholder="first name">
        <input type="text" v-model="last" placeholder="last name">

        <h3>Skill: @{{ skill }}</h3>
        <input type="text" v-model="points"/>


    </div> <!-- end of the #app  -->

    <script>

        new Vue({
            el:         'body',
            data:       {

                first:  'Francisco',
                last: 'Alegre',
                points: 300

            },
            computed:   {

                skill: function (){
                    if(this.points <=100){

                        return 'Begginers';

                    }else if(this.points >100 && this.points<=200){

                        return 'Intermediate';

                    }

                    return 'Advanced';
                },

                fullName:   function(){

                    return this.first + ' ' + this.last
                }

            },
//            watch:      {
//
//                first:  function (first) {
//                    this.fullName = first + ' ' + this.last
//                },
//
//                second:  function (last) {
//                    this.fullName = this.first + ' ' + last
//                }
//
//            },
            methods: {

            }

        });

    </script>

@stop

@section('footer')
    {{--<div class="footer" >Footer section</div>--}}
@stop
