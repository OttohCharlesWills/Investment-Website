<?php
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CryptoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/terms', 'dashboardLinks.terms');
Route::view('/payment', 'dashboardLinks.payment');
Route::view('/wallet', 'dashboardLinks.wallet');



Route::middleware('auth')->group(function () {
    Route::post('/deposit', [WalletController::class, 'deposit'])->name('wallet.deposit');
    Route::post('/withdraw', [WalletController::class, 'requestWithdrawal'])->name('wallet.withdraw');
    Route::post('/approve-withdrawal/{id}', [WalletController::class, 'approveWithdrawal'])->name('wallet.approve');
});


Route::post('/save-transaction', [PaymentController::class, 'saveTransaction'])->name('save.transaction');


Route::get('/home', [CryptoController::class, 'getMarketTrends'])->name('home');




