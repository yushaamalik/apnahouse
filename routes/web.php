<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('pages.index');

Route::get('home', 'HomeController@home')->name('home');

Auth::routes();

// MODIFICATION REQUEST

Route::name('modification.')->prefix('modification')->group(function () {
    Route::get('view/{id}/{architectId}/{modificationId}', 'ModificationsController@view')->name('view');
    Route::post('save/{planId}/{architectId}', 'ModificationsController@store')->name('store');
});

// MESSAGES

Route::name('message.')->prefix('message')->group(function () {
    Route::post('send', 'MessagesController@send')->name('user.send');
});
