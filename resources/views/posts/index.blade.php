@extends('main')

@section('titulo' , 'Todas las entradas')

@section('contenido')

	<div class="row">
		<div class="col-md-10">
			<h1>Todas las entradas</h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Nueva entrada</a>
		</div>
		
		<div class="col-md-12">
			<hr> 
		</div>
	</div> <!-- FIN DEL ROW -->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Título</th>
					<th>Cuerpo</th>
					<th>Creado el</th>
					<th></th>
				</thead>

				<tbody>
					@foreach($posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->titulo }}</td>
							<td>{{ substr($post->cuerpo, 0, 30)}}{{ strlen($post->cuerpo) > 15 ? "..." : "" }}</td>
							<td>{{ date("M j, Y", strtotime($post->created_at)) }}</td>
							<td>
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">ver</a>
								<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">editar</a>
							</td>
						</tr>

					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection