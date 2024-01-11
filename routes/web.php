<?php

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



Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/registo', function () {
    return view('auth/registo');
})->name('registo');



Route::get('/inicio', function () {
    return view('frontoffice/inicio');
})->name('inicio');

// Route::get('/loja', function () {
//     return view('frontoffice/loja');
// })->name('loja');

Route::get('/contactos', function () {
    return view('frontoffice/contactos');
})->name('contactos');

Route::get('/perfil', function () {
    return view('frontoffice/perfil');
})->name('perfil');



Route::get('/item', [App\Http\Controllers\ItemController::class, 'index']);

Route::get('/loja', [App\Http\Controllers\LojaController::class, 'index'])->name('loja');
