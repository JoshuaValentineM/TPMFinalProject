<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HackatonController;
use App\Http\Controllers\MemberController;
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

Route::get('/dashboard', [MemberController::class, 'getDashboard'])->name('getDashboard');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/add-member/{id}', [MemberController::class, 'createMember'])->name('createMember');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/get-team', [MemberController::class, 'getTeamById'])->name('getTeamById');


Route::group(['middleware' => IsAdminMiddleware::class], function () {
    Route::get('/admin-dashboard', function () {
        return view('admindashboard');
    });

    Route::get('/admin-participants', function () {
        return view('adminparticipants');
    });
});
