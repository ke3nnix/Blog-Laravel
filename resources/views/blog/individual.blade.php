@extends('main')

@section('titulo', $post->titulo)

@section('contenido')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->titulo }}</h1>
			<hr>
			<p>{{ $post->cuerpo }}</p>
		</div>
	</div>

@endsection
