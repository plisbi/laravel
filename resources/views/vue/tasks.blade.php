@extends('layout_test')


@section('header')
	<title>Task</title>
@stop

@section('content')

	<div class="container">
		<tasks list="{{ $tasks }}"></tasks>
	</div>

	<template id="tasks-template">

		<h2>My task</h2>

		<ul class="list-group">
			<li class="list-group-item" v-for="task in list">
				@{{ task.body }}
			</li>
		</ul>

	</template>

@stop
