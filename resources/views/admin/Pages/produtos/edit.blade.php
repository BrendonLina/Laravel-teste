@extends('admin.layouts.template')

@section('title', "Editar Produtos {$produto->name}")
    


@section('content')
    <h1>Editar Produto {{ $produto->name }}</h1>
    
    <form action="{{ route('products.update', $produto->id) }}" method="post">
        {{-- método abaixo alternativo de enviar um verbo http em caso e edit e update --}}
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="nome" value="{{ $produto->name }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="preco" placeholder="preço" value="{{ $produto->price }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="descricao" placeholder="descrição" value="{{ $produto->description }}">
        </div>

        <button type="submit" name="enviar">Enviar</button>
    </form>
    
@endsection