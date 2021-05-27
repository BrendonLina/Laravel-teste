<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductsRequest;
use Illuminate\Http\Request;
use App\Models\Product;

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
        
        $produtos = Product::get();
        
        $testing = ['bmw','mercedes','ford','volkswagen','chevrolet','fiat'];
        return view('admin.pages.produtos.index', ['produtos' => $produtos], compact('teste', 'teste2' , 'teste3','testing'));
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
     * @param  \Illuminate\Http\StoreUpdateProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductsRequest $request)
    {
        //método 1
        $data = $request->only('nome','price','description');

        Product::create($data);

        //$product = Product::create($data); 
        
        //Product::create($data);
        
        return redirect()->route('products.index');

        //forma alternativa de criar produto 

        //$product = new Product;
        //$product->name = $data['nome'];
        //ou
        //$product->name = $request->name;
        //$product->save();

        //método 2 

        //$data = $request->all();

        //Product::create($data);

        //$product = new Product;


        //dd('Tudo pronto vamos trabalhar !');
        //metodos para pegar informação do campo input ou qualquer outro campo
        //dd($request->all());
        //dd($request->only('nome', 'descricao'));
        //dd($request->input('nome', 'descricao', 'default'));
        //dd($request->except('_token', 'descricao'));
        //if($request->file('foto')->isValid()){
            //dd($request->file('foto')->store('produtos'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //$produto = Produto::where('id', $id)->first();
        
        if(!$produto = Product::find($id))
            return redirect()->back();
        
            return view('admin.pages.produtos.show', [
            'produto' => $produto
        ]);
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
