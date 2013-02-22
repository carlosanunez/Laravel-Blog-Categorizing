@extends('layouts.defaults')

@section('content')

	<h3>Category</h3>
	
	<ul>
		@foreach($categories as $cat)
			<li>{{ $cat->name }}</li>
		@endforeach
	</ul>

@stop