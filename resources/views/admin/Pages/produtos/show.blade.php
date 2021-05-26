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

@endsection