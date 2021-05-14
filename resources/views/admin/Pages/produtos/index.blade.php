@extends('admin.layouts.template')

@section('title')

Gestão de Produtos

@endsection()

{{-- inicio da sessão @section + o nome dela entre '' ou seja content --}}
@section('content')
<h1>Exibindo produtos</h1>
<a href="{{ route('products.create') }}"> Cadastrar</a>
    <hr>

{{-- verificação se o campo esta preenchido --}}
@if(isset($produtos))
	{{-- ao dar foreach padrao e colocar variavel no plural e depois no singular --}}
	@foreach($produtos as $produto)
		<p>{{ $produto }} </p>
	@endforeach 
	@else 
		Lista vazia !
@endif
<hr>
@if(isset($testing))
	@foreach($testing as $testin)
		<p class=" @if ($loop->last) last @endif"> {{ $testin }} </p>
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
	{{-- oposto de if --}}
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

@push('styles')
<style>
	.last{background: red;}
</style>
@endpush

@push('scripts')

	<script>document.body.style.background = '#999'</script>
@endpush

