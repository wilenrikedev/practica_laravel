@include('layouts.head')
@section('title')
Listado de Personas
@endsection
	<div class="container">
		<table class="table table-bordered">
			<thead class="table-dark">
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($personas as $persona)
					<tr>
						<td>{{$persona->id}}</td>
						<td>{{$persona->nombre}}</td>
						<td>{{$persona->apellido}}</td>
						<td>{{$persona->email}}</td>

						<td>						
							<a href={{url("/editarPersona/$persona->id")}} class="btn btn-primary">Editar</a>	
							<a href={{url("/borrarPersona/$persona->id")}} class="btn btn-danger">Borrar</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<a href={{url('/nuevaPersona')}} class="btn btn-success">Nueva Persona</a>

	</div>
@include('layouts.footer')