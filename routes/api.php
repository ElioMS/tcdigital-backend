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

Route::get('config', [\App\Http\Controllers\ConfigController::class, 'index']);
Route::post('config', [\App\Http\Controllers\ConfigController::class, 'update']);
Route::post('convert', [\App\Http\Controllers\CalculatorController::class, 'convert']);
