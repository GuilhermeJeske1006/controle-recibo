<?php

use App\Http\Controllers\Budget\{CheckoutBudget, DetailController as BudgetDetailController, DownloadController as BudgetDownloadController};
use App\Http\Controllers\Receipt\{CheckoutController, DetailController, DownloadController};
use App\Http\Controllers\Signature\RegisterController as SignatureRegisterController;
use App\Http\Controllers\{BudgetController, CompanyController, ProfileController, ReceiptController, RegisterController, SubscribeController};
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

Route::get('/', function () {return view('index');})->name('home');

Route::get('/signature/register', SignatureRegisterController::class)->name('signature.register');

Route::get('/subscribe', SubscribeController::class)->name('subscribe');

Route::middleware(['auth', 'subscribed', 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/company/register', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/company/register', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::patch('/company/edit', [CompanyController::class, 'update'])->name('company.update');

    Route::get('/receipt/detail/{receipt}', DetailController::class)->name('receipt.detail');
    Route::get('/receipt/download', DownloadController::class)->name('receipt.download');
    Route::get('/register/receipt', [ReceiptController::class, 'index'])->name('register.receipt');
    Route::get('/receipt/checkout', CheckoutController::class)->name('receipt.checkout');

    Route::get('/budget/register', [BudgetController::class, 'index'])->name('budget.register');
    Route::get('/budget/checkout', CheckoutBudget::class)->name('budget.checkout');
    Route::get('/budget/download', BudgetDownloadController::class)->name('budget.download');
    Route::get('/budget/detail/{budget}', BudgetDetailController::class)->name('budget.detail');
});

require __DIR__ . '/auth.php';
