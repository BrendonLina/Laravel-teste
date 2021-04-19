<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$usuario = "Brendon Lina";

    	$perfil = "Desenvolvedor Full Stack";

    	$empresa = "F3x";

    	$dados=[

    		'usuario'=>$usuario,
    		'perfil'=>$perfil,
    		'empresa'=>$empresa,

    	];

    	return view('home', $dados);
    }
}
