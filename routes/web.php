<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ItemController;

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



Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/registo', function () {
    return view('auth/registo');
})->name('registo');



Route::get('/', function () {
    return view('frontoffice/inicio');
})->name('inicio');

Route::get('/contactos', function () {
    return view('frontoffice/contactos');
})->name('contactos');

Route::get('/perfil', function () {
    return view('frontoffice/perfil');
})->name('perfil');



Route::get('/item', [ItemController::class, 'index']);

Route::get('/loja', [LojaController::class, 'index'])->name('loja.index');
Route::get('/item/{id}', [LojaController::class, 'details'])->name('loja.details');

Route::get('/cart', [CartController::class, 'getCart'])->name('loja.cart');
Route::post('/cart', [CartController::class, 'addCart'])->name('loja.cart.add');
