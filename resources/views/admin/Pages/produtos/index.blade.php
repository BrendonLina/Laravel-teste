@extends('admin.layouts.template')

@section('title')

Gestão de Produtos

@endsection()

@section('content')
<h1>funciona aeeee</h1>
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
	@endempty				

@endsection()