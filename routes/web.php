<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Website\HomeController@index')->name('website.home');
Route::get('/team', 'Website\HomeController@team')->name('website.team');
Route::get('/event', 'Website\HomeController@event')->name('website.event.index');
Route::get('/blog', 'Website\HomeController@blog')->name('website.categories.index');
Route::get('/blog/detail', 'Website\HomeController@blogDetail')->name('website.categories.blog.detail');
Route::get('/stories/detail', 'Website\HomeController@storiesDetail')->name('website.categories.stories.detail');
