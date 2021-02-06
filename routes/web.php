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

// use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\ProjetoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/projetos/novo', [ProjetoController::class, 'store'])->name('add-projeto');

// Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

// Route::resource('projetos', \App\HTTP\Controllers\ProjetoController::class);

require __DIR__.'/auth.php';
