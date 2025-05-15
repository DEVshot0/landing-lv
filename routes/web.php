<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('landing');
});

Route::post('/contato', [ContatoController::class, 'store']);