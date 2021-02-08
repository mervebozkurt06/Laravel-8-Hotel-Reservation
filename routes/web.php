<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'index'])->name('homepage');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('/hotel/{id}/{slug}',[HomeController::class,'hotel'])->name('hotel');
Route::get('/categoryhotels/{id}/{slug}',[HomeController::class,'categoryhotels'])->name('categoryhotels');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::post('/gethotel',[HomeController::class,'gethotel'])->name('gethotel');
Route::get('/hotellist/{search}',[HomeController::class,'hotellist'])->name('hotellist');

//   /Admin(adding prefix like admin/category/add...)
Route::middleware('auth')->prefix('admin')->group(function (){
    //Admin role
    Route::middleware('admin')->group(function (){

        Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

        Route::get('category',[CategoryController::class,'index'])->name('admin_category');
        Route::get('category/add',[CategoryController::class,'add'])->name('admin_category_add');
        Route::post('category/create',[CategoryController::class,'create'])->name('admin_category_create');
        Route::post('category/update/{id}',[CategoryController::class,'update'])->name('admin_category_update');
        Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('admin_category_edit');
        Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('admin_category_delete');
        Route::get('category/show',[CategoryController::class,'show'])->name('admin_category_show');

        Route::prefix('hotel')->group(function (){
            //Route assigned name "admin.user"...
            Route::get('/',[HotelController::class,'index'])->name('admin_hotels');
            Route::get('create',[App\Http\Controllers\Admin\HotelController::class,'create'])->name('admin_hotel_add');
            Route::post('store',[App\Http\Controllers\Admin\HotelController::class,'store'])->name('admin_hotel_store');
            Route::get('edit/{id}',[HotelController::class,'edit'])->name('admin_hotel_edit');
            Route::post('update/{id}',[HotelController::class,'update'])->name('admin_hotel_update');
            Route::get('delete/{id}',[HotelController::class,'destroy'])->name('admin_hotel_delete');
            Route::get('show',[HotelController::class,'show'])->name('admin_hotel_show');

        });
        Route::prefix('messages')->group(function (){
            //Route assigned name "admin.user"...
            Route::get('/',[MessageController::class,'index'])->name('admin_message');
            Route::get('edit/{id}',[MessageController::class,'edit'])->name('admin_message_edit');
            Route::post('update/{id}',[MessageController::class,'update'])->name('admin_message_update');
            Route::get('delete/{id}',[MessageController::class,'destroy'])->name('admin_message_delete');
            Route::get('show',[MessageController::class,'show'])->name('admin_message_show');
        });

        //Hotel Image Gallery
        Route::prefix('image')->group(function (){
            //Route assigned name "admin.user".
            Route::get('create/{hotel_id}',[ImageController::class,'create'])->name('admin_image_add'); //hotel id
            Route::post('store/{hotel_id}',[ImageController::class,'store'])->name('admin_image_store'); //hotel id
            Route::get('delete/{id}/{hotel_id}',[ImageController::class,'destroy'])->name('admin_image_delete'); //image id
            Route::get('show',[ImageController::class,'show'])->name('admin_image_show');

        });

        //Room Gallery
        Route::prefix('room')->group(function (){
            //Route assigned name "admin.user".
            Route::get('create/{hotel_id}',[RoomController::class,'create'])->name('admin_room_add'); //hotel id
            Route::post('store/{hotel_id}',[RoomController::class,'store'])->name('admin_room_store'); //hotel id
            Route::get('delete/{id}/{hotel_id}',[RoomController::class,'destroy'])->name('admin_room_delete'); //image id
            Route::get('show',[RoomController::class,'show'])->name('admin_room_show');

        });


        //Review
        Route::prefix('review')->group(function (){
            //Route assigned name "admin.user".
            Route::get('/',[ReviewController::class,'index'])->name('admin_review');
            Route::post('update/{id}',[ReviewController::class,'update'])->name('admin_review_update');
            Route::get('delete/{id}',[ReviewController::class,'destroy'])->name('admin_review_delete');
            Route::get('show/{id}',[ReviewController::class,'show'])->name('admin_review_show');

        });

        #Reservations
        Route::prefix('reservation')->group(function (){
            //Route assigned name "admin.user"...
            Route::get('/',[\App\Http\Controllers\Admin\ReservationController::class,'index'])->name('admin_reservation');
            Route::post('create/{hotel_id}/{room_id}',[\App\Http\Controllers\Admin\ReservationController::class,'create'])->name('admin_reservation_create');
            Route::post('store/{hotel_id}/{room_id}',[\App\Http\Controllers\Admin\ReservationController::class,'store'])->name('admin_reservation_store');
            Route::post('edit/{id}',[\App\Http\Controllers\Admin\ReservationController::class,'edit'])->name('admin_reservation_edit');
            Route::get('update/{id}',[\App\Http\Controllers\Admin\ReservationController::class,'update'])->name('admin_reservation_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\ReservationController::class,'destroy'])->name('admin_reservation_delete');
            Route::get('show/{id}',[\App\Http\Controllers\Admin\ReservationController::class,'show'])->name('admin_reservation_show');

        });
        #Setting
        Route::get('setting',[SettingController::class,'index'])->name('admin_setting');
        Route::post('setting/update',[SettingController::class,'update'])->name('admin_setting_update');

        #FAQ
        Route::prefix('faq')->group(function (){
            //Route assigned name "admin.user"...
            Route::get('/',[FaqController::class,'index'])->name('admin_faq');
            Route::get('create',[FaqController::class,'create'])->name('admin_faq_add');
            Route::post('store',[FaqController::class,'store'])->name('admin_faq_store');
            Route::get('edit/{id}',[FaqController::class,'edit'])->name('admin_faq_edit');
            Route::post('update/{id}',[FaqController::class,'update'])->name('admin_faq_update');
            Route::get('delete/{id}',[FaqController::class,'destroy'])->name('admin_faq_delete');
            Route::get('show',[FaqController::class,'show'])->name('admin_faq_show');

        });
    }); #admin
});#auth


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get('destroymyreview/{id}',[ReviewController::class,'destroymyreview'])->name('user_review_delete'); //image id

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');

    #Hotel adding to userpage
    Route::prefix('hotel')->group(function (){
        //Route assigned name "admin.user"...
        Route::get('/',[App\Http\Controllers\HotelController::class,'index'])->name('user_hotels');
        Route::get('create',[App\Http\Controllers\HotelController::class,'create'])->name('user_hotel_add');
        Route::post('store',[App\Http\Controllers\HotelController::class,'store'])->name('user_hotel_store');
        Route::get('edit/{id}',[App\Http\Controllers\HotelController::class,'edit'])->name('user_hotel_edit');
        Route::post('update/{id}',[App\Http\Controllers\HotelController::class,'update'])->name('user_hotel_update');
        Route::get('delete/{id}',[App\Http\Controllers\HotelController::class,'destroy'])->name('user_hotel_delete');
        Route::get('show',[App\Http\Controllers\HotelController::class,'show'])->name('user_hotel_show');
    });

    #Reservations
    Route::prefix('reservation')->group(function (){
        //Route assigned name "admin.user"...
        Route::get('/',[ReservationController::class,'index'])->name('user_reservation');
        Route::post('create/{hotel_id}/{room_id}',[ReservationController::class,'create'])->name('user_reservation_create');
        Route::post('store/{hotel_id}/{room_id}',[ReservationController::class,'store'])->name('user_reservation_store');
        Route::post('update/{id}',[ReservationController::class,'update'])->name('user_reservation_update');
        Route::get('delete/{id}',[ReservationController::class,'destroy'])->name('user_reservation_delete');
        Route::get('show/{id}',[ReservationController::class,'show'])->name('user_reservation_show');
    });


    //Hotel Image Gallery
    Route::prefix('image')->group(function (){
        //Route assigned name "admin.user".
        Route::get('create/{hotel_id}',[App\Http\Controllers\ImageController::class,'create'])->name('user_image_add'); //hotel id
        Route::post('store/{hotel_id}',[App\Http\Controllers\ImageController::class,'store'])->name('user_image_store'); //hotel id
        Route::get('delete/{id}/{hotel_id}',[App\Http\Controllers\ImageController::class,'destroy'])->name('user_image_delete'); //image id
        Route::get('show',[App\Http\Controllers\ImageController::class,'show'])->name('user_image_show');

    });
});





Route::get('/admin/login', [HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class,'logout'])->name('logout');








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
