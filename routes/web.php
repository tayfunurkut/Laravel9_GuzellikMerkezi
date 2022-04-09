<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

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

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ADMİN PANEL ROUTE 
Route::get('/webpanel',[AdminHomeController::class, 'index'])->name('admin');

// Route::get('/webpanel/category',[App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('admin_category');

// Route::get('/webpanel/category/create',[App\Http\Controllers\AdminPanel\CategoryController::class, 'create'])->name('admin_category_create');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
