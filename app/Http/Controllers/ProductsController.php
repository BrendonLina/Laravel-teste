<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 1234;
        $teste2 = 4321;
        $teste3 = [1,2,3,4,5,6,7,8,9,10];
        $produtos = ['Tv' => 'samsung','asus'];
        $testing = ['bmw','mercedes','ford','volkswagen','chevrolet','fiat'];
        return view('admin.pages.produtos.index', compact('teste', 'teste2' , 'teste3', 'produtos', 'testing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //metodos para pegar informação do campo input ou qualquer outro campo
        //dd($request->all());
        //dd($request->only('nome', 'descricao'));
        //dd($request->input('nome', 'descricao', 'default'));
        //dd($request->except('_token', 'descricao'));
        if($request->file('foto')->isValid()){
            dd($request->file('foto')->store('produtos'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.produtos.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editando o produto {$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
