<?php

use App\Http\Controllers\AirRequestController;
use App\Http\Controllers\AirRequestOfferController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroundRequestOfferController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RouterController;
use App\Http\Controllers\SeaRequestController;
use App\Http\Controllers\SeaRequestOfferController;
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
    Route::get('/request', [RouterController::class, 'request'])->middleware('auth');
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
    Route::put('/finish/{order}', [OrderController::class, 'finish'])->middleware('admin');
    Route::delete('/delete/{shipment}/{order}', [OrderController::class, 'destroy'])->middleware('auth');
});


// Sea Request
Route::prefix('/sea')->group(function () {
    Route::get('/', [SeaRequestController::class, 'index'])->middleware('auth');
    Route::get('/add', [SeaRequestController::class, 'add'])->middleware('auth');
    Route::post('/store', [SeaRequestController::class, 'store'])->middleware('auth');
    Route::get('/edit/{request}', [SeaRequestController::class, 'show'])->middleware('auth');
    Route::put('/update/{request}', [SeaRequestController::class, 'update'])->middleware('auth');
    Route::delete('/delete/{request}', [SeaRequestController::class, 'destroy'])->middleware('auth');
    Route::get('/view/{request}', [SeaRequestController::class, 'view'])->middleware('admin');
    Route::put('/arrived/{request}', [SeaRequestController::class, 'arrived'])->middleware('admin');
});

// Air Request
Route::prefix('/air')->group(function () {
    Route::get('/', [AirRequestController::class, 'index'])->middleware('auth');
    Route::get('/add', [AirRequestController::class, 'add'])->middleware('auth');
    Route::post('/store', [AirRequestController::class, 'store'])->middleware('auth');
    Route::get('/edit/{request}', [AirRequestController::class, 'show'])->middleware('auth');
    Route::put('/update/{request}', [AirRequestController::class, 'update'])->middleware('auth');
    Route::delete('/delete/{request}', [AirRequestController::class, 'destroy'])->middleware('auth');
    Route::get('/view/{request}', [AirRequestController::class, 'view'])->middleware('admin');
    Route::put('/arrived/{request}', [AirRequestController::class, 'arrived'])->middleware('admin');
});

// Ground Request
Route::prefix('/ground')->group(function () {
    // Route::get('/', [GroundRequestController::class, 'index'])->middleware('auth');
    Route::get('/add', [GroundRequestController::class, 'add'])->middleware('auth');
    // Route::post('/store', [GroundRequestController::class, 'store'])->middleware('auth');
    // Route::get('/edit/{request}', [GroundRequestController::class, 'show'])->middleware('auth');
    // Route::put('/update/{request}', [GroundRequestController::class, 'update'])->middleware('auth');
    // Route::delete('/delete/{request}', [GroundRequestController::class, 'destroy'])->middleware('auth');
    // Route::get('/view/{request}', [GroundRequestController::class, 'view'])->middleware('admin');
});



// Sea Offer
Route::prefix('/sea-offer')->group(function () {
    Route::get('/{request}', [SeaRequestOfferController::class, 'index'])->middleware('auth');
    Route::get('/add/{request}', [SeaRequestOfferController::class, 'add'])->middleware('admin');
    Route::post('/store/{request}', [SeaRequestOfferController::class, 'store'])->middleware('admin');
    Route::post('/choose/{request}/{offer}', [SeaRequestOfferController::class, 'choose'])->middleware('auth');
});

// Air Offer
Route::prefix('/air-offer')->group(function () {
    Route::get('/{request}', [AirRequestOfferController::class, 'index'])->middleware('auth');
    Route::get('/add/{request}', [AirRequestOfferController::class, 'add'])->middleware('admin');
    Route::post('/store/{request}', [AirRequestOfferController::class, 'store'])->middleware('admin');
    Route::post('/choose/{request}/{offer}', [AirRequestOfferController::class, 'choose'])->middleware('auth');
});

// Ground Offer
// Route::prefix('/ground-offer')->group(function () {
//     Route::get('/', [GroundRequestOfferController::class, 'index'])->middleware('auth');
// });


// Admin Dashboard
Route::prefix('/dashboard')->group(function () {
    Route::get('/requests/sea', [DashboardController::class, 'seaRequests'])->middleware('admin');
    Route::get('/requests/air', [DashboardController::class, 'airRequests'])->middleware('admin');
    Route::get('/requests/ground', [DashboardController::class, 'groundRequests'])->middleware('admin');
    Route::get('/orders', [DashboardController::class, 'orders'])->middleware('admin');
});
