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
})->middleware(['guest'])->name('entrar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('cliente', ClienteController::class);


/*Route::resource('cliente', ClienteController::class);

Route::get('/clientes', [ClienteController::class,'index'])->middleware((['auth']))->name('clientes');

Route::get('/clientes/cadastrar',[ClienteController::class,'create'])->middleware(['auth'])->name('cadastrar');

Route::post('cadastrar/add',[ClienteController::class,'store'])->middleware(['auth'])->name('add');

Route::post('clientes/editar',[ClienteController::class,'edit'])->middleware(['auth'])->name('editar');

Route::get('clientes/deletar/{$cliente}',[ClienteController::class,'destroy'])->middleware(['auth'])->name('deletar');
*/

require __DIR__.'/auth.php';
