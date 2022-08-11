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

Route::prefix('auth')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Auth\Login::class, 'showFormLogin'])->name(LOGIN_ROUTE);
    Route::post('/login', [\App\Http\Controllers\Auth\Login::class, 'login']);
});

Route::get('/', function () {
    return view('welcome');
});
