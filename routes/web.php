<?php

use App\Http\Controllers\Budget\{CheckoutBudget, DetailController as BudgetDetailController, DownloadController as BudgetDownloadController, SendEmailController};
use App\Http\Controllers\{BudgetController, CompanyController, ProfileController, ReceiptController, SubscribeController};
use App\Http\Controllers\Newsletter\SendController;
use App\Http\Controllers\Receipt\{CheckoutController, DetailController, DownloadController, sendEmailController as ReceiptSendEmailController};
use App\Http\Controllers\Signature\RegisterController as SignatureRegisterController;
use Illuminate\Support\Facades\{Auth, Route};

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
    // Auth::loginUsingId(2);

    return view('index');
})->name('index');

Route::get('/signature/register', SignatureRegisterController::class)->name('signature.register');

Route::get('/subscribe', SubscribeController::class)->name('subscribe');
Route::post('/newsletter/register', SendController::class)->name('newsletter.register');

Route::get('/budget/download', BudgetDownloadController::class)->name('budget.download');
Route::get('/receipt/download', DownloadController::class)->name('receipt.download');

Route::middleware(['auth', 'subscribed', 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('home');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/company/register', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/company/register', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::put('/company/update/{company}', [CompanyController::class, 'update'])->name('company.update');

    Route::get('/receipt/detail/{receipt}', DetailController::class)->name('receipt.detail');
    Route::get('/register/receipt', [ReceiptController::class, 'index'])->name('register.receipt');
    Route::get('/receipt/checkout', CheckoutController::class)->name('receipt.checkout');
    Route::get('receipt/send/{receipt}', ReceiptSendEmailController::class)->name('receipt.send');

    Route::get('/budget/register', [BudgetController::class, 'index'])->name('budget.register');
    Route::get('/budget/checkout', CheckoutBudget::class)->name('budget.checkout');
    Route::get('/budget/detail/{budget}', BudgetDetailController::class)->name('budget.detail');
    Route::get('/budget/send/{budget}', SendEmailController::class)->name('budget.send');

});

require __DIR__ . '/auth.php';
