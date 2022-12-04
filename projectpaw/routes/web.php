<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\DashboardController;
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

Route::get('/',  [DashboardController::class, 'index']);
Route::view('login', 'v_loginAdmin');

Route::prefix('admin')->group(function () {
    Route::view('/', 'v_dashboardAdmin');
    Route::resource('menu', MenuController::class);
    Route::resource('cafe', CafeController::class);
    Route::resource('facilities', FacilitiesController::class);
});
