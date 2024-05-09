<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome2');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/skill', function () {
    return view('skill');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//入力ページ
Route::get('/contact', [ContactController::class, 'index'])->name('index');

//確認ページ
// Route::get('/confirm',[ContactController::class, 'confirm']);
Route::post('/confirm',[ContactController::class, 'confirm'])->name('confirm');

//送信完了ページ
// Route::get('/thanks',[ContactController::class, 'send']);
Route::post('/thanks',[ContactController::class, 'send'])->name('send');

Route::middleware('auth')->group(function () {
    Route::get('/stocks', [StockController::class, 'index'])->name('stock.index');
    Route::get('/myCart', [StockController::class, 'myCart'])->name('stock.myCart');
    Route::post('/addMyCart', [StockController::class, 'addMyCart'])->name('stock.addMyCart');
    Route::post('/deleteMyCartStock', [StockController::class, 'deleteMyCartStock'])->name('stock.deleteMyCartStock');
    Route::get('/checkout', [StockController::class, 'checkout'])->name('stock.checkout');
    Route::get('/success', [StockController::class, 'success'])->name('stock.success');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
