@extends('vistas.index')
@section('Titulo')
Tareas
@endsection

<br>
@section('Contenido')
<h2>Listado de tareas</h2>
<br>
<a href=" {{route ('tareas.create')}}" class="btn btn-success pull-right">Crear nueva tarea</a>

<a href=" {{route ('trabajadores.index')}}" class="btn btn-primary pull-right">Administrar trabajadores</a>

<br>
<br>
<br>
<table class="table table-hover table-striped">
	<tr>
		<thead>
			<th width="20px">ID</th>
			<th>Trabajador</th>
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
					<td>
						@if($tarea->estado==1)
							<span class="badge badge-primary">Asignada</span>
						@endif

						@if($tarea->estado==2)
							<span class="badge badge-info">En proceso</span>
						@endif

						@if($tarea->estado==3)
							<span class="badge badge-success">Terminada</span>
						@endif

					</td>
					<td>
						<a href="{{ route('tareas.show',$tarea->id) }}">Ver</a>

					</td>
					<td>Editar</td>
					<td>
						<form action="{{ route('tareas.destroy',$tarea->id) }}" method="POST">
						{{ csrf_field() }}	
						<input type="hidden" name="_method" value="DELETE">
						<button class="btn btn-danger">Eliminar</button>
						</form>

					</td>
				</tr>
			@endforeach
		</tbody>
	</tr>
</table>

{!! $tareas->render() !!}

<hr>
@endsection
