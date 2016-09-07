@extends('layout_test')



@section('content')

	<h1>First test vue-laravel</h1>

	@unless (empty($people))

		Make a list of people:

		@foreach ($people as $person)

			<li>{{  $person }}</li>

		@endforeach
	@endunless

@stop



