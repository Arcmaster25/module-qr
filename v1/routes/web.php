<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

/*Route::get('/dashboard', function () {
    return view('welcome');
});*/

Route::get('/', [AuthController::class, 'login_view']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/user/profile/{id?}', [UserController::class, 'show']);

Route::prefix('/client')->group(function () {

    Route::post('/store', [ClientController::class, 'store']);

    Route::get('/', [ClientController::class, 'index']);

    Route::get('/create', [ClientController::class, 'create']);

    Route::delete('/delete/{id}', [ClientController::class, 'destroy']);

    Route::get('/edit/{id}', [ClientController::class, 'edit']);

    Route::put('/update/{id}', [ClientController::class, 'update']);

});