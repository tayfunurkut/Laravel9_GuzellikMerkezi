<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminServiceController as AdminServiceController;
use App\Http\Controllers\AdminPanel\ImageController;
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

    Route::prefix('/service')->name('service.')->controller(AdminServiceController::class)->group(function() {

        Route::get('/','index')->name('index');

        Route::get('/create','create')->name('create');

        Route::get('/edit/{id}','edit')->name('edit');

        Route::get('/show/{id}','show')->name('show');

        Route::post('/store','store')->name('store');

        Route::post('/update/{id}','update')->name('update');

        Route::get('/delete/{id}','destroy')->name('delete');


    });

        //  Image Routes

    Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{sid}', 'index')->name('index');
        Route::post('/store/{sid}','store')->name('store');
        Route::get('/destroy/{sid}/{id}','destroy')->name('destroy');
    
    });


 

});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
