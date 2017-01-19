@extends('main')

@section('titulo' , 'Ver entrada')

@section('contenido')

	<div class="row">
		<div class="col-md-8">

			<h1>{{ $post->titulo }}</h1>

			<hr>

			<p class="lead">{{ $post->cuerpo }}</p>

		</div>

		<div class="col-md-4">
		
			<div class="well">
				
				<dl class="dl-horizontal">
					<label>URL: </label>
					<p><a href="{{ url('blog', $post->slug) }}">{{ url('blog', $post->slug) }}</a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Creado: </label>
					<p>{{ date("M j, Y g:i a", strtotime($post->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Actualizado: </label>
					<p>{{ date("M j, Y g:i a", strtotime($post->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit' , 'Editar' , array($post->id) , array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::Open(['route'=>['posts.destroy', $post->id], 'method'=> 'DELETE']) !!}

						{{  Form::submit('Eliminar', ['class' => 'btn btn-danger btn-block'])}}


						{!! Form::close() !!}
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						{!! Html::linkRoute('posts.index' , 'Ver todas las entradas' , array() , array('class' => 'btn btn-default btn-block', 'style' => 'margin-top: 10px;')) !!}
					</div>

					
				</div>

			</div>

		</div>

	</div>

	

@endsection