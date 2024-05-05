<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductOrderController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('products', ProductController::class);
        Route::resource('product_orders', ProductOrderController::class); // kalau resoruce ga perlu pake name


        Route::get('/transactions', [ProductOrderController::class, 'transactions'])->name('product_orders.transaction');
        // kala mengunakan ProductOrder $productOrder harus sama pada isi paramater
        Route::get('/transactions/details/{productOrder}', [ProductOrderController::class, 'transactions_details'])->name('product_orders.transactions.details');
        Route::get('/download/file/{productOrder}', [ProductOrderController::class, 'download_file'])->name('product_orders.download')->middleware('throttle:1,1'); // pengguna bisa mendownload dalam 2 menit sekali
    });
});

require __DIR__ . '/auth.php';
