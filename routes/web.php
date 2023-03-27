<?php

use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Tenant\RentalController;
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
    Route::post('get-car', 'getCar');
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
    Route::get('/signup/company', 'signupCompany');
    Route::post('/signup', 'storeSignup');
    Route::post('signup-company', 'storeSignupCompany');
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

    // Member
    Route::group([
        'prefix' => 'members',
        'controller' => MemberController::class,
    ], function () {
        Route::get('/', 'index');
    });
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

    Route::group([
        'prefix' => 'rental',
        'controller' => RentalController::class,
    ], function () {
        Route::get('/', 'index');
        Route::get('/detail/{transaction_id}', 'detail');

        Route::get('/take-car/{rental_id}', 'takeCar');
        Route::get('/rent-car/{rental_id}', 'rentCar');
        Route::get('/return-car/{rental_id}', 'returnCar');
        Route::post('/rating', 'addRating');
    });
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
