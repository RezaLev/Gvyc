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

Route::view('/', 'v_home');
Route::view('login', 'v_loginAdmin');

Route::prefix('admin')->group(function () {
    Route::view('/', 'v_dashboardAdmin');
    Route::view('menu', 'v_menuAdmin');
    Route::view('fasilitas', 'v_fasilitasList');
    Route::controller(OrderController::class)->group(function () {
        Route::get('/orders/{id}', 'show');
        Route::post('/orders', 'store');
    });
});
