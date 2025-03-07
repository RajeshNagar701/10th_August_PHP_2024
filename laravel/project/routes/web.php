<?php

use Illuminate\Support\Facades\Route;

// load all controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
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
    return view('website.index');
});

Route::get('/signup',[UserController::class,'create'])->middleware('before_u');
Route::post('/insert_signup',[UserController::class,'store'])->middleware('before_u');

Route::get('/login',[UserController::class,'login'])->middleware('before_u');
Route::post('/user_auth',[UserController::class,'user_auth'])->middleware('before_u');

Route::get('/user_logout',[UserController::class,'user_logout'])->middleware('after_u');

Route::get('/user_profile',[UserController::class,'user_profile'])->middleware('after_u');
Route::get('/user_profile/{id}',[UserController::class,'edit'])->middleware('after_u');
Route::post('/update_user/{id}',[UserController::class,'update'])->middleware('after_u');


Route::get('/about', function () {
    return view('website.about');
});

Route::get('/contact',[ContactController::class,'create']);
Route::post('/insert_contact',[ContactController::class,'store']);

Route::get('/gallery', function () {
    return view('website.gallery');
});

Route::get('/service', function () {
    return view('website.service');
});

Route::get('/categories',[CategoryController::class,'index']);


Route::get('/product_details/{id}',[ProductController::class,'index']);

Route::get('*', function () {
    return view('website.pnf');
});


//  Admin Routes

Route::group(['middleware'=>['before_a']],function(){ // apply group middleware

    Route::get('/admin_login',[AdminController::class,'admin_login']);
    Route::post('/admin_auth',[AdminController::class,'admin_auth']);
});

Route::group(['middleware'=>['after_a']],function(){ // apply group middleware

    Route::get('/admin_logout',[AdminController::class,'admin_logout']);
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/add_categories',[CategoryController::class,'create']);
    Route::post('/insert_categories',[CategoryController::class,'store']);
    Route::get('/manage_categories',[CategoryController::class,'show']);
    Route::get('/manage_categories/{id}',[CategoryController::class,'destroy']);

    Route::get('/add_orders',[OrderController::class,'create']);
    Route::get('/manage_orders',[OrderController::class,'show']);
    Route::get('/manage_orders/{id}',[OrderController::class,'destroy']);

    Route::get('/add_products',[ProductController::class,'create']);
    Route::post('/insert_product',[ProductController::class,'store']);
    Route::get('/manage_products',[ProductController::class,'show']);
    Route::get('/manage_products/{id}',[ProductController::class,'destroy']);
    Route::get('/status_products/{id}',[ProductController::class,'status']);

    Route::get('/manage_contacts',[ContactController::class,'show']);
    Route::get('/manage_contacts/{id}',[ContactController::class,'destroy']);

    Route::get('manage_users',[UserController::class,'show']);
    Route::get('/manage_users/{id}',[UserController::class,'destroy']);
    Route::get('/status_users/{id}',[UserController::class,'status']);

});

Route::get('/helpers', function () {
    return view('website.helpers');
});