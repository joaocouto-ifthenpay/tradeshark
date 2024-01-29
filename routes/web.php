<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
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




Route::get('/register', function () {
    return view('auth/register');
})->name('register');



Route::get('/', function () {
    return view('frontoffice/inicio');
})->name('inicio');

Route::get('/contactos', function () {
    return view('frontoffice/contactos');
})->name('contactos');

Route::get('/perfil', function () {
    return view('frontoffice/perfil');
})->name('perfil');

Route::get('/order/confirmation', function () {
    return view('frontoffice/orderConfirmation');
})->name('loja.orderConfirmation');



Route::resource('user', UserController::class);

Route::view('/login', 'auth.login')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/item', [ItemController::class, 'index']);

Route::get('/loja', [LojaController::class, 'index'])->name('loja.index');
Route::get('/item/{id}', [LojaController::class, 'details'])->name('loja.details');

Route::get('/cart', [CartController::class, 'getCart'])->name('loja.cart');
Route::post('/cart', [CartController::class, 'addCart'])->name('loja.addCart');
Route::post('/cart/remove', [CartController::class, 'removeCart'])->name('loja.removeCart');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('loja.updateCart');
Route::get('/cart/clean', [CartController::class, 'cleanCart'])->name('loja.cleanCart');

Route::post('/order/add', [OrderController::class, 'addOrder'])->name('loja.addOrder');

// Route::get('/order/confirmation', [OrderController::class, 'orderConfirmation'])->name('loja.orderConfirmation');
// Route::get('/cart/order', [CartController::class, 'order'])->name('loja.order');

// Route::get('/cart/discount', [CartController::class, 'cleanCart'])->name('loja.cleanCart');
