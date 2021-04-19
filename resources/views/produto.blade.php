<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> PAGINA DE PRODUTO </h1>
	<hr>
	<form method="POST">
		@csrf

		<b>Produto</b>
		<input type="text" name="Produto"><br></br>

		<b>Preço</b>
		<input type="text" name="Preco"><br></br>

		<b>Categoria</b>
		<input type="text" name="Categoria"><br></br>

		<input type="submit" value="salvar">

	</form>
	<hr>

	<label> Produto : {{$produto}} </label><br>
	<label> Preço : {{$preco}} </label><br>
	<label> Categoria : {{$categoria}} </label><br>
</body>
</html>