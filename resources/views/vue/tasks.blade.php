@extends('layout_test')


@section('header')
	<title>Task</title>
@stop

@section('content')
	<h2>My task</h2>

	<ul class="list-group">
		@foreach ( $tasks as $task )
			<li class="list-group-item">
				{{ $task->body }}
			</li>
		@endforeach
	</ul>

@stop
