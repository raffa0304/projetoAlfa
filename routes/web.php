<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\RegisterController;

Route::get('/', [RegisterController::class, 'index']);

Route::get('/forms/create', [RegisterController::class, 'create']);
Route::post('/registers', [RegisterController::class, 'register']);

Route::delete('/{id}', [RegisterController::class, 'destroy']);

Route::get('/forms/edit/{id}', [RegisterController::class, 'edit']);
Route::put('/update/{id}', [RegisterController::class, 'update']);
