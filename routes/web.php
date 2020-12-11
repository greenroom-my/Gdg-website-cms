<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Website\HomeController@index')->name('website.home');

//Route::get('/home', [App\Http\Controllers\Website\HomeController::class, 'index'])->name('home');
