<?php

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
    return view('auth/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/profile','profile')->name('profile');
Route::post('/update-profile', 'HomeController@updateProfile')->name('profile_update');

//admin url
Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::post('/admin/login', 'Auth\LoginController@adminLogin');
Route::prefix('/admin')->name('admin.')->middleware('auth:admin')->namespace('Admin')->group(function(){
Route::view('/', 'Admin/home')->name('home');
Route::resource('/user', 'UserController');

});