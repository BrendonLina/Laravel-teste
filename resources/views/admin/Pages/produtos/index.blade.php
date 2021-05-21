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
	.last{background: rgb(0, 255, 242);}
</style>
@endpush

@push('scripts')

	<script>document.body.style.background = '#1024'</script>
@endpush

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  ...
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>

