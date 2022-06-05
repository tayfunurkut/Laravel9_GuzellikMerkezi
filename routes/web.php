<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminServiceController as AdminServiceController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\FaqController;
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

Route::get('/service/{id}',[App\Http\Controllers\HomeController::class, 'service'])->name('service');

Route::get('/categoryservice/{id}', [App\Http\Controllers\HomeController::class, 'categoryservice'])->name('categoryservice');



//**********************GENERAL ROUTES****************************
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');


//**********************LOGİN LOGOUT PANEL ROUTES****************************
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::post('/loginadmincheck', [HomeController:: class, 'loginadmincheck'])->name('loginadmincheck');


// Route::get('/webpanel/settings', [\App\Http\Controllers\AdminPanel\SettingController::class, 'index'])->name('adminsetting');


    //  ************* ADMIN PANEL ROUTES **************

Route::prefix('/webpanel')->name('webpanel.')->group(function() {


    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    Route::get('/settings', [AdminHomeController::class, 'setting'])->name('setting');

    Route::post('/settings/update', [AdminHomeController::class, 'settingsUpdate'])->name('setting.update');



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

      //****************ADMİN MESSAGE ROUTES*****************************
      Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store/', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
    });

      //****************ADMİN FAQ ROUTES*****************************
      Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');
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
