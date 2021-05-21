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

	<label><br> {{$response['CEP']}} </label>
	<label><br> {{$response['Street']}} </label>
	<label><br> {{$response['District']}} </label>
	<label><br> {{$response['City']}}/{{$response['UF']}} </label>
	
	
	
	
	
	{{--@foreach ($response as $responses)
		<label> Nome: {{ $responses['cep']}} </label>
	@endforeach--}}
	

</body>
</html>