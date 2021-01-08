<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ROTAS DA API PERSONALIZADAS E VERSIONADAS
Route::prefix('v1')->group(function (){
    Route::prefix('fornecedores')->group(function (){
        Route::get('list-all', 'App\Http\Controllers\FornecedoresController@index');
        //criar novos fornecedores
        Route::post('create', 'App\Http\Controllers\FornecedoresController@store');
        //CONSULTA POR ID FORNECEDOR
        Route::get('get-info/{id?}', 'App\Http\Controllers\FornecedoresController@show');
        //UPDATE
        Route::put('update/{id?}', 'App\Http\Controllers\FornecedoresController@update');
        //UPDATE
        Route::delete('delete/{id?}', 'App\Http\Controllers\FornecedoresController@destroy');
    });
});
