@if(Session::has('success'))
	
	<div class="alert alert-success" role="alert">
		<strong>Éxito:</strong> {{Session::get('success')}}
	</div>

@endif