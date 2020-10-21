<!DOCTYPE html>
<html>
<head>
	<title>ESTUDIANTE NUEVO</title>
</head>
<body>
<h3>ESTUDIANTE NUEVO</h3>

{{ Form::open(array('method'=>'post', 'route'=>'estudiante.guardar', 'name'=>'fEstudiante', 'id'=>'fEstudiante')) }}

	{{ Form::label('nombres', 'Nombres: ') }}
	{{ Form::text('nombres', '', ['id'=>'nombres', 'placeholder'=>'Inserte su nombre completo']) }}<br>
	{{ Form::label('ru', 'RU: ') }}
	{{ Form::number('ru', '', ['id'=>'ru', 'placeholder'=>'Inserte su RU ']) }}<br>
	{{ Form::label('email', 'Correo electronico: ') }}
	{{ Form::email('email', '', ['id'=>'email', 'placeholder'=>'Inserte su correo electronico', 'required'=>'true']) }}<br>
	{{ Form::submit('Guardar') }}
	{{ Form::reset('Borrar') }}
{{ Form::close() }}
</body>
</html>