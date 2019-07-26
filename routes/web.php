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

Route::get('/','HomeController@homeindex')->name('Home.homeindex');

Route::get('/login','LoginController@loginView')->name('Login.loginView');
Route::post('/login','LoginController@checkLogin');

Route::get('/register','LoginController@registerView')->name('Login.registerView');
Route::post('/register','LoginController@checkRegistration');

Route::get('/admin','AdminController@index')->name('Admin.index');
Route::get('/user','UserController@index')->name('User.index');
Route::get('/profile', 'UserController@profile')->name('User.profile');
Route::get('/lottery', 'LotteryController@getLottery')->name('User.lottery');
Route::get('/setting', 'UserController@settings')->name('User.settings');
Route::get('/donate', 'UserController@donate')->name('User.donate');
Route::get('/ticket', 'UserController@ticket')->name('User.ticket');

Route::get('/index', 'LogoutController@index')->name('Logout.index');
Route::get('/edit', 'UserController@edit')->name('User.edit');

