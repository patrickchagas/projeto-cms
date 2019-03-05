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



Route::get('/', ['uses' => 'Controller@fazerLogin']);
Route::post('/', ['as' => 'user.login', 'uses' => 'DashboardController@auth']);
Route::get('/dashboard', ['as' => 'user.dashboard', 'uses' => 'DashboardController@index']);

Route::get('/user', ['as' => 'user.index', 'uses' => 'UsersController@index']);


// Routes AUTH Laravel
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('criador/routes', 'HomeController@criador')->middleware('criador');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
