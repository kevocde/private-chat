<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SecurityController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'security', 'as' => 'security.'], function() {
    Route::get('login', [SecurityController::class, 'login'])->name('login');
    Route::post('login', [SecurityController::class, 'doLogin'])->name('doLogin');
});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
