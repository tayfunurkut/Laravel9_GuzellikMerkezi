<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use Laravel\Jetstream\Rules\Role;

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



    //  ************* ADMIN PANEL ROUTES **************

Route::prefix('/webpanel')->name('webpanel.')->group(function() {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    //  ************* ADMIN CATEGORY ROUTES **************

    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function() {

        Route::get('/','index')->name('index');

        Route::get('/create','create')->name('create');

        Route::get('/edit/{id}','edit')->name('edit');

        Route::get('/show/{id}','show')->name('show');

        Route::post('/store','store')->name('store');

        Route::post('/update/{id}','update')->name('update');

        Route::get('/delete/{id}','destroy')->name('delete');


    });
});



// Route::get('/webpanel',[AdminHomeController::class, 'index'])->name('admin');

// Route::get('/webpanel/category',[App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('admin_category');

// Route::get('/webpanel/category/create',[AdminCategoryController::class, 'create'])->name('admin_category_create');

// Route::get('/webpanel/category/edit/{id}',[AdminCategoryController::class, 'edit'])->name('admin_category_edit');

// Route::get('/webpanel/category/show/{id}',[AdminCategoryController::class, 'show'])->name('admin_category_show');

// Route::post('/webpanel/category/create/store',[AdminCategoryController::class, 'store'])->name('admin_category_create_store');

// Route::post('/webpanel/category/update/{id}',[AdminCategoryController::class, 'update'])->name('admin_category_update');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
