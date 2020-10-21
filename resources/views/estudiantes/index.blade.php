<!DOCTYPE html>
<html>
<head>
	<center><title>LISTA DE ESTUDIANTES</title><center>
</head>
<body>
<h3>LISTA DE ESTUDIANTES</h3>
<?php $i = 0; ?>
{{--Html::link(route('estudiante.crear_nuevo'), 'Crear')--}}<br>
<table align="center" width="80%" border="1">
	<thead>
		<tr>
			<th>NRO.</th>
			<th>NOMBRE</th>
			<th>RU</th>
			<th>FECHA DE INGRESO</th>
			<th>EMAIL</th>
			<th>ACCION</th>
		</tr>
	</thead>
	<tbody>
		@foreach($estudiantes as $estudiante)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $estudiante->nombres}}</td>
			<td>{{ $estudiante->ru }}</td>
			<td>{{ $estudiante->fecha_ingreso }}</td>
			<td>{{ $estudiante->email }}</td>
			<td aling="center">EDITAR | MOSTRAR</td>
		</tr>
		@endforeach
	</tbody>
	
</table>
</body>
</html>