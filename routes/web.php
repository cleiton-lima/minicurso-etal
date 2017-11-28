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

Route::get('/', 'PessoaController@index');
Route::get('/create_pessoa', 'PessoaController@create');
Route::post('/create_pessoa', 'PessoaController@store');
Route::get('/edit_pessoa/{id}', 'PessoaController@edit');
Route::put('/edit_pessoa/{id}', 'PessoaController@update');
Route::delete('delete_pessoa/{id}', 'PessoaController@destroy');
