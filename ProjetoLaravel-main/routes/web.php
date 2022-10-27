<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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

Route::group(['middleware'=>'auth'],function(){
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index']);

Route::get('/clientes/create', [App\Http\Controllers\ClientesController::class, 'create']);

Route::post('/clientes/store', [App\Http\Controllers\ClientesController::class, 'store']);
});


Route::group(['middleware'=>'auth','prefix' => 'produtos', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'produtos', 'uses' => '\App\Http\Controllers\ProdutosController@index']);
    Route::get('create', ['as' => 'produtos.create', 'uses' => '\App\Http\Controllers\ProdutosController@create']);
    Route::get('{id}/destroy', ['as' => 'produtos.destroy', 'uses' => '\App\Http\Controllers\ProdutosController@destroy']);
    Route::get('{id}/edit', ['as' => 'produtos.edit', 'uses' => '\App\Http\Controllers\ProdutosController@edit']);
    Route::put('{id}/update', ['as' => 'produtos.update', 'uses' => '\App\Http\Controllers\ProdutosController@update']);
    Route::post('store', ['as' => 'produtos.store', 'uses' => '\App\Http\Controllers\ProdutosController@store']);
});
    
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Auth::routes();

