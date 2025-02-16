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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::group(array(
    'prefix' => 'home',
    'middleware' => ['auth', 'verified']
), function () {
    Route::get('/', 'HomeController@index')->name('home.index');
});

Route::group(array(
    'prefix' => 'account',
    'middleware' => ['auth', 'verified']
), function () {
    Route::get('password', 'AccountController@editPassword')->name('password.edit');
    Route::post('password', 'AccountController@updatePassword');
    Route::get('email', 'AccountController@editEmail')->name('email.edit');
    Route::post('email', 'AccountController@updateEmail');
});

Route::get('/', function () {
    return view('welcome');
});
