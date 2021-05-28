@extends('admin.layouts.template')

@section('title')

Gestão de Produtos

@endsection()

{{-- inicio da sessão @section + o nome dela entre '' ou seja content --}}
@section('content')
<h1>Exibindo produtos</h1>
<a href="{{ route('products.create') }}" class="btn btn-primary"> Cadastrar</a>
    <hr>
		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Preço</th>
					<th width="100">Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produtos as $produto)
				<tr>
					<td> {{ $produto->name }} </td>
					<td> {{ $produto->price }} </td>
					<td>
						<a href="{{ route('products.show', $produto->id)}}"> Detalhes</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	
	<hr>

@endsection()

@push('styles')
<style>
	.last{background: rgb(0, 255, 242);}
</style>
@endpush

@push('scripts')

	<script>document.body.style.background = '#1024'</script>
@endpush




