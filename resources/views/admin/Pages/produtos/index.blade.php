@extends('admin.layouts.template')

@section('title')

Gestão de Produtos

@endsection()

@section('content')


@if(isset($produtos))
	@foreach($produtos as $produto)
		<p>{{ $produto }} </p>
	@endforeach 
	@else 
		Lista vazia !
@endif
<hr>
<h1>funcionando ! ! !</h1>
	@if($teste === '1234')
		é igual !
	
	@elseif($teste == 1234)	
		É igual a 1234 !
	@else
		Não é igual !
	
	@endif()

	@unless($teste === '1234')
		Tudo errado irmão
	@else
		tudo certo !

	@endunless()

	@isset($teste2)
		<p>{{ $teste2 }}</p>
	@endisset
	
	@empty($teste3)
		<p>Vazio...</p>
	@else 
		Bom vazio não está !	
	@endempty

	@switch($teste)

		@case(44)
			valor de 44
			@break
		@case(55)
			valor de 55
			@break
		@case(123)
			valor de 123
			@break
		@default
			Nenhuma dessas :(

	@endswitch					

@endsection()