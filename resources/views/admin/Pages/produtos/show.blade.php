@extends('admin.layouts.template')

@section('title', "Detalhes do Produto {$produto->name}")

@section('content')
<h1> Produto {{ $produto->name }}</h1>

<ul>
    <li><strong> Nome :</strong> {{ $produto->name}} </li>
    <li><strong> Preço :</strong> {{ $produto->price}} </li>
    <li><strong> Descrição :</strong> {{ $produto->description}} </li>
    <h1><a href="{{ route('products.index') }}"> <<</a></h1>       
    
</ul>

<form action=" {{ route('products.destroy', $produto->id) }}" method="POST">
@csrf
@method('delete')

<button type="submit" class="btn btn-danger btn-sm"> Deletar o produto : {{ $produto->id }}</button>


</form>

@endsection