<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('home', 'HomeController@index');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
  ]);


Route::get('/outra', function() {
    return '<h1>Outra lógica com Laravel</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id?}','ProdutoController@mostra')
    ->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJSON');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::post('/produtos/atualiza/{id}', 'ProdutoController@atualiza');

Route::get('/produtos/editar/{id?}', 'ProdutoController@editar');

Route::get('/login', 'LoginController@login');
