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

// Route::get('/', function () {
//     return view('welcome');
// });


//Tela de login 
Route::get('/', ['uses' => 'Controller@fazerLogin']);


Route::get('/user', ['as' => 'user.index', 'uses' => 'UsersController@index']);


// Routes de ADMIN

//Lista de usuários
Route::get('/admin/usuarios', ['as' => 'admin.users', 'uses' => 'UsersController@users'])->middleware('admin');

//Cadastrar Usuário - tela
Route::get('/admin/usuarios/cadastar', ['as' => 'admin.users-create', 'uses' => 'UsersController@usersCreate'])->middleware('admin');




Route::get('suporte/routes', 'HomeController@suporte')->middleware('suporte');

Route::get('criador/routes', 'HomeController@criador')->middleware('criador');

Route::get('cliente/routes', 'HomeController@cliente')->middleware('cliente');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Usando rota Resources para fazer as funções do CRUD de usuário
Route::resource('/admin/usuario', 'UsersController')->middleware('admin');
