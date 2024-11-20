<?php

use App\Http\Controllers\Api\LancheController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//======================Rotas usuários=======================
//Rota para listar todos os usuários
Route::get('users', [PostController::class, "index"]);

//Rota para criar um usuário
Route::post('users', [PostController::class, "store"]);

//======================Rotas Lanches=======================
//Rota para listar todos os lanches
Route::get('lanches', [LancheController::class, "index"]);

//Rota para criar um lanche
Route::post('lanches', [LancheController::class, "store"]);
