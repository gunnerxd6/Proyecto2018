@extends('vistas.index')
@section('Titulo')
Detalle tarea
@endsection


@section('Contenido')
<h2>Detalle de tarea</h2>
<br>
<h3>Nombre del trabajador: {{ $tarea->trabajador->nombre }} {{ $tarea->trabajador->apellido_paterno }} {{ $tarea->trabajador->apellido_materno }}</h3>

<table class="table table-hover table-striped table-bordered">
	<tr>
		<td><strong>Id tarea</strong></td>
		<td>{{ $tarea->id }}</td>
	</tr>
	<tr>
		<td><strong>Fecha de asignación</strong></td>
		<td>{{ $tarea->created_at }}</td>
	</tr>
	<tr>
		<td><strong>Descripción</strong></td>
		<td>{{ $tarea->descripcion }}</td>
	</tr>

	<tr>
		<td><strong>Estado</strong></td>
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
	</tr>


</table>
@endsection
