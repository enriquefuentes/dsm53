<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
</head>
<body>
	<center>
	<h3>Consulta 01: Productos//tienda</h3>
	<TABLE>
		<tr>
			<td>Tienda</td>
			<td>Clave</td>
			<td>Empleado</td>
			<td>FN</td>
			<td>Edad</td>
		</tr>
		@foreach($query1 as $q1)
		<tr>
			<td>{{ $q1->tienda}}</td>
			<td>{{ $q1->clave}}</td>
			<td>{{ $q1->app}} {{ $q1->apm}}, {{ $q1->nombre}}</td>
			<td>{{ $q1->fn}}</td>
			<td></td>
		</tr>
		@endforeach
	</TABLE>
------------------------------------------------------------<br>

	<h3>Consulta 02: Productos//Tienda</h3>
	<table>
		<tr>
			<td>Tienda</td>
			<td>Clave</td>
			<td>Empleado</td>
			<td>FN</td>
			<td>Edad</td>
		</tr>
		@foreach($query2 as $q2)
		<tr>
			<td>{{ $q2->tienda}}</td>
			<td>{{ $q2->clave}}</td>
			<td>{{ $q2->app}} {{ $q1->apm}}, {{ $q1->nombre}}</td>
			<td>{{ $q2->fn}}</td>
			<td></td>
		</tr>
		@endforeach
	</table>
</center>
</body>
</html>