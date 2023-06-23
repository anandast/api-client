<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MinisterController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;

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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/dashboard', [MinisterController::class, 'index'])->name('dashboard');
Route::get('/dashboard/minister', [MinisterController::class, 'allData']);
// Route::get('/dashboard/minister', [MinisterController::class, 'index']);
// Route::patch('/dashboard/minister', [MinisterController::class, 'edit']);
Route::delete('/dashboard/minister', [MinisterController::class, 'delete']);


#Route Category
Route::get('/dashboard/categories', [CategoryController::class, 'index']);
Route::post('/dashboard/categories', [CategoryController::class, 'add']);
Route::patch('/dashboard/categories', [CategoryController::class, 'edit']);
Route::delete('/dashboard/categories', [CategoryController::class, 'delete']);

#Route Status
Route::get('/dashboard/status', [StatusController::class, 'index'])->name('dashboard');;
Route::post('/dashboard/status', [StatusController::class, 'add']);
Route::patch('/dashboard/status', [StatusController::class, 'edit']);
Route::delete('/dashboard/status', [StatusController::class, 'delete']);

#Route Party
Route::get('/dashboard/party', [PartyController::class, 'index']);
Route::post('/dashboard/party', [PartyController::class, 'add']);
Route::patch('/dashboard/party', [PartyController::class, 'edit']);
Route::delete('/dashboard/party', [PartyController::class, 'delete']);

#Route Ministry
Route::get('/dashboard/ministry', [MinistryController::class, 'index']);
Route::post('/dashboard/ministry', [MinistryController::class, 'add']);
Route::patch('/dashboard/ministry', [MinistryController::class, 'edit']);
Route::delete('/dashboard/ministry', [MinistryController::class, 'delete']);
