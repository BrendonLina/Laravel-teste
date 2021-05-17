@extends('admin.layouts.template')

@section('title', 'Cadastrar novo produto')
    


@section('content')
    <h1>cadastrar novo produto</h1>
    
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul> 
    @endif()
    
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nome" placeholder="nome" value="{{ old('nome') }}">
        <input type="text" name="descricao" placeholder="descrição" value="{{ old('descricao') }}">
        <input type="file" name="foto">
        <button type="submit" name="enviar">Enviar</button>
    </form>
    
@endsection