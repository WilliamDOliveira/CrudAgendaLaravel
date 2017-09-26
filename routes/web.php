<?php

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
//==================================================
// Route::get('url', function () {
//     return view('welcome');
// });
//middleware -> para fazer autentificação

Route::get('/', function(){
    return view('home');
});


//Estou usando group para vincular a rota com o controller
Route::group([ 'prefix' =>      'pessoas'] , function(){
    Route::get( '/',            'PessoasController@index');
    Route::get( '/novo',        'PessoasController@novoView');//nova pessoa
    Route::get( '/{id}/editar', 'PessoasController@editarView' );//update //minha url recebe id que é uma variável em meu metodo no controller, a url aqui e a função tem o mesmo nome
    Route::post('/store',       'PessoasController@store');//não existe, faz parte do novo, o formulário enviar nesse link somente para salvar os telefones 
    Route::post('/update',      'PessoasController@update');
    Route::get( '/{id}/deletar', 'PessoasController@delete');
});

//Quem retorna as views é os metodos dos controllers