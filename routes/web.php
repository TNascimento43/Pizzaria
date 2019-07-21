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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cliente','ClienteController@inserir_cliente');
Route::post('/pedido','PedidoController@novo_pedido');
Route::post('/pizza','PizzaController@inserir_pizza');

Route::put('/pizza','PizzaController@alterar_pizza');
Route::put('/pedido','PedidoController@altera_pedido');
Route::put('/cliente','ClienteController@alterar_cliente');

Route::get('/pizza','PizzaController@get_pizzas');
Route::get('/pedido','PedidoController@get_pedidos');
Route::get('/cliente','ClienteController@get_clientes');

Route::delete('/cliente','ClienteController@excluir_cliente');
Route::delete('/pizza','PizzaController@excluir_pizza');
Route::delete('/pedido','PedidoController@excluir_pedido');




