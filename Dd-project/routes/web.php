<?php
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PaymentPlanController;
use App\Http\Controllers\PaymentProofController;
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
Route::view('/invest', 'dashboardLinks.terms');
Route::view('/plans', 'dashboardLinks.payment');
Route::view('/withdraw', 'dashboardLinks.wallet');
Route::view('/terms', 'dashboardLinks.terms');
Route::view('/deposit', 'dashboardLinks.deposit');


Route::get('/payment/{method}', [PaymentPlanController::class, 'showPaymentPage']);
Route::post('/payment-proof', [PaymentProofController::class, 'store'])->name('payment.proof');



Route::put('/admin/confirm-proof/{id}', [AdminController::class, 'confirmProof'])->name('admin.confirm-proof');


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


Route::get('/home', [CryptoController::class, 'getMarketTrends'])->name('home');




