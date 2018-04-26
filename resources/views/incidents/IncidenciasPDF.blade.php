<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Incidencias</title>
</head>
<body>
	<h1>Listado de Incidencias</h1>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<td><h3>Código</h3></td>
				<td><h3>Proyecto</h3></td>
				<td><h3>Descripción</h3></td>
				<td><h3>Severidad</h3></td>
				<td><h3>Estado</h3></td>
				<td><h3>Categoría</h3></td>
				<td><h3>Nivel</h3></td>
				<td><h3>Reportó</h3></td>
				<td><h3>Soporte</h3></td>
				<td><h3>Reportado</h3></td>
			</tr>
		</thead>
		<tbody>
			@foreach($incidents as $incident)
                <tr>
                	<td>
                        <a href="/ver/{{$incident->id}}">
                            {{$incident->id}}
                        </a>
                    </td>
                    <td>{{$incident->title}}</td>
                    <td>{{$incident->description}}</td>
                    <td>{{$incident->severity}}</td>
                    <td>{{$incident->state}}</td>
                	<td>{{$incident->category_name}}</td>
                	<td>{{$incident->level->name}}</td>
                	<td>{{$incident->client->name}}</td>
                	<td>{{$incident->support_name}}</td>
                	<td>{{$incident->created_at}}</td>
                </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>