<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Tenant\TransactionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/logout', [LoginController::class, 'logout']);

Route::group([
    // 'prefix' => '/',
    'controller' => FrontController::class
], function () {
    Route::get('/', 'index');

    Route::get('/car/{id}/detail', 'detailCar');
    // Route::get('/car/{id}/rent', 'rentCar');
    Route::post('/car/rent', 'storeRentCar');

    // Cart

    Route::get('/cart', 'cart')->middleware('auth');
    // Checkout
    Route::get('/checkout/{cart_id}', 'checkout')->middleware('auth');
    Route::post('/checkout', 'storeCheckout')->middleware('auth');

    Route::get('/success-checkout', 'successCheckout')->middleware('auth');

    // Redirect Tripay

    Route::get('redirect', 'getRedirect');

    // Daftar
    Route::get('/signup', 'signup');
    Route::post('/signup', 'storeSignup');
});


// Admin

Route::prefix('admin')->middleware('auth', 'role:Admin')->group(function () {

    // Category Car
    Route::group([
        'prefix' => 'category-car',
        'controller' => CategoryController::class
    ], function () {
        Route::get('/', 'index');
        Route::get('/ajax', 'ajax');
        Route::post('/', 'store');
    });

    Route::group([
        'prefix' => 'car',
        'controller' => CarController::class,
    ], function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
    // End Category Car

});



// Tenant

Route::prefix('tenant')->middleware('auth', 'role:Tenant')->group(function () {
    Route::group([
        'prefix' => 'car',
        'controller' => CarController::class,
    ], function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::get('/ajax', 'ajax');
    });

    Route::group([
        'prefix' => 'transactions',
        'controller' => TransactionController::class,
    ], function () {
        Route::get('/', 'index');
    });
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
