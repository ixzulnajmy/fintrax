<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', fn() => redirect()->route('dashboard'));

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('/expenses', 'Expenses')->name('expenses');
    Route::inertia('/bnpl', 'Bnpl')->name('bnpl');
    Route::inertia('/credit-cards', 'CreditCards')->name('credit-cards');
    Route::inertia('/house-loan', 'HouseLoan')->name('house-loan');
    Route::inertia('/goals', 'Goals')->name('goals');
    Route::inertia('/jars', 'Jars')->name('jars');
    Route::inertia('/wishlist', 'Wishlist')->name('wishlist');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
