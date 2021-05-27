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
    
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="nome" value="{{ old('nome') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="preco" placeholder="preço" value="{{ old('preco') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="descricao" placeholder="descrição" value="{{ old('descricao') }}">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="foto">
        </div>
        <div class="form-group">
            <button type="submit" name="enviar" class="btn btn-success">Enviar</button>
        </div>
        
    </form>
    
@endsection