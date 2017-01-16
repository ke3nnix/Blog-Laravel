@extends('main')

@section('titulo' , 'Editar entrada del Blog')

@section('contenido')

	<div class="row">

		{!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}

		<div class="col-md-8">

			{{ Form::label('titulo' , 'Titulo:') }}
			
			{{ Form::text('titulo' , null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('cuerpo' , 'Cuerpo del mensaje:', ["style" => 'margin-top:20px;']) }}

			{{ Form::textarea('cuerpo', null, ["class" => 'form-control']) }}

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
						{!! Html::linkRoute('posts.show' , 'cancelar' , array($post->id) , array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('guardar', array('class' => 'btn btn-success btn-block')) }}

					</div>
				</div>

			</div>

		</div>

		{!! Form::close() !!}

	</div>

@endsection