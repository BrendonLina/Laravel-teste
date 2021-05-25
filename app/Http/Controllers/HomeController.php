<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;


class HomeController extends Controller
{
    public function index(Request $request){
    	
        /*$header = array();
        $header = [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
        'token' => 'CB3EB3B5RD2C2R4A75RA298R1AD86A3C48C5'
        ];*/
        
        
        $cepes = ['cepe' => 'aa', 'rua' => 'aa', 'uf' => 'aa', 'cidade' => 'aa', 'distrito' => 'aa'];
        $produtos = $request->input('cep');
        $cepe = $produtos;

        
        $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://api.frenet.com.br/CEP/Address/{$cepe}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Accept: application/json",
    "token: CB3EB3B5RD2C2R4A75RA298R1AD86A3C48C5"
    ));

    $response = curl_exec($ch);
    curl_close($ch);
    
    $duct = ['cep' => '1234567',
             'nome' => 'Cleber'];
    
    $response = json_decode($response,true);
   
    return view('home', compact('cepe', 'produtos','duct','cepes'), ['response'=>$response]);
    

    
    

    


        /*$header = array();
        $header = [
        'token' => 'CB3EB3B5RD2C2R4A75RA298R1AD86A3C48C5',
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
        ];

        $response = Http::withHeaders($header)->get('http://api.frenet.com.br/CEP/Address/{20530420}');/*, [
        "SellerCEP" => '20530420',
    'RecipientCEP'=> '06110160',
    'ShipmentInvoiceValue'=> '320.685',
    'ShippingServiceCode'=> null,
    'ShippingItemArray'=> [
        [
            'Height'=> '2',
            'Length'=> '33',
            'Quantity'=> '1',
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
    
        
    ]);*/


     
    

    
    



        /*$usuario = "Brendon Lina";

    	$perfil = "Desenvolvedor Full Stack";

    	$empresa = "F3x";

    	$dados=[

    		'usuario'=>$usuario,
    		'perfil'=>$perfil,
    		'empresa'=>$empresa,

    	];*/

    	//return view('home', $dados);
        //return Http::get('http://api.frenet.com.br/CEP/Address/{20530420}');
        //echo $response;
    }

}


