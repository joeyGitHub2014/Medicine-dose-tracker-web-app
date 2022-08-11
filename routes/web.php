<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MedicationsController;

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

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/account', [AccountController::class, 'show'])->middleware('auth')->name('account');
Route::post('/store', [MedicationsController::class, 'store'])->middleware('auth');
Route::get('/edit/{id}', [MedicationsController::class, 'edit'])->middleware('auth');
Route::post('/update/{id}', [MedicationsController::class, 'update'])->middleware('auth');
Route::get('/delete/{id}', [MedicationsController::class, 'delete'])->middleware('auth');
Route::post('/remove/{id}', [MedicationsController::class, 'remove'])->middleware('auth');

 