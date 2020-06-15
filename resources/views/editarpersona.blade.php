@include('layouts.head')
	
	<div class="container">
		<form action={{url("/update/$persona->id")}} method="post">
			@csrf
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" maxlength="20" class="form-control" value={{$persona->nombre}}>
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" id="apellido" placeholder="Apellido" maxlength="20" class="form-control" value={{$persona->apellido}}>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="Email" maxlength="50" class="form-control" value={{$persona->email}}>
				<input type="submit" name="btn_guardar" value="Guardar" class="btn btn-success mt-2">
			</div>
		</form>
	</div>

@include('layouts.footer')