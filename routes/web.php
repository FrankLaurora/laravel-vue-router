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

//frontoffice routes
Route::get('/{any}', 'PageController@index')->where('any', '.*');

Auth::routes();


//backoffice routes
Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('home');

});