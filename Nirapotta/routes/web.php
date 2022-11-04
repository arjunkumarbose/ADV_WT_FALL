<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/userEdit/{id}', [UserController::class, 'userEdit'])->name('userEdit');
Route::post('/userEdit', [UserController::class, 'userEditSubmitted'])->name('userEdit');
Route::get('/userCreate', [UserController::class, 'userCreate'])->name('userCreate');
Route::post('/userCreate', [UserController::class, 'userCreateSubmitted'])->name('userCreate');
Route::get('/userList', [UserController::class, 'userList'])->name('userList');
Route::get('/user/dash', [UserController::class, 'userDash'])->name('userDash');
