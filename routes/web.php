<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobrenosController@sobrenos');

Route::get('/contato','ContatoController@contato');
// nome, categoria, assunto e mensagem

// espera de parametros por rota
// ? significa que o parametro é opcional
Route::get('/contato/{nome}/{categoria_id}',
    function(string $nome = 'Desconhecido', int $categoria_id = 1 // 1 = Informação
    ) {
    echo "Estamos aqui: $nome - $categoria_id";
    // utilizando o where para determinar configurações especificas para o parametro categoria_id no qual ele define
    // que o parametro deve receber numeros de 0 a 9 e tambem que ele tem que possui pelo menos 1 dado sendo passado ao contrario ele vai rejeitar a request
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

// O primeiro a ser declarado é o caminho, o segundo é o callback que define o direcionamento
// Route::get($uri, $callback);

/* Principais verbos http para controle de aplicação
    get
    post
    put
    patch
    delete
    options
*/
