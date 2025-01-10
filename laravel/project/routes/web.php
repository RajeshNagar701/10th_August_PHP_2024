<?php

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
*/

Route::get('/', function () {
    return view('website.index');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/gallery', function () {
    return view('website.gallery');
});

Route::get('/service', function () {
    return view('website.service');
});

Route::get('/product', function () {
    return view('website.product');
});

Route::get('*', function () {
    return view('website.pnf');
});


//  Admin Routes


Route::get('admin-login', function () {
    return view('admin.index');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('add_categories', function () {
    return view('admin.add_categories');
});

Route::get('manage_categories', function () {
    return view('admin.manage_categories');
});

Route::get('add_products', function () {
    return view('admin.add_products');
});

Route::get('manage_products', function () {
    return view('admin.manage_products');
});

Route::get('add_blogs', function () {
    return view('admin.add_blogs');
});

Route::get('manage_blogs', function () {
    return view('admin.manage_blogs');
});

Route::get('add_services', function () {
    return view('admin.add_services');
});

Route::get('manage_services', function () {
    return view('admin.manage_services');
});


Route::get('manage_contacts', function () {
    return view('admin.manage_contacts');
});