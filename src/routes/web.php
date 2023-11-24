<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('dashboard/donate', [DonationController::class, 'index'])->name('dashboard.donate');
    Route::post('dashboard/donate/submit', [DonationController::class, 'store'])->name('dashboard.donate.submit');
    Route::get('dashboard/faq', [FaqController::class, 'index'])->name('dashboard.faq');
    Route::get('dashboard/faq/nisab-rate', [FaqController::class, 'nisabRate'])->name('dashboard.faq.nisab-rate');

});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__.'/auth.php';
