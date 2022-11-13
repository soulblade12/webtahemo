<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('landingpage');
});

// Route::get('/dashboard',function(){
//     return view('Dashboard.index');
// });

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::get('/Login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/Login',[LoginController::class, 'authenticate']);

Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/Register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/Register',[RegisterController::class, 'store']);




// ->middleware('auth');  

