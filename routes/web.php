<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// Route::post('/register', [RegisterController::class, 'create'])->name('register');

Route::post('/add-member/{id}/{memberNumber}', [MemberController::class, 'createMember'])->name('createMember');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/payment', [MemberController::class, 'getTeamPaymentById'])->name('getTeamPaymentById');

Route::get('/timeline', function () {
    return view('usertimeline');
});

Route::post('/upload-bukti/{id}', [MemberController::class, 'createPayment'])->name('createPayment');



// Route::get('/get-team', [MemberController::class, 'getTeamById'])->name('getTeamById');


Route::group(['middleware' => IsAdminMiddleware::class], function () {
    Route::get('/admin-dashboard', [AdminController::class, 'getAdminDashboard'])->name('getAdminDashboard');

    Route::get('/admin-participant', [AdminController::class, 'getAdminParticipant'])->name('getAdminParticipant');

    Route::get('/search-team', [AdminController::class, 'searchTeam'])->name('searchTeam');

    Route::get('/verified-team', [AdminController::class, 'verifiedTeamList'])->name('verifiedTeamList');
    Route::get('/unverified-team', [AdminController::class, 'unverifiedTeamList'])->name('unverifiedTeamList');

    Route::get('/verified-team-participant', [AdminController::class, 'verifiedTeamParticipantList'])->name('verifiedTeamParticipantList');

    Route::patch('/verify-team/{id}', [AdminController::class, 'verifyTeam'])->name('verifyTeam');
    Route::patch('/verify-team-participant/{id}', [AdminController::class, 'verifyTeamParticipant'])->name('verifyTeamParticipant');

    Route::get('/admin-participant-view/{id}', [AdminController::class, 'viewParticipant'])->name('viewParticipant');

    Route::get('/admin-participant-edit/{id}', [AdminController::class, 'editParticipant'])->name('editParticipant');

    Route::get('/admin-participant-leader-edit/{id}', [AdminController::class, 'editParticipantLeader'])->name('editParticipantLeader');
    Route::patch('/admin-participant-leader-edit/{id}',  [AdminController::class, 'updateParticipantLeader'])->name('updateParticipantLeader');

    Route::get('/admin-participant-member-edit/{id}/{memberid}', [AdminController::class, 'editParticipantMember'])->name('editParticipantMember');
    Route::patch('/admin-participant-member-edit/{id}',  [AdminController::class, 'updateParticipantMember'])->name('updateParticipantMember');

    Route::get('/download', [AdminController::class, 'downloadCV'])->name('downloadCV');
});
