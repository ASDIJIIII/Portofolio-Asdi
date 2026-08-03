<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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

// Rute untuk halaman utama (Beranda)
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// Rute untuk menampilkan semua daftar proyek terpisah
Route::get('/projects', [PortfolioController::class, 'index'])->name('projects.index');

// Rute untuk detail proyek berdasarkan ID
Route::get('/projects/{id}', [PortfolioController::class, 'show'])->name('projects.show');