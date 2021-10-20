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

Route::get('/login', function ($id) {
    return 'Login';
});

Route::get('/clientes', function ($id) {
    return 'Clientes';
});

Route::get('/foroecedores', function ($id) {
    return 'Fornecedores';
});

Route::get('/produtos', function ($id) {
    return 'Produtos';
});
