<?php
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// Admin Routes
Route::prefix('admin')->middleware('auth', 'isAdmin')->group( function() {
    Route::get('/index', [AdminController::class, 'index']);
    Route::get('/users', [AdminController::class, 'users']);
    // Route::get('/profile', [AdminController::class, 'profile']);
    // Route::put('/profile', [AdminController::class, 'update_profile']);
    // Route::put('/password', [AdminController::class, 'update_password']);
    // Route::get('/settings', [AdminController::class, 'get_settings']);
    // Route::post('/settings', [AdminController::class, 'update_settings']);
    // Route::post('/add_help', [AdminController::class, 'add_help']);
    // Route::delete('/delete_help', [AdminController::class, 'delete_help']);
    // Route::get('/transactions', [AdminController::class, 'get_transactions']);
    // Route::delete('/user-delete/{user_id}', [AdminController::class, 'user_delete']);
    // Route::get('/api_manegement', [AdminController::class, 'api_manegement']);
    // Route::delete('/help-delete/{help_id}', [AdminController::class, 'help_delete']);
});


Route::post('/save-transaction', [PaymentController::class, 'saveTransaction'])->name('save.transaction');


Route::get('/home', [CryptoController::class, 'getMarketTrends'])->name('home');




