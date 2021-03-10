<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'HomeController@home')->name('dashboard');
//Profiles
Route::get('/complete-profile', 'ArchitectProfilesController@create')->name('profile.create');
Route::post('profile-submission', 'ArchitectProfilesController@store')->name('profile.store');

//Plans
Route::get('/my-plans', 'PlansController@myPlans')->name('plan.myPlans');
Route::get('/add-new-plan', 'PlansController@create')->name('plan.create');
Route::post('save-plan', 'PlansController@store')->name('plan.store');
Route::get('/view-plan/{id}', 'PlansController@single')->name('plan.view');

//ModificationRequests
Route::get('/modification-requests', 'ModificationRequestsController@index')->name('modification.index');
Route::get('/modification-request-view/{userId}/{planId}/{modificationId}', 'ModificationRequestsController@view')->name('modification.view');



