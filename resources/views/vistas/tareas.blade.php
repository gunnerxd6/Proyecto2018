@extends('vistas.index')
@section('Titulo')
Tareas
@endsection


@section('Contenido')
<h2>Listado de tareas</h2>
<br>
<a class="btn btn-primary pull-right">Administrar trabajadores</a>


<br>
<table class="table table-hover table-striped">
	<tr>
		<thead>
			<th width="20px">ID</th>
			<th>id trabajador</th>
			<th>Descripción</th>
			<th>Estado</th>
			<th colspan="3">&nbsp;</th>
		</thead>
		<tbody>
			@foreach($tareas as $tarea)
				<tr>
					<td>{{ $tarea->id }}</td>
					<td>{{ $tarea->trabajador->nombre }}</td>
					<td>{{ $tarea->descripcion }}</td>
					<td>{{ $tarea->estado }}</td>
					<td>Ver</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			@endforeach
		</tbody>
	</tr>
</table>

{!! $tareas->render() !!}

<hr>
@endsection
