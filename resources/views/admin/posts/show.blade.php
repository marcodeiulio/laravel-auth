@extends('layouts.app')
@section('main_content')
<div class="container">
	<a href="{{ route('admin.posts.index') }}" class="btn btn-big btn-outline-info">Back to Index</a>
	<div class="d-flex justify-content-center">
		<div class="card" style="width: 18rem;">
			<img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
			<div class="card-body">
				<h5 class="card-title">{{ $post->title }}</h5>
				<p class="card-text">{{ $post->content }}</p>
			</div>
		</div>
	</div>
</div>
@endsection