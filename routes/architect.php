<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('home', 'HomeController@home')->name('dashboard');

// PROFILES

Route::name('profile.')->prefix('profile')->group(function () {
    Route::get('complete', 'ProfilesController@create')->name('create');
    Route::post('submission', 'ProfilesController@store')->name('store');
});

// PLANS

Route::name('plan.')->prefix('plan')->group(function () {
    Route::get('all', 'PlansController@all')->name('all');
    Route::get('add', 'PlansController@create')->name('create');
    Route::post('save', 'PlansController@store')->name('store');
    Route::get('view/{id}', 'PlansController@single')->name('view');
});

// MODIFICATION REQUESTS

Route::name('modification.')->prefix('modification')->group(function () {
    Route::get('all', 'ModificationsController@all')->name('all');
    Route::get('view/{userId}/{planId}/{modificationId}', 'ModificationsController@view')->name('view');
});
