@extends('admin.layouts.template')

@section('title', 'Editar Produtos')
    


@section('content')
    <h1>Editar Produto {{ $id }}</h1>
    
    <form action="{{ route('products.update', $id) }}" method="post">
        {{-- método abaixo alternativo de enviar um verbo http em caso e edit e update --}}
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        @method('PUT')
        @csrf
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="descricao" placeholder="descrição">
        <button type="submit" name="enviar">Enviar</button>
    </form>
    
@endsection