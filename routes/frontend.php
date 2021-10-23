<?php

use Illuminate\Http\Request;
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

Route::namespace('Frontend')
    ->group(function () {
        Route::get('index.html', 'PageController@index')->name('frontend.index');
        Route::get('package.html', 'PageController@package')->name('frontend.package');
        Route::get('supporting.html', 'PageController@supporting')->name('frontend.supporting');
    });
