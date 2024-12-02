<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'Admin'], function() {

    Route::get('/', function () {
        return view('admin.index');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/properties', function () {
        return view('admin.properties');
    })->middleware(['auth', 'verified'])->name('properties');

    Route::get('/categories', [CategoryController::class, 'index'])->middleware(['auth', 'verified'])->name('categories');
    Route::post('/add-category', [CategoryController::class,'store'])->middleware(['auth', 'verified'])->name('categories.store');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
