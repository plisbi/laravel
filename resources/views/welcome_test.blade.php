@extends('layout_test')



@section('content')

	<h1>The Welcome Page Goes Here</h1>

	@unless (empty($people))

		List of people:

		@foreach ($people as $person)

			<li>{{  $person }}</li>

		@endforeach
	@endunless

@stop



