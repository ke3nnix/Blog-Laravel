@extends('main')

@section('titulo' , 'Blog')

@section('contenido')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
		</div>
	</div>

	@foreach($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{ $post->titulo }}</h2>
			<h5>Publicado: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
			<p>{{ substr($post->cuerpo, 0, 300) }} {{ strlen($post->cuerpo) >= 300 ? "..." : ""  }}</p>
			<div class="text-right">
            	<a href="{{ url('blog', $post->slug) }}" class="btn btn-primary">Leer más</a>
        	</div>


			@if((!$loop->last))
				<hr>
			@endif

		</div>
	</div>
	@endforeach

	<div class="row">
		<col-mod-12>
			<div class="text-center">{!! $posts->links() !!}</div>
		</col-mod-12>
	</div>

@endsection