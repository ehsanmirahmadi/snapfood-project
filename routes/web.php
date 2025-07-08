<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user-management');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/', [HomeController::class, 'welcome'])->name('home');

// --- احراز هویت ---
// لاگین
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // ثبت‌نام
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// --- مسیرهای محافظت شده ---
Route::middleware('auth')->group(function () {
    // عملیات اصلی
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // مدیریت منوها
    Route::prefix('menus')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menus.index');
        Route::post('/', [MenuController::class, 'store'])->name('menus.store');
        Route::get('/create', [MenuController::class, 'create'])->name('menus.create');
        Route::get('/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
        Route::put('/{menu}', [MenuController::class, 'update'])->name('menus.update');
        Route::delete('/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');
    });

    // مدیریت سفارشات
    Route::prefix('orders')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('orders.index');
        Route::post('/', [OrderController::class, 'store'])->name('orders.store');
        Route::get('/create', [OrderController::class, 'create'])->name('orders.create');
        Route::get('/{order}', [OrderController::class, 'show'])->name('orders.show');
        Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
        Route::put('/{order}', [OrderController::class, 'update'])->name('orders.update');
        Route::delete('/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
    });
});
