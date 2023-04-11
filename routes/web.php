<?php

use Illuminate\Support\Facades\Route;

//import controller
use App\Http\Controllers\TestController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrdersDetailsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;

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
}) -> name('welcome');

Route::get('/clients', [TestController::class, 'index_clients']) -> name('clients');
Route::get('/orders', [OrdersController::class, 'index_orders']) -> name('orders');
Route::get('/ordersdet', [OrdersDetailsController::class, 'index_ordersdet']) -> name('ordersdetails');
Route::get('/products', [ProductsController::class, 'index_products']) -> name('products');
Route::get('/staff', [StaffController::class, 'index_staff']) -> name('staff');
Route::get('/user', [UserController::class, 'index_user']) -> name('user');