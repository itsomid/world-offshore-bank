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

Route::get('/','HomeController@index')->name('welcome');
Route::get('/banks-list','HomeController@banksList')->name('banks/list');
Route::get('/banks/{bank}','HomeController@showBank')->name('bank/show');


Auth::routes();

Route::group(['prefix'=>'panel'],function (){
//    Route::resource('/', 'BankController@index');
    Route::resource('/banks', 'BankController');
    Route::get('/profile','UserController@profile')->name('panel/profile');
    Route::post('/profile','UserController@updateProfile')->name('panel/profile/update');
});
Route::get('/foo', function () {
    Artisan::call('storage:link');
});
//Route::group()
Route::get('/home', 'HomeController@index')->name('home');
