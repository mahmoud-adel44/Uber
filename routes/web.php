<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::namespace('Admin')->prefix('dashboard')->group(function () {
    // Route::get('/login', 'AuthController@login')->name('admin.login');

    // Route::get('login/github', 'AuthController@redirectToProvider')->name('admin.login.redirectToProvider');
    // Route::get('login/github/callback', 'AuthController@handleProviderCallback')->name('admin.login.handleProviderCallback');

    // Route::group(['middleware' => ['admin']], function () {
    Route::resource('/', 'AdminController');

    Route::resource('/drivers', 'DriverController')->except('show', 'edit', 'update');
    Route::get('/drivers/edit/{id}', 'DriverController@edit')->name('admins.driver.edit');
    Route::post('/drivers/update', 'DriverController@update')->name('admins.driver.update');
    Route::get('/drivers/delete/{id}', 'DriverController@delete')->name('admins.driver.delete');
    //--------------------------------------------------------------------------------------------
    Route::resource('/towns', 'TownController')->except('show', 'edit', 'update');
    Route::get('/towns/edit/{id}', 'TownController@edit')->name('admins.town.edit');
    Route::post('/towns/update', 'TownController@update')->name('admins.town.update');
    Route::get('/towns/delete/{id}', 'TownController@delete')->name('admins.town.delete');
    //---------------------------------------------------------------------------------------------
    Route::resource('/travels', 'TravelController')->except('show', 'edit', 'update');
    Route::get('/travels/edit/{id}', 'TravelController@edit')->name('admins.travel.edit');
    Route::get('/travels/show/{id}', 'TravelController@show')->name('admins.travel.show');
    Route::post('/travels/update', 'TravelController@update')->name('admins.travel.update');
    Route::get('/travels/delete/{id}', 'TravelController@delete')->name('admins.travel.delete');
});

// });


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
