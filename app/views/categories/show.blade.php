@extends('layouts.defaults')

@section('content')

	<h3>Category {{ $category->name }}</h3>

	<ul>
		@foreach($posts as $post)
			<li>{{ $post->title }} by: {{ $post->author }}</li>
		@endforeach
	</ul>

@stop