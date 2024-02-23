<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Admin' , 'middleware' => ['auth'] ], function () {
    Route::get('/', 'HomeController@index')->name('welcome');
});
