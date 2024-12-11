<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MesaController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/promociones', [PromocionController::class, 'index'])->name('promociones');
Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery');
Route::get('/reserva', [ReservaController::class, 'index'])->name('reserva');
Route::post('/reserva', [ReservaController::class, 'store'])->name('reserva.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('platos', AdminController::class);
    Route::resource('mesas', MesaController::class);
    Route::get('/reservas', [AdminController::class, 'reservas'])->name('admin.reservas');
});

