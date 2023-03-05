<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RouterController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\UserController;
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

// General
Route::prefix('/')->group(function () {
    Route::get('/', [RouterController::class, 'home'])->name('home');
    Route::get('/login', [RouterController::class, 'login'])->name('login')->middleware('guest');
    Route::get('/register', [RouterController::class, 'register'])->name('register')->middleware('guest');
    Route::get('/about', [RouterController::class, 'about'])->middleware('auth');
    Route::get('/store', [RouterController::class, 'store'])->middleware('auth');
});


// User
Route::prefix('/user')->group(function () {
    Route::post('/auth', [UserController::class, 'authanticate']);
    // Route::get('/', [UserController::class, 'index'])->middleware('auth');
    // Route::get('/add', [UserController::class, 'create'])->middleware('auth');
    Route::post('/store', [UserController::class, 'store'])->middleware('guest');
    // Route::get('/edit/{user}', [UserController::class, 'edit'])->middleware('auth');
    // Route::put('/update/{user}', [UserController::class, 'update'])->middleware('auth');
    // Route::get('/settings', [UserController::class, 'show'])->middleware('auth');
    // Route::put('/update-info/{user}', [UserController::class, 'updateInfo'])->middleware('auth');
    // Route::put('/update-pass/{user}', [UserController::class, 'updatePass'])->middleware('auth');
    Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
    // Route::delete('/delete/{user}', [UserController::class, 'destroy'])->middleware('auth');
});

// Shipment
Route::prefix('/shipment')->group(function () {
    Route::get('/', [ShipmentController::class, 'index'])->middleware('auth');
    Route::get('/add', [ShipmentController::class, 'add'])->middleware('auth');
    Route::post('/store', [ShipmentController::class, 'store'])->middleware('auth');
    Route::get('/edit/{shipment}', [ShipmentController::class, 'show'])->middleware('auth');
    Route::put('/update/{shipment}', [ShipmentController::class, 'update'])->middleware('auth');
    Route::delete('/delete/{shipment}', [ShipmentController::class, 'destroy'])->middleware('auth');
    Route::get('/view/{shipment}', [ShipmentController::class, 'view'])->middleware('auth');
    Route::post('/order/{shipment}', [ShipmentController::class, 'order'])->middleware('auth');
});


// Order
Route::prefix('/order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->middleware('auth');
    // Route::get('/add', [ShipmentController::class, 'add'])->middleware('auth');
    // Route::post('/store', [ShipmentController::class, 'store'])->middleware('auth');
    // Route::get('/edit/{shipment}', [ShipmentController::class, 'show'])->middleware('auth');
    // Route::put('/update/{shipment}', [ShipmentController::class, 'update'])->middleware('auth');
    Route::put('/finish/{order}', [OrderController::class, 'finish'])->middleware('admin');
    Route::delete('/delete/{shipment}/{order}', [OrderController::class, 'destroy'])->middleware('auth');
    // Route::get('/view/{shipment}', [ShipmentController::class, 'view'])->middleware('auth');
    // Route::post('/order/{shipment}', [ShipmentController::class, 'order'])->middleware('auth');
});


// Admin Dashboard
Route::prefix('/dashboard')->group(function () {
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin');
    Route::get('/requests', [DashboardController::class, 'requests'])->middleware('admin');
    Route::get('/orders', [DashboardController::class, 'orders'])->middleware('admin');
    // Route::get('/users', [DashboardController::class, 'users'])->middleware('admin');
});
