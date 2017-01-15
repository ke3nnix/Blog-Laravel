@if(Session::has('exito'))
	
	<div class="alert alert-success" role="alert">
		<strong>Éxito:</strong> {{Session::get('exito')}}
	</div>

@endif

@if(!$errors->isEmpty())

	<div class="alert alert-danger" role="alert">
		<strong>Errores:</strong>
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>

@endif