<?php

use App\Domain\User\http\Controller\DashboardController;
use App\Domain\User\http\Controller\LoginController;
use App\Domain\User\http\Controller\ProfileController;
use App\Domain\User\http\Controller\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/menu', function () {
    return view('user-management');
});
/*Route::get('/', function () {
    return view('user-management');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});*/


Route::get('/', function () {
   return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.exist');

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.exist');
});

// روت‌های کاربران احراز هویت شده
Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard-user', [DashboardController::class, 'show'])->name('dashboard.user');

});
