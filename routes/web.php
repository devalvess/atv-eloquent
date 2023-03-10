<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
Route::get('/clients/name/{name}', [ClientController::class, 'name']);
Route::get('/clients/create', [ClientController::class, 'create']);
Route::get('/clients/show/{client}', [ClientController::class, 'show']);
Route::post('/clients/store', [ClientController::class, 'store']);
Route::get('/clients/search/{text}', [ClientController::class, 'search']);
Route::get('/clients/bills/{client}', [ClientController::class, 'bills']);
