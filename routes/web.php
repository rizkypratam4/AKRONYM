<?php

use App\Models\Game;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TurnamenController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'show_all_turnamens']);
Route::get('/turnamen/{turnamen:slug}', [HomeController::class, 'show_detail_turnamen']);

Route::get('/turnamen', [TurnamenController::class, 'index']);
Route::get('/turnamen/{turnamen:slug}', [TurnamenController::class, 'show']);

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show']);

Route::get('/game', function(){
    return view('game', [
        'title' => 'game',
        'game' => Game::all()
    ]);
});


// Router Halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/email/verify', function () {
    return view('auth.verify-email', [
        'title' => 'Verifikasi email'
    ]);
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:2,2'])->name('verification.send');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/login')->with('success', 'Yeay, Verifikasi email anda berhasil, ayo masuk sekarang');
})->middleware(['auth', 'signed'])->name('verification.verify');


// Route halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route Halaman Profile
Route::get('/profile/akun', [AkunController::class, 'index']);
Route::post('/profile/akun', [AkunController::class, 'editAkunOrLogo']);


// Route Halaman room
Route::get('/turnamen/room/{turnamen:slug}', [RoomController::class, 'show']);
