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

// 網站前台
Route::get('/', function () {
    return view('/welcome');
})->name('index');
// Route::get('/', 'FrontController@index');
Route::post('/contact_us', 'FrontController@contact_us');

// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


// 網站後台
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index');

    //SEO設定
    Route::get('seo', 'SeoController@index');
    Route::post('seo', 'SeoController@update');

    // Banner
    Route::get('banner','BannerController@index');
    Route::get('banner/create','BannerController@create');
    Route::post('banner/store', 'BannerController@store');
    Route::get('banner/edit/{id}', 'BannerController@edit');
    Route::post('banner/update/{id}', 'BannerController@update');
    Route::post('banner/delete/{id}', 'BannerController@delete');

    // 最新消息
    Route::get('/news','NewsController@index');
    Route::get('news/create','NewsController@create');
    Route::post('news/store', 'NewsController@store');
    Route::get('news/edit/{id}', 'NewsController@edit');
    Route::post('news/update/{id}', 'NewsController@update');
    Route::post('news/delete/{id}', 'NewsController@delete');

    //聯絡我們管理
    Route::get('contact','ContactController@index');
    Route::get('contact/{id}','ContactController@show');
    Route::post('contact/delete/{id}','ContactController@delete');
    Route::post('contact/delete_all/','ContactController@delete_all')->name('clear_contact');

    //產品類別管理
    Route::get('product_type','ProductTypeController@index');
    Route::get('product_type/create','ProductTypeController@create');
    Route::post('product_type/store', 'ProductTypeController@store');
    Route::get('product_type/edit/{id}', 'ProductTypeController@edit');
    Route::post('product_type/update/{id}', 'ProductTypeController@update');
    Route::post('product_type/delete/{id}', 'ProductTypeController@delete');

    //產品管理
    Route::get('products','ProductsController@index');
    Route::get('products/create','ProductsController@create');
    Route::post('products/store', 'ProductsController@store');
    Route::get('products/edit/{id}', 'ProductsController@edit');
    Route::post('products/update/{id}', 'ProductsController@update');
    Route::post('products/delete/{id}', 'ProductsController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
