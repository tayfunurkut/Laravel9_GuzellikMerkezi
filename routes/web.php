<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminServiceController as AdminServiceController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\AppointmentController;
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
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');


//**********************LOGİN LOGOUT PANEL ROUTES****************************
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'auth.register')->name('registeruser');
Route::view('/loginadmin', 'auth.login')->name('loginadmin');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::post('/loginadmincheck', [HomeController:: class, 'loginadmincheck'])->name('loginadmincheck');


    //  ************* USER PANEL ROUTES **************


Route::middleware('auth')->group(function () {
  Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function(){
      Route::get('/', 'index')->name('index');
      Route::get('/comment', 'comment')->name('comment');
      Route::get('/comment/delete/{id}', 'commentDestroy')->name('commentdestroy');

  });
});

/************************************************************* */


Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {


    Route::prefix('appointment')->group(function () {
        Route::post('/', [\App\Http\Controllers\AppointmentController::class, 'index'])->name('user_appointments');
        Route::get('create', [\App\Http\Controllers\AppointmentController::class, 'create'])->name('user_appointment_add');
        Route::post('store', [\App\Http\Controllers\AppointmentController::class, 'store'])->name('user_appointment_store');
        Route::get('edit/{id}', [\App\Http\Controllers\AppointmentController::class, 'edit'])->name('user_appointment_edit');
        Route::post('update/{id}', [\App\Http\Controllers\AppointmentController::class, 'update'])->name('user_appointment_update');
        Route::get('delete/{id}', [\App\Http\Controllers\AppointmentController::class, 'destroy'])->name('user_appointment_delete');
        Route::get('show', [\App\Http\Controllers\AppointmentController::class, 'show'])->name('user_appointment_show');
    });

});



    //  ************* ADMIN PANEL ROUTES **************

    Route::middleware('auth')->group(function () {


        //**********************ADMİN PANEL ROUTES****************************
            Route::middleware('admin')->prefix('webpanel')->name('webpanel.')->group(function () {
            Route::get('/', [AdminHomeController::class, 'index'])->name('home');
        
                //*************************GENERAL ROUTES****************************
            Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
            Route::post('/setting/update', [AdminHomeController::class, 'settingsUpdate'])->name('setting.update');



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

      //****************     ADMİN FAQ ROUTES    *****************************
      Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');
    });


          //****************      ADMİN USER ROUTES    ****************************
    Route::prefix('user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
    });


          //****************      ADMİN APPOINTMENT ROUTES    ****************************
    Route::prefix('appointment')->group(function () {
        Route::get('/', [AppointmentController::class, 'index'])->name('admin_appointment');
        Route::get('accepted', [AppointmentController::class, 'acceptedAppointment'])->name('accepted_appointment');
        Route::get('completed', [AppointmentController::class, 'completedAppointment'])->name('completed_appointment');        
        Route::get('create', [AppointmentController::class, 'create'])->name('admin_appointment_add');
        Route::post('store', [AppointmentController::class, 'store'])->name('admin_appointment_store');
        Route::get('edit/{id}', [AppointmentController::class, 'edit'])->name('admin_appointment_edit');
        Route::post('update/{id}', [AppointmentController::class, 'update'])->name('admin_appointment_update');
        Route::get('delete/{id}', [AppointmentController::class, 'destroy'])->name('admin_appointment_delete');
        Route::get('show', [AppointmentController::class, 'show'])->name('admin_appointment_show');
    });



          //****************ADMİN COMMENT ROUTES*****************************
        Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store/', 'store')->name('store');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
    });




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
