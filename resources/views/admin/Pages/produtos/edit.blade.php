@extends('admin.layouts.template')

@section('title', "Editar Produtos {$produto->name}")
    


@section('content')
    <h1>Editar Produto {{ $produto->name }}</h1>
    
    <form action="{{ route('products.update', $produto->id) }}" method="post">
        {{-- método abaixo alternativo de enviar um verbo http em caso e edit e update --}}
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        @method('PUT')
        @include('admin.Pages.produtos.formularios.form')
    </form>
    
@endsection