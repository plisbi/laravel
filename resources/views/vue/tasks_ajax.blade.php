@extends('layout_test')


@section('header')
	<title>Task</title>
@stop

@section('content')
<div id="app-tasksajax">
	<div class="container">
		<tasksajax> </tasksajax>
	</div>

	<template id="tasks-ajax-template">

		<h2>Ajax tasks there is an issue when you changed from jquery to vue resource</h2>

		<ul class="list-group">
			<li class="list-group-item" v-for="ajaxtasks in list">
				@{{ ajaxtasks.body }}
				<strong @click="delete(ajaxtasks)">X</strong>
			</li>
		</ul>

	</template>
</div>
@stop

@section('footer')
	<script src='{{ asset('js/tasksajax.js') }}'></script>
@stop