@extends('layout_test')

@section('header')
    <title>Plans</title>
@stop

@section('content')

<div id="app" class="text-center">

    <div v-for="plan in plans">

        <plan :plan="plan" :active.sync="active" inline-template>

            <!-- Template to show for each plan  the inline-template-->
            <div>

                <span>@{{ plan.name }}</span>

                <span>@{{ plan.price }} / month</span>

                <button @click="setActivePlan"
                v-show="plan.name !== active.name"
                >

                @{{ isUpgrade ? 'Upgrade' : 'Downgrade' }}

                </button>

                <span v-else>
               --> Current
            </span>

            </div>

        </plan>

    </div>


    {{--<!-- Template to show for each plan -->--}}
    {{--<template id="plan-template"></template>--}}

<div>

<script>

    Vue.component('plan', {
        //        template: '#plan-template',

                props: ['plan', 'active'],

                        computed: {

                    isUpgrade: function () {

                        return this.plan.price > this.active.price;

                    }

                },

                methods: {

                    setActivePlan: function (){
                        this.active = this.plan;
                    }

                }

            });

    new Vue({
        el: '#app',
        data: {

            plans: [
                {name: 'Enterprise', price: 100},
                {name: 'Pro', price: 50},
                {name: 'Personal', price: 10},
                {name: 'Free', price: 0}
            ],

            active: {}

        }

    });
</script>

@stop


@section('footer')

@stop