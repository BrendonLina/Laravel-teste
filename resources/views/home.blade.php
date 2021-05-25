<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>PAGINA PRINCIPAL </h1>

	<!--<br>Seja bem-vindo: <b>{{--$usuario}}</b></br>
	<br>Seu cargo é: <b>{{$perfil}}</b></br>
	<br>Sua empresa é: <b>{{$empresa--}}</b></br>-->
	<form action="" method="POST">
		@csrf
	<input type="text" name="cep" placeholder="00000-000"><br>
	<input type="text" name="cepe" placeholder="rua"><br>
	<input type="text" name="cepe" placeholder="{{$produtos}}"><br>
	<input type="text" name="cepe" placeholder="{{$cepe}}"><br>
	<label><br> {{$response['CEP']}} </label>
	<label><br> {{$response['Street']}} </label>
	<input type="submit" value="Ok"><br>

	
	
	
	
	</form>
	
</body>
</html>