<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;


use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SeatAllocationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// routes/web.php



Route::get('/', [HomeController::class, 'index']);
Route::get('/search/trips', [HomeController::class, 'searchTrips'])->name('search.trips');
Route::get('/book/ticket', [HomeController::class, 'bookTicket'])->name('book.ticket');



Route::get('/', [HomeController::class, 'index'])->name('home');


Route::resource('trips', TripController::class);
Route::resource('seat_allocations', SeatAllocationController::class);
Route::resource('locations', LocationController::class);
Route::resource('users', UserController::class);
Route::resource('dashboard', DashboardController::class);


