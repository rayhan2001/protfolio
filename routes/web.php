<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
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
//  <=============== Frontend Route ===============>
Route::get('/',[FrontendController::class,'index'])->name('home');
Route::post('/contact',[FrontendController::class,'Contact'])->name('contact');


//  <=============== Admin Route ===============>
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('home',HomeController::class);
    Route::get('status/{id}',[HomeController::class,'status'])->name('status');
    Route::resource('about',AboutController::class);
    Route::get('status/{id}',[AboutController::class,'status'])->name('status');
    Route::resource('service',ServiceController::class);
    Route::get('status/{id}',[ServiceController::class,'status'])->name('status');
    Route::resource('contacts',ContactController::class);
});
