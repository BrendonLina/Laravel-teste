@extends('admin.layouts.template')

@section('title', 'Cadastrar novo produto')
    


@section('content')
    <h1>cadastrar novo produto</h1>
    
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="descricao" placeholder="descrição">
        <input type="file" name="foto">
        <button type="submit" name="enviar">Enviar</button>
    </form>
    
@endsection