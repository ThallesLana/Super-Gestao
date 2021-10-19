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
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
    function(string $nome = 'Desconhecido', $categoria = 'Informação', $assunto = 'Contato', $mensagem = 'mensagem não informada') {
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});

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
