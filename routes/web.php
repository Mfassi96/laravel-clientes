<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ClientController::class,'index'])->name('principal');
Route::get('crear', [ClientController::class,'create'])->name('clientes.create');
Route::get('/search',[ClientController::class,'search']);
Route::post('/store',[ClientController::class,'store'])->name('clientes.store');
Route::get('/show/{id}', [ClientController::class, 'show'])->name('clientes.show');

Route::delete('/eliminar/{id}',[ClientController::class,'destroy'])->name('cliente.destroy');