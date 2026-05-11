<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductImagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductSizesController;
use App\Http\Controllers\ProductVariantsController;
use App\Http\Controllers\ProfileController;
use App\Models\ProductVariants;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('brands', BrandsController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('product',ProductsController::class );
    Route::resource('productvariant',ProductVariantsController::class);
    Route::resource('productimage', ProductImagesController::class);
    Route::resource('productsize', ProductSizesController::class);
});

require __DIR__.'/auth.php';
