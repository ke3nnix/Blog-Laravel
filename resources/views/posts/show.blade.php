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
					<dt>Creado: </dt>
					<dd>{{ date("M j, Y g:i a", strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Actualizado: </dt>
					<dd>{{ date("M j, Y g:i a", strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit' , 'editar' , array($post->id) , array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::Open(['route'=>['posts.destroy', $post->id], 'method'=> 'DELETE']) !!}

						{{  Form::submit('eliminar', ['class' => 'btn btn-danger btn-block'])}}


						{!! Form::close() !!}
					</div>
					</div>

			</div>

		</div>

	</div>

	

@endsection