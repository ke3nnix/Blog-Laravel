@extends('main')

@section('titulo' , 'Crear nueva entrada')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('contenido')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Crear un nueva entrada</h1>
			<hr>

			{!! Form::open(['route' => 'posts.store' , 'data-parsley-validate' => '']) !!}
			    
				{{ Form::label('titulo', 'Título:') }}
				{{ Form::text('titulo' , null, array('class'=> 'form-control','required' => '', 'maxlength' => '255')) }}

				{{ Form::label('cuerpo', 'Texto de la entrada:', array('style' => 'margin-top: 20px;'))}}
				{{ Form::textarea('cuerpo', null, array('class' => 'form-control', 'required' => ''))}}


				{{ Form::submit('Crear entrada', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

			{!! Form::close() !!}


		</div>
	</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection