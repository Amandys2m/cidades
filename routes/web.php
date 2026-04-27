<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cidadess', [CidadeController::class, 'listar']);