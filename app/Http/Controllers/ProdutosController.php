<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function teste(){
        $produtos = ['produto1','produto2','produto3','produto4','produto5','produto6','produto7','produto8','produto9','produto10','produto11','produto12','produto13','produto14','produto15','produto16'];
                return $produtos;
    }

}

