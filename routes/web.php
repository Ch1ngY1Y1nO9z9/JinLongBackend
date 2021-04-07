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
Route::middleware(['auth','role'])->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index');

    //SEO設定
    Route::get('seo', 'SeoController@index');
    Route::post('seo/{id}', 'SeoController@update');

    //首頁
    //-橫幅管理
    Route::resource('arounds', 'AroundsController');
    Route::resource('banners', 'BannersController');
    //-友站連結
    Route::resource('friendships', 'FriendshipsController');

    //校園公告
    Route::resource('news_types', 'NewsTypeController');
    Route::resource('news', 'NewsController');
    Route::post('news/delNewsFile', 'NewsController@deleteFile');

    //榮譽榜
    Route::resource('honors_types', 'HonorsTypeController');
    Route::resource('honors', 'HonorsController');
    Route::post('honors/delHonorsFile', 'HonorsController@deleteFile');

    //金湖剪影
    //-相簿類型
    Route::resource('photo_albums_types', 'PhotoAlbumsTypeController');
    Route::resource('photo_albums', 'PhotoAlbumsController');
    Route::resource('photos', 'PhotosController');
    //-相簿類型
    Route::resource('videos_types', 'VideosTypeController');
    Route::resource('videos', 'VideosController');

    //行政分機
    Route::resource('offices_types', 'OfficesTypeController');
    Route::resource('telephones_contacts', 'TelephonesContactController');
    Route::resource('telephones_types', 'TelephonesTypeController');
    Route::resource('telephones', 'TelephonesController');

    //聯絡我們系統
    Route::resource('contacts', 'ContactsController');

    //帳號管理
    Route::resource('members', 'MembersController');

    //測試
    Route::get('test_page', 'TestUploadController@index');
    Route::post('test_upload', 'TestUploadController@upload');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
