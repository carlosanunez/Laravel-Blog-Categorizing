@extends('layouts.defaults')

@section('content')

	<h3>Latest Posts</h3>

	<ul>
		@foreach($posts as $post)
			<li>{{ $post->title }} <br>
				under: {{ $post->category->name }} <br />
				Comments: {{ count($post->comment) }} <br />
				<ul>
					@foreach($post->comment as $comment)
						<li>{{ $comment->comment_msg }}</li>
					@endforeach
				</ul>
			</li>
		@endforeach
	</ul>

@stop