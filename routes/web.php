<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Front\HomepageController@index')->name('front.homepage');
Route::get('/courses/cat/{id}', 'App\Http\Controllers\Front\CourseController@cat')->name('front.cat');
Route::get('/courses/cat/{id}/course/{c_id}', 'App\Http\Controllers\Front\CourseController@show')->name('front.show');
Route::get('/about', 'App\Http\Controllers\Front\AboutpageController@about')->name('front.aboutpage');
Route::get('/contact', 'App\Http\Controllers\Front\ContactpageController@contact')->name('front.contactpage');
Route::get('/form', 'App\Http\Controllers\Front\FormController@form')->name('front.formpage');
