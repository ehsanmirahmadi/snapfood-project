<?php


use App\Domain\Cart\http\Controller\ActionCartController;
use App\Domain\Cart\http\Controller\ShowCartController;
use App\Domain\Menu\http\Controller\ActionMenuController;
use App\Domain\Menu\http\Controller\ShowMenuController;
use App\Domain\Order\http\Controller\ActionOrderController;
use App\Domain\Order\http\Controller\ShowOrderController;
use App\Domain\User\http\Controller\DashboardController;
use App\Domain\User\http\Controller\LoginController;
use App\Domain\User\http\Controller\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guard')->get('/', function () {});

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.exist');

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.exist');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth' , 'role:0'])->group(function () {
    Route::get('/dashboard-user', [DashboardController::class, 'showUserDashboard'])->name('dashboard.user');
    Route::get('/dashboard-user/restaurants', [DashboardController::class, 'showRestaurant'])->name('dashboard.restaurant-list');
    Route::get('/dashboard-user/restaurants/menu/{slug}', [ShowMenuController::class, 'showUserMenu'])->name('dashboard.menu');
    Route::get('/dashboard-user/cart' , [ShowCartController::class, 'showCart'])->name('dashboard.cart');
    Route::get('/dashboard-user/create-cart/{foodId}' ,  [ActionCartController::class, 'createCart'])->name('dashboard.create-cart');
    Route::get('/dashboard-user/delete-cart/{foodId}' ,  [ActionCartController::class, 'deleteCart'])->name('dashboard.delete-cart');
    Route::get('/dashboard-user/order' , [ShowOrderController::class , 'showOrderUser'])->name('dashboard.user.order');
    Route::get('/dashboard-user/order/create-order/{userSlug}/{resId}' , [ActionOrderController::class , 'createOrderUser'])->name('dashboard.user.order.create');
});
Route::middleware(['auth' , 'role:1'])->group(function () {
    Route::get('/dashboard-res' , [DashboardController::class, 'ShowResDashboard'])->name('dashboard.res');
    Route::get('/dashboard-res/menu/{slug}' , [ShowMenuController::class, 'ShowResMenu'])->name('dashboard.res.menu');
    Route::get('/dashboard-res/menu/{slug}/create-menu' , [ShowMenuController::class, 'ShowCreateMenu'])->name('dashboard.res.menu.create');
    Route::post('/dashboard-res/menu/{slug}/create-menu' , [ActionMenuController::class, 'createMenu']);
    Route::get('/dashboard-res/menu/{slug}/edit/{menuId}', [ShowMenuController::class, 'ShowEditMenu'])->name('dashboard.res.menu.edit');
    Route::put('/dashboard-res/menu/{slug}/edit/{menuId}', [ActionMenuController::class, 'editMenu']);
    Route::get('/dashboard-res/menu/{slug}/delete/{menuId}', [ActionMenuController::class, 'deleteMenu'])->name('dashboard.res.menu.delete');
    Route::get('/dashboard-res/order', [ShowOrderController::class, 'showOrderRes'])->name('dashboard.res.order');
    Route::put('/dashboard-res/order', [ActionOrderController::class, 'editOrderRes']);
});
