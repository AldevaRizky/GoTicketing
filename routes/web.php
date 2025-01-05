<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardControllers;
use App\Http\Controllers\Landing\LandingControllers;
use App\Http\Controllers\Landing\BookingControllers;
use App\Http\Controllers\Admin\AdminKotaControllers;


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

Route::get('/', function () {
    return view('landing.index');
});


Route::get('/index', [LandingControllers::class, 'index'])->name ('landing.index');
Route::get('/pemesanan', [LandingControllers::class, 'pemesanan'])->name('landing.pemesanan');
Route::get('/armada', [LandingControllers::class, 'armada'])->name('landing.armada');
Route::get('/galeri', [LandingControllers::class, 'galeri'])->name('landing.galeri');
Route::get('/booking', [BookingControllers::class, 'index'])->name('booking.index');
Route::post('/booking', [BookingControllers::class, 'store'])->name('booking.store');

Route::get('/dashboard', [AdminDashboardControllers::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
    Route::resource('kota', AdminKotaControllers::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
