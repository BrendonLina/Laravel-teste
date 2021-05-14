<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;

route::get('/', [HomeController::class,'index']);

route::get('/produto', [ProdutoController::class,'index']);

route::post('/produto', [ProdutoController::class,'index']);

//route::get('/produtos', [ProdutosController::class,'teste']);

route::get('/products', [ProductsController::class,'index']);


/*Route::resource('product', ProductController::class)
        ->missing(function (Request $request) {
            return Redirect::route('product.index');
        });*/

Route::resource('product', ProductController::class)->only([
	'index' , 'create'
]);

//Route::resource('product', ProductController::class)->except([
    //'show', 'store', 'update', 'destroy'
//]);

Route::resource('products', ProductsController::class)->only([
	'index' , 'create' , 'store', 'edit', 'update'
]);


//ROTAS SIMPLES DE TESTE DE ESTUDO

route::get('/login', function(){
	return "login";
})->name('login');

route::group([
	'middleware' => [],
	'prefix' => 'admin',
	

], function(){
		//exemplo de rotas simples , redirecionamento e parametros opcionais para definir usa-se {parametro e ?}  e '' para definir a variavel com valor vazio.
	
	route::get('/red', function(){
		return "Redirecionamento principal";

	})->name('red');

	route::get('/red1/{comentario?}', function($comentario = ''){
		return "Red 1 ! ".$comentario; 
	});

	route::get('/red2', function(){
		return "Red 2 OK";

	})->name('redd2');

	route::get('/red3', function(){
		return redirect()->route('redd2');
	});

	route::get('/red4', function(){
		return "funcionou";
	});

	route::get('/', function(){
		return "Pagina Administrativa";
	});


});



/*route::middleware([])->group(function(){
	
	route::prefix('painel')->group(function(){

		//exemplo de rotas simples , redirecionamento e parametros opcionais para definir usa-se ? e ''
	route::get('/red1/{comentario?}', function($comentario = ''){
		return "Red redirecionado ! ".$comentario; 
	});

	route::get('/red2', function(){
		return redirect('/red1');

	});

	route::get('/red5', function(){
		return "funcionou";

	});

	});*/
//});

//nomeando rotas, ao mudar o nome da rota de redirecionamento o rota direcionada se redireciona para ela
route::get('/red5', function(){
	return "Testando metodo";
})->name('reds'); //nome da rota

route::get('/red6', function(){
	return redirect()->route('reds');// route é nome padrao + nome da minha rota ou seja name('reds')


});



