@extends('main')

@section('titulo' , 'Ver entrada')

@section('contenido')

	<h1>{{ $post->titulo }}</h1>

	<hr>

	<p class="lead">{{ $post->cuerpo }}</p>

@endsection