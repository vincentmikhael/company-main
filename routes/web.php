<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SeoController;
use App\Models\Main;
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
Route::middleware(['auth'])->group(function () {
    //After Login the routes are accept by the loginUsers...
    Route::get('/dashboard',[DashboardController::class,'index']);
Route::post('/icon',[DashboardController::class,'icon']);
Route::post('/banner',[DashboardController::class,'banner']);
Route::post('/deskripsi',[DashboardController::class,'deskripsi']);
Route::get('/seo',[SeoController::class,'index']);
Route::post('/seo_action',[SeoController::class,'post']);
Route::post('/link',[DashboardController::class,'link']);
    });
Route::get('/', function () {
    $main = Main::first();
    return view('welcome',compact('main'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
