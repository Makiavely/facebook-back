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

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/todos', 'TodosController@index');
    Route::post('/todos', 'TodosController@store');
    Route::patch('/todos/{todo}', 'TodosController@update');
    Route::delete('/todos/{todo}', 'TodosController@destroy');
    Route::patch('/todosCheckAll', 'TodosController@updateAll');
    Route::delete('/todosDeleteCompleted', 'TodosController@destroyCompleted');

    Route::post('/logout', 'AuthController@logout');
});

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();
});*/

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
//Route::middleware('auth:api')->post('/logout', 'AuthController@logout');

//Route::get('/users/1/todos', 'TodosController@index');
//Route::get('/todos', 'TodosController@index');
//Route::post('/todos', 'TodosController@store');
//Route::patch('/todos/{todo}', 'TodosController@update');
//Route::patch('/todosCheckAll', 'TodosController@updateAll');
//Route::delete('/todos/{todo}', 'TodosController@destroy');
//Route::delete('/todosDeleteCompleted', 'TodosController@destroyCompleted');
