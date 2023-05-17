<?php

use App\Http\Controllers\api\CategoriesController;
use App\Http\Controllers\api\CustomersController;
use App\Http\Controllers\api\PayModeController;
use App\Http\Controllers\api\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Rutas Customers
Route::get('/customers', [CustomersController::class, 'index'])
->name('customers.index');
Route::post('/customers' , [CustomersController::class, 'store'])
->name('custoemers.store');
Route::get('/customers/{id}', [CustomersController::class, 'show'])
->name('customers.show');
Route::put('/customers/{id}', [CustomersController::class, 'update'])
->name('customers.update');
Route::delete('/customers/{id}', [CustomersController::class, 'destroy'])
->name('customers.destroy');

// Rutas categories
Route::get('/categories', [CategoriesController::class, 'index'])
->name('categories.index');
Route::post('/categories' , [CategoriesController::class, 'store'])
->name('custoemers.store');
Route::get('/categories/{id}', [CategoriesController::class, 'show'])
->name('categories.show');
Route::put('/categories/{id}', [CategoriesController::class, 'update'])
->name('categories.update');
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])
->name('categories.destroy');

// Rutas pay_mode
Route::get('/pay_mode', [PayModeController::class, 'index'])
->name('pay_mode.index');
Route::post('/pay_mode' , [PayModeController::class, 'store'])
->name('custoemers.store');
Route::get('/pay_mode/{id}', [PayModeController::class, 'show'])
->name('pay_mode.show');
Route::put('/pay_mode/{id}', [PayModeController::class, 'update'])
->name('pay_mode.update');
Route::delete('/pay_mode/{id}', [PayModeController::class, 'destroy'])
->name('pay_mode.destroy');

// Rutas products
Route::get('/products', [ProductsController::class, 'index'])
->name('products.index');
Route::post('/products' , [ProductsController::class, 'store'])
->name('custoemers.store');
Route::get('/products/{id}', [ProductsController::class, 'show'])
->name('products.show');
Route::put('/products/{id}', [ProductsController::class, 'update'])
->name('products.update');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])
->name('products.destroy');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});