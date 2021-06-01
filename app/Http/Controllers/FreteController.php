<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class FreteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
   {
    
    //$cep = $request->input('cep');

    $cep = 22620020;

    $cepes = 31170470;

    $qtd = 1;
    
    $header = array();
    $header = [
    'token' => 'CB3EB3B5RD2C2R4A75RA298R1AD86A3C48C5',
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
    ];

    $response = Http::withHeaders($header)->post('http://api.frenet.com.br/shipping/quote', [
    "SellerCEP" => $cep,
'RecipientCEP'=> $cepes,
'ShipmentInvoiceValue'=> '320.685',
'ShippingServiceCode'=> null,
'ShippingItemArray'=> [
    [
        'Height'=> '2',
        'Length'=> '33',
        'Quantity'=> $qtd,
        'Weight'=> '1.18',
        'Width'=> '47',
        'SKU'=> 'IDW_54626',
        'Category'=> 'Running',
    ],
    [
    
        'Height'=> '5',
        'Length'=> '15',
        'Quantity'=> '1',
        'Weight'=> '0.5',
        'Width'=> '29',
       ], 
    
],
'RecipientCountry'=> 'BR',
   
     
 ]);
    
    $response = json_decode($response,true);
    return view('frete', ['response'=>$response]);
    //dd($response); 
    //return $response;
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
