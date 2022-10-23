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


Route::group(['middleware'=>'auth'],function(){
    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'index']);
    
    Route::get('/produtos/create', [App\Http\Controllers\ProdutosController::class, 'create']);
    
    Route::post('/produtos/store', [App\Http\Controllers\ProdutosController::class, 'store']);
    
    Route::put('produtos/{id}/update', [App\Http\Controllers\ProdutosController::class, 'update']);
    
    Route::get('produtos/edit/{id}', [App\Http\Controllers\ProdutosController::class, 'edit']);
    
    Route::get('produtos/destroy/{id}', [App\Http\Controllers\ProdutosController::class, 'destroy']);
    });
    
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Auth::routes();

