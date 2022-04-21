<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\LoginController;
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
    return view('welcome');
});


Route::any('/login','App\Http\Controllers\LoginController@index')->name('login');
Route::any('/signup','App\Http\Controllers\LoginController@signup')->name('signup');
Route::any('/signupprocess','App\Http\Controllers\LoginController@signupprocess')->name('signupprocess');
Route::any('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
Route::any('/loginprocess','App\Http\Controllers\LoginController@loginprocess')->name('loginprocess');
Route::any('/home','App\Http\Controllers\DashboardController@home')->name('home');
Route::any('/blog','App\Http\Controllers\BlogController@index')->name('blog');
Route::any('/addblog/{id?}','App\Http\Controllers\BlogController@addblog')->name('addblog');
Route::any('/blogprocess','App\Http\Controllers\BlogController@blogprocess')->name('blogprocess');



