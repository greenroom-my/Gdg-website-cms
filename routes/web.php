<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Website\HomeController@index')->name('website.home');
Route::get('/team', 'Website\HomeController@team')->name('website.team');
Route::get('/event', 'Website\HomeController@event')->name('website.event.index');
Route::get('/blog', 'Website\HomeController@blog')->name('website.blog.index');
