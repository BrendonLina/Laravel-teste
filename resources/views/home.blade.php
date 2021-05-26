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
		<input type="text" name="cep" placeholder="cep">
		@if(isset($cepe))
		
		<label> O CEP : {{ $cepe }} </label>
		<label><br> {{$response['CEP']}} </label>
		<label><br> {{$response['Street']}} </label>
		<label><br> {{$response['District']}} </label>
		<label><br> {{$response['City']}}/{{$response['UF']}} </label>
		
		@endif
		

	<input type="submit" value="Ok"><br>

	
	
	
	
	</form>
	
</body>
</html>