<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Receipt\CheckoutController;
use App\Http\Controllers\Receipt\DetailController;
use App\Http\Controllers\Receipt\DownloadController;
use App\Http\Controllers\ReceiptController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register/receipt', [ReceiptController::class, 'index'])->middleware(['auth', 'verified'])->name('register.receipt');
Route::get('/receipt/checkout', CheckoutController::class)->middleware(['auth', 'verified'])->name('receipt.checkout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/company/register', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/company/register', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::patch('/company/edit', [CompanyController::class, 'update'])->name('company.update');

    Route::get('/receipt/detail/{receipt}', DetailController::class)->name('receipt.detail');
    Route::get('/receipt/download', DownloadController::class)->name('receipt.download');

});

require __DIR__.'/auth.php';
