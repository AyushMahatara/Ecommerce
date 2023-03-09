<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/view_category', [AdminController::class, 'view_category']);
route::post('/add_category', [AdminController::class, 'add_category']);
route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
route::get('/view_product', [ProductController::class, 'index']);
route::post('/add_product', [ProductController::class, 'store']);
route::get('/show_product', [ProductController::class, 'show'])->name('productshow');
route::get('/delete_product/{id}', [ProductController::class, 'delete']);
route::get('/edit_product/{id}', [ProductController::class, 'edit']);
route::post('/update_product/{id}', [ProductController::class, 'update']);
route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);
route::get('/show_cart', [HomeController::class, 'show_cart']);
route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
route::get('/online_pay/{id}', [HomeController::class, 'online_pay']);
route::get('/cash_pay/{id}', [HomeController::class, 'cash_pay']);
