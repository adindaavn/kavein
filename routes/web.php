<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
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

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('cek-login');

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register-proses', [LoginController::class, 'registerProses'])->name('register-proses');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('menu', [MenuController::class, 'index'])->name('menu');
Route::get('menu/beverages', [MenuController::class, 'beverages'])->name('beverages');
Route::get('menu/dessert', [MenuController::class, 'dessert'])->name('dessert');
Route::post('menu', [MenuController::class, 'store']);
Route::patch('menu/{id}', [MenuController::class, 'update']);
Route::delete('menu/{id}', [MenuController::class, 'destroy']);

Route::get('/', [LandingController::class, 'index'])->name('home');
