<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/RafolsRafael', 'App\Http\Controllers\tableController@index');