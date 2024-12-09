<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserSideController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserSideController::class, 'renderComingSoonPage'])->name('coming-soon');

Route::group(['prefix' => 'Admin'], function() {

    Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');

    Route::get('/properties', [PropertyController::class, 'index'])->middleware(['auth', 'verified'])->name('properties');
    Route::post('/add-property', [PropertyController::class,'store'])->middleware(['auth', 'verified'])->name('properties.store');
    Route::post('/delete-property', [PropertyController::class, 'destroy'])->middleware(['auth', 'verified'])->name('properties.destroy');
    Route::post('/edit-property', [PropertyController::class, 'update'])->middleware(['auth', 'verified'])->name('properties.edit');
    Route::post('/addGallery', [PropertyController::class, 'addGallery'])->middleware(['auth', 'verified'])->name('properties.addGallery');
    Route::post('/deleteGallery', [PropertyController::class, 'deleteGallery'])->middleware(['auth', 'verified'])->name('properties.deleteGallery');

    Route::get('/categories', [CategoryController::class, 'index'])->middleware(['auth', 'verified'])->name('categories');
    Route::post('/add-category', [CategoryController::class,'store'])->middleware(['auth', 'verified'])->name('categories.store');
    Route::post('/delete-category', [CategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('categories.destroy');
    Route::post('/edit-category', [CategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('categories.edit');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
