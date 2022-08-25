<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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
    return view('auth/login');
})->middleware(['guest'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/clientes', [ClienteController::class,'index'])->middleware((['auth']))->name('clientes');

Route::get('/clientes/cadastrar',[ClienteController::class,'create'])->middleware(['auth'])->name('cadastrar');

require __DIR__.'/auth.php';
