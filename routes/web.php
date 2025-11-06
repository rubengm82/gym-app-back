<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('api')->group(function () {
    Route::apiResource('clientes', ClienteController::class);
});
