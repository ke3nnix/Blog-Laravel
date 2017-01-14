@extends('main')

@section('titulo' , 'Crear nueva entrada')

@section('contenido')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Crear un nueva entrada</h1>
			<hr>

			{!! Form::open(['route' => 'posts.store']) !!}
			    
				{{ Form::label('titulo', 'Título:') }}
				{{ Form::text('titulo' , null, array('class'=> 'form-control', 'style' => 'margin-bottom: 20px;')) }}

				{{ Form::label('cuerpo', 'Texto de la entrada:')}}
				{{ Form::textarea('cuerpo', null, array('class' => 'form-control'))}}


				{{ Form::submit('Crear entrada', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

			{!! Form::close() !!}


		</div>
	</div>

@endsection