@extends('layouts.app')

@section('main_content')
<div class="container">
	<h1>I miei post</h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Title</th>
				<th scope="col">Slug</th>
				{{-- <th scope="col">Creato il</th> --}}
				<th scope="col">Modificato il</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@forelse ($posts as $post)
			<tr>
				<th scope="row">{{ $post->id }}</th>
				<td>{{ $post->title }}</td>
				<td>{{ $post->slug }}</td>
				{{-- <td>{{ $post->created_at }}</td> --}}
				<td>{{ $post->updated_at }}</td>
				<td class="d-flex justify-content-end align-items-center">
					Actions
				</td>
			</tr>
			@empty
			<tr>
				<td colspan="5">
					<h3>Non ci sono post.</h3>
				</td>
			</tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection