@include('layouts.head')

@section('title')
	Nueva Persona
@endsection

	<div class="container">
		<form action={{url('/registrar')}} method="POST">
			@csrf
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" maxlength="20" class="form-control">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" id="apellido" placeholder="Apellido" maxlength="20" class="form-control">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="Email" maxlength="50" class="form-control">
				<input type="submit" name="btn_registrar" value="Registrar" class="btn btn-success mt-2">
			</div>
		</form>
	</div>

@include('layouts.footer')