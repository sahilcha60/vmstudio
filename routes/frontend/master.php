<?php

Route::get('/', 'App\Http\Controllers\Frontend\MainController@homepage')->name('homepage');
Route::get('/about', 'App\Http\Controllers\Frontend\MainController@about')->name('about');
Route::get('/spotlight', 'App\Http\Controllers\Frontend\MainController@spotlight')->name('spotlight');
Route::get('/video', 'App\Http\Controllers\Frontend\MainController@video')->name('video');
Route::get('/contact', 'App\Http\Controllers\Frontend\MainController@contact')->name('contact');

require_once 'portfolio.routes.php';
