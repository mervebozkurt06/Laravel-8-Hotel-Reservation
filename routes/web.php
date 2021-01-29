<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
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


    //Review
    Route::prefix('review')->group(function (){
        //Route assigned name "admin.user".
        Route::get('/',[ReviewController::class,'index'])->name('admin_review');
        Route::post('update/{id}',[ReviewController::class,'update'])->name('admin_review_update');
        Route::get('delete/{id}',[ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::get('show/{id}',[ReviewController::class,'show'])->name('admin_review_show');

    });

    #Setting
    Route::get('setting',[SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[SettingController::class,'update'])->name('admin_setting_update');

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get('destroymyreview/{id}',[ReviewController::class,'destroymyreview'])->name('user_review_delete'); //image id

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');

});





Route::get('/admin/login', [HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class,'logout'])->name('logout');








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
