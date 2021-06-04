@extends('admin.layouts.template')

@section('title', 'Cadastrar novo produto')
    


@section('content')
    <h1>cadastrar novo produto</h1>
    
    @if($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul> 
        </div>    
    @endif()

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="form">
        @include('admin.Pages.produtos.formularios.form')
        
    </form>
    
@endsection