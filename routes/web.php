<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterControlle;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [RegisterControlle::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::get('/deals.php', function () {
return view('deals');
})->name('ofertas');

Route::get('/reservation.php', function () {
    return view('reservation');
    })->name('reservacion');

Route::get('/home_1.php', function () {
    return view('home_1');
})->name('home');

Route::get('/about.php', function () {
    return view('about');
})->name('acerca de');


