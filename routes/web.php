<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HackatonController;
use App\Http\Middleware\IsAdminMiddleware;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [HackatonController::class, 'halamanUtama'])->name('halamanUtama');

Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => IsAdminMiddleware::class], function () {
    Route::get('/welcome-admin', function () {
        return ('welcome Admin!');
    });
});
