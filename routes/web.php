<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@home')->name('home');
Route::get('plans', 'HomeController@plans')->name('plans');
Route::get('plans/{id}', 'HomeController@plan')->name('plan');
