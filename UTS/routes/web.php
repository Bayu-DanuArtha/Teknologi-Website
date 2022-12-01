<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;

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

Route::get('/landingpage', function () {
    return view('landingpage');
})->middleware(['auth', 'verified'])->name('landingpage');

Route::get('/daftar', function () {
    return view('daftar');
})->middleware(['auth', 'verified'])->name('daftar');

Route::get('marketplace', [HomeControler::class, 'marketplace'])->name('marketplace');

Route::get('/democilin', function () {
    return view('democilin');
})->middleware(['auth', 'verified'])->name('democilin');

Route::get('/paratusin', function () {
    return view('paratusin');
})->middleware(['auth', 'verified'])->name('paratusin');

Route::get('/paracetamol', function () {
    return view('paracetamol');
})->middleware(['auth', 'verified'])->name('paracetamol');

Route::get('/antimigren', function () {
    return view('antimigren');
})->middleware(['auth', 'verified'])->name('antimigren');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
