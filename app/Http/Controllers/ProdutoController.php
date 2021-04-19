<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request){
    	
    	//$dados = $request->all();

    	//método 1
    	//$produto = $dados['Produto'];
    	//$preco = $dados['Preco'];
    	//$categoria = $dados['Categoria'];

    	//método 2

    	//$produto = $request->query('Produto');
    	//$preco = $request->query('Preco');
    	//$categoria = $request->query('Categoria');

    	//método 3
    	  //$produto = $request->input('Produto');
    	  //$preco = $request->input('Preco');
    	  //$categoria = $request->input('Categoria');

    	//método 4

    	$dados=[
    		'produto'=>$request->input('Produto'),
    		'preco'=>$request->input('Preco'),
    		'categoria'=>$request->input('Categoria'),

    	];

    	return view('produto', $dados);
    	//return view('produto', ['produto'=>$produto, 'preco'=>$preco, 'categoria'=>$categoria]);
    }
}


